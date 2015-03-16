<?php
    
    require_once("var.init.php");
    
    require_once("fonctionDB.php");

    require("./vues/header.php");	        // Entête du HTML.
    
    if((isset($_REQUEST['page'])))
    {
    
    // switch qui permet de diriger la requête vers la bonne "vue".
        switch($_REQUEST['page'])
        {
            case 'EvenementAVenir':         //page d'accueil 
                require("./vues/pageEvenementAVenir.php");
                break;

            case 'EvenementPasses':			//page evenement passes
                require("./vues/pageEvenementPasses.php");
                break;
        }
    }

 include("./vues/footer.php");	            // Pied du HTML
    
?>