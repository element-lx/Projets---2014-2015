<?php


	$connexion = connectBD();
    mysqli_set_charset ($connexion , "utf8" ); 	// Change le langage de connexion de mysqli pour utf8
	//ExecuteRequete ("SET NAMES 'utf8'");
	/**
	 * Connexion a la base de donnees
	 * @return resource $link resource si la connexion s'est bien realiser sinon false 
	 */

	function connectBD()
	{
  
	    /*
	    define("HOST", "127.0.0.1");
		define ("USER", "e1970585");
		define ("PWD", "770115");
		define ("BDD", "e1970585");*/
        
		//Etablir la connexion au serveur de base de donnees
		//$link = mysqli_connect("localhost", "root", "");

        $link = mysqli_connect("localhost", "e1970585", "770115");       // Connection avec Serveur Externe
        // $link = mysqli_connect("localhost", "root", "");              // Connection sur Serveur local
			
		//verifier que la connexion a fonctionnee : $link va etre null si la connexion a echouee
		if (!$link) 
		{
			die('Erreur de connexion (' . mysqli_connect_errno() . ') '
					. mysqli_connect_error());
		}

		$selected = mysqli_select_db($link, 'e1970585');   // Nom de la base de donnees
		
		//verifierifier que la selection a fonctionne : $selected va etre null si la connexion a echouer
		if(!$selected)
		{
			die('Erreur de selection (' . mysqli_connect_errno() . ') '
					. mysqli_connect_error());
		}
		
		return $link;
	}
//////////////////*******************/////////////////////////////////////////////////

	function ExecuteRequete($requete)
	{
		global $connexion;		
		$resultat = mysqli_query($connexion, $requete);
		if(!$resultat)
		{
			die('Erreur de requete (' . mysqli_errno( $connexion) . ') '         ////
					. mysqli_error($connexion));                                   ////
		}                                                                         ////
		return $resultat;                                                        ////
	}                                                                           ////
///////////////////******************//////////////////////////////////////////////



/////////////////****identification****////////////////////
function ValideUsager($username, $password)  // fonction pour le login a implementer ulterieurement
	{
		global $connexion;
		$resultat = ExecuteRequete("SELECT * from auteur where username = '" . mysqli_real_escape_string($connexion, $username). "' AND password = '" . mysqli_real_escape_string($connexion, $password) . "'");
		return mysqli_num_rows($resultat);
	}
function MotDePasse($username)  // fonction pour le login a implementer ulterieurement
	{
        global $connexion;
		$resultat = ExecuteRequete("SELECT password from auteur where username = '" .                          mysqli_real_escape_string($connexion, $username). "'");		
		$rangee = mysqli_fetch_assoc($resultat);
		return $rangee["password"];
	}

/////////*****requetes SQL********////

function RecupereNextEvent()
    {
        return ExecuteRequete("SELECT `id_evenement`, `date`, `titre`, `description` FROM evenements WHERE date >= CURDATE()");  // Si la date de l'evenement est superieur a la date actuel, l'evenement est classer dans evenement a venir.
    }


function RecuperePastEvent()
    {
        return ExecuteRequete("SELECT `id_evenement`, `date`, `titre`, `description` FROM evenements WHERE date < CURDATE() && archive = 0 order by id_evenement desc"); // Si la date de l'evenement est inferieur a la date actuel, l'evenement est classer dans evenement passer.
    }

function ListingEvenementdesc() 
    {
        return ExecuteRequest("Select titre FROM evenements where archive=1  order by id_evenement desc ");
    }
    
function RecuperePhoto ($id_evenement)
	{
		return ExecuteRequete("SELECT images.`url` from images join evenements on images.id_evenement = evenements.id_evenement where evenements.id_evenement = '".$id_evenement."'");
	}

function AfficheTitre()
    {
        return ExecuteRequete("select titre from evenements ");
    }

function AfficheContenu()
    {
        return ExecuteRequete("select evenements.description order by id_evenement desc ");
    }

function AfficheImage()
    {
        return ExecuteRequete("select images.url");
    }

?>