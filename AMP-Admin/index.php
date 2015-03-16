<?php
    
    require_once("var.init.php");
	
    require_once("fonctionDB.php");

    require("./vues/headerAdmin.php");	// Entête du HTML.
	
	
    if((isset($_REQUEST['page'])))
    {
    
                                                        // switch qui permet de diriger la requête vers la bonne "vue".
        switch($_REQUEST['page'])
        {
            case 'AdminEvenement':        
                require("./vues/pageAdminEvenement.php");
                break;
            
            case 'AdminEvenementsAjouter':
                require("./vues/pageAdminEvenementsAjouter.php");
                break;
            
            case 'addEvenement':                       // ajoute un evenement dans la BD

                $date=$_POST['newDate'];
                $titre=$_POST['newTitre'];
                $contenu=$_POST['newContenu'];
				$file = $_FILES['file'];
		
				move_uploaded_file($file["tmp_name"],"../Content/amp_2nd_cycle/".$file["name"]); // Permet d'uploader un fichier
                InsertEvenement($date, $titre, $contenu);   // fonction ajoutant la date, le titre, le contenu dans la table Évènements de la BD.
				InsertPhoto($file,SelectEvenementFromTitre($titre));
				
                include("./vues/pageAdminEvenementsAjouteReussie.php"); 
                break;
            
            case 'AdminEvenementsModifier':
                require("./vues/pageAdminEvenementsModifier.php");
                break;
            
            case 'AdminEvenementsModifier2':
                $idEvent=$_REQUEST['id_evenement'];// $idEvent=$_REQUEST['id_evenement'];
                require("./vues/pageAdminEvenementsModifier2.php");
                break;

            case 'modEvenement':
                ModifierEvenement($_POST['id_evenement'], $_POST['newDate'], $_POST['newTitre'], $_POST['newContenu']); 
                include("./vues/pageAdminEvenementsModReussie.php"); 
                break;
            
            case  'AdminEvenementsSupprimer':
                require ("./vues/pageAdminEvenementsSuprimer.php");
                break;
            
            case 'AdminEvenementsSupprimer2':
            
                $supEvent=$_REQUEST['id_evenement'];   
                DelEvenement($supEvent);        // Fonction permettant de supprimer un évènement sélectionné.
                require("./vues/pageAdminEvenementsSupReussie.php");
                break;
        }
        
       
    }

 include("./vues/footerAdmin.php");	// Pied du HTML
    
?>

