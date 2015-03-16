<?php

	$connexion = connectBD();
    mysqli_set_charset ($connexion , "utf8" );
	//ExecuteRequete ("SET NAMES 'utf8'");        // Peut servir en cas de problème avec le encoding.
                         
/*     define("HOST", "localhost");              // Constantes sur easy php. conserver en guise de  reference.
	   define ("USER", "root");
	   define ("PWD", "");
	   define ("BDD", "amp"); 
*/

/*	define("HOST", "127.0.0.1");                  // Constantes sur WebDev. 
	define ("USER", "e1970585");
	define ("PWD" "770115");
	define ("BDD" "e1970585");
*/

	function connectBD()
	{

	  //Établir la connexion au serveur de base de donnees.
      $link = mysqli_connect("localhost", "e1970585", "770115");         // A utiliser sur Webdev
      // $link = mysqli_connect("localhost", "root", "");            // A utiliser avec serveur local
			
	 	//vérifie que la connexion a fonctionnée : $link va être null si la connexion a échouée.
		if (!$link) 
		{
		die('Erreur de connexion (' . mysqli_connect_errno() . ') '
					. mysqli_connect_error());
    	}

		$selected = mysqli_select_db($link, 'e1970585');             // amp5 en local
		
		//veifie que la selection a fonctionnee : $selected va etre null si la connexion a echoee.
		if(!$selected)
		{
			die('Erreur de selection (' . mysqli_connect_errno() . ') '
			. mysqli_connect_error());
		}
		
		return $link;
	}
//////////////////*******************/////////////////////////////////////////////////

    // Fonction prmettant d'envoyer les requetes SQL au serveur
	function ExecuteRequete($requete)
	{
		global $connexion;		
		$resultat = mysqli_query($connexion, $requete);
		if(!$resultat)
		{
			die('Erreur de requete (' . mysqli_errno( $connexion) . ') '             ////
					. mysqli_error($connexion));                                    ////
		}                                                                          ////
		return $resultat;                                                         ////
	}                                                                            ////
///////////////////******************///////////////////////////////////////////////



/////////////////****identification****////////////////////

    function ValideUsager($username, $password)
	{
		global $connexion;                             // fonction pour le login a implementer ulterieurement
		$resultat = ExecuteRequete("SELECT * from auteur where username = '" . mysqli_real_escape_string($connexion, $username). "' AND password = '" . mysqli_real_escape_string($connexion, $password) . "'");
		return mysqli_num_rows($resultat);
	}

function MotDePasse($username)
	{
        global $connexion;                             // fonction pour le login a implementer ulterieurement
		$resultat = ExecuteRequete("SELECT password from auteur where username = '" .                          mysqli_real_escape_string($connexion, $username). "'");		
		$rangee = mysqli_fetch_assoc($resultat);
		return $rangee["password"];
	}


/////////*****requetes SQL section Administrateur********////

function RecupereNextEvent()               // Fonction permettant d'afficher les évènemnts à venir
    {
        return ExecuteRequete("SELECT `id_evenement`, `date`, `titre`, `description` FROM evenements WHERE date >= CURDATE() order by date desc");  
    }

function RecuperePhoto ($id_evenement)     // la clef secondaire de la table image correspond à la clef primaire de la table evenements et se join sur id_evenement
	{
		return ExecuteRequete("SELECT images.`url` from images join evenements on images.id_evenement = evenements.id_evenement where evenements.id_evenement = '".$id_evenement."'");
	}
                                      // Permet d'extraire l'id du dernier evenement venant tout juste d'être créer (voir section ajouter)  
function SelectEvenementFromTitre($titre)
	{	
		$eventId = ExecuteRequete("SELECT `id_evenement` FROM evenements WHERE titre = '".$titre."' ORDER BY date DESC LIMIT 0,1"); 
		while($rangee = mysqli_fetch_assoc($eventId))
		{
			return $rangee['id_evenement'];
		}
    }
		
function InsertPhoto($file,$eventId)     // permet d'inserer l'image à la bonne place et de la lier au  bon envenement avec id_evenement
    {
		$fileName = $file['name'];
        ExecuteRequete("INSERT INTO images (titre,url,id_evenement) VALUES ('".$fileName."','../Content/amp_2nd_cycle/".$fileName."',".$eventId.")");    
    }

function ListingEvenementdesc()               // Fonction permettant d'afficher le titre des evenements de la BD en ordre //d�croissants                                                                  
    {
        return ExecuteRequete("Select titre, id_evenement FROM evenements where archive=0  order by id_evenement desc ");
    }

function AfficherEvenement($idEvent)         // permet d'aller chercher un evenement avec un id precis
	{	
		$requete = "SELECT date, titre, description from evenements WHERE evenements.id_evenement='".$idEvent."'";
		return ExecuteRequete($requete);
	}

function DelEvenement  ($supEvent)           // permet de supprimer un evenement precis
    {
       return ExecuteRequete("DELETE FROM `evenements` WHERE `id_evenement`='".$supEvent."'");                
    }

function InsertEvenement($date, $titre, $contenu)   // fonction ajoutant un evenement dans la BD.
    {
	    global $connexion;
	    $date=mysqli_real_escape_string($connexion,$date);
	    $titre=mysqli_real_escape_string($connexion,$titre);
	    $contenu=mysqli_real_escape_string($connexion,$contenu);
    
        return ExecuteRequete("INSERT INTO `evenements` (`date`, `titre`, `description`) VALUES ('".$date."', '".$titre."', '".$contenu."')");    
    }

function ModifierEvenement($idEvent, $date, $titre, $description)  // permet la  modification d'un evenemnt voir index.
    {
        global $connexion;
        $date=mysqli_real_escape_string($connexion,$date);
        $titre=mysqli_real_escape_string($connexion,$titre);
        $description=mysqli_real_escape_string($connexion, $description);
    
        return ExecuteRequete("UPDATE evenements SET evenements.date='".$date."', evenements.titre='".$titre."', evenements.description='".mysqli_real_escape_string($connexion, $description)."' WHERE evenements.id_evenement='".$idEvent."'");
    }  

?>