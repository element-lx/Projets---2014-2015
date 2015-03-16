<?php
    /**
	 * classe Controleur 
	 * Projet Web 2
	 * 
	 * @version 2015-02-10
	 */
    class Controleur {
    	
		/**
		 * gère la sélection de l'internaute
		 */
		 // public static function gererSite(){
		 	// try{
		 		// //À l'arrivée sur le site, l'internaute n'a sélectionné 
		 		// //aucune option dans le menu
		 		// if(isset($_GET['s']) == false)
					// $_GET['s']=1;
// 				
		 		// switch($_GET['s']){
					// case 1: //rechercher un groupe
						// Controleur::gererRechercher();
						// break;
					// default :
						// echo "<p>Erreur 404 - Aucune page ne correspond à votre choix.</p>";
		 		// }
// 				
		 	// }catch(Exception $oExcep){
		 		// echo "<p>".$oExcep->getMessage()."</p>";
		 	// }
		 // }//fin de la fonction gererSite()


		 /**
		 * gère la sélection de l'internaute
		 */
		 public static function gererGabarit($section){
		 	
		 		switch($section){
					case "header": //Afficher le header
						Controleur::gererHeader();
						break;
				/*	case "nav": //Afficher le menu principale
						Controleur::gererNav();
						break; */
					case "header2": //Afficher le l'image sous le nav
						Controleur::gererHeader2();
						break;
					case "main": //Afficher la section principale
						Controleur::gererMain();
						break;
					case "footer": //Afficher le footer
						Controleur::gererFooter();
						break;

					default :
						echo "<p>Erreur 404 - Aucune page ne correspond à votre choix.</p>";
		 		
				}//fin du switch	
		 }//fin de la fonction gererGabarit()


		
		 
 		 /**
		 * Faire Afficher le Header
		 */
		 public static function gererHeader(){
		 		VueAdmin::afficherHeader();
		 }//fin de la fonction gererHeader()
        
        
       	/**
		 * Faire Afficher le Header2
		 */
		 public static function gererHeader2(){
		 		VueAdmin::afficherHeader2();
		 }//fin de la fonction gererHeader2()
             
              
        /**
		 * Faire Afficher la section main
		 */
		 public static function gererMain(){
		 		VueAdminAjouter::afficherAjouter();
				VueAdminModifier::afficherModifier();
				VueAdminSupprimer::afficherSupprimer();
		 }//fin de la fonction gererMain()
		 


		 /**
		 * Faire Afficher le Footer
		 */
		 public static function gererFooter(){
		 		VueAdmin::afficherFooter();
		 }//fin de la fonction gererFooter()

	}//fin de la classe Controleur
?>