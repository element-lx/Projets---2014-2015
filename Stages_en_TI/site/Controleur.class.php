<?php
    /**
	 * classe Controleur 
	 * 582-P41-MA Programmation Web Dynamique 3
	 * @author Caroline Martin
	 * @version 2015-02-10
	 */
    class Controleur {
    	

    	static function ajax_gerer(){
    		$requete = $_REQUEST["requeteAjax"];
			$idetape = $_REQUEST["idetape"];
	
			switch ($requete) {
				case 'afficherTouteRessource':
					$oRessource = new Ressource();
					$aRessource=$oRessource->Rechercher_Ressource_IdEtape($idetape);
					$html='';
					
					echo "<dl class='ContainerRessource '";echo "</dl>";
					foreach ($aRessource as $key => $value) {
						//var_dump($value);
						
						$html .= "<dt class='TitreRessource'>".$value['vchnomressource']."</dt>";
						$html .= "<dd class='DescriptionRessource'>".$value['txtdescripressource']."</dd>";
												
					}
					echo $html;
					
					
					break;
				
				default:
					
					break;
			}
    	}
		/**
		 * gère la sélection de l'internaute
		 */
		 public static function gererSite(){
		 	try{
		 		
				/*echo "<br>_SESSION = ";
				var_dump($_SESSION);echo "<br>";

				echo "<br>_POST = ";
				var_dump($_POST);echo "<br>";

				echo "<br>_GET = ";
				var_dump($_GET);echo "<br>";*/
			

			//À l'arrivée sur le site, l'internaute n'a sélectionné 
	 		//aucune option dans le menu
	 		if(isset($_GET['s']) == false)
				$_GET['s']=1;


			
			if(isset($_SESSION["UserID"]) && $_GET['s']!="Logout")
            {
              
               $_GET['s']="PreStage";
                
            }
            else
            {

            }
		


		 		
				
		 		switch($_GET['s']){
					case 1: //rechercher un groupe
						Controleur::gererAccueil();
						break;
					case "verificationLogin": //rechercher un groupe
						Controleur::verifierLogin();
						break;
					
					case "PreStage": //rechercher un groupe
						Controleur::gererPreStage();
						break;

					case "Logout": //rechercher un groupe
						//Processus de logout pris sur PHP.NET
				
						// Unset all of the session variables.
						$_SESSION = array();

						// If it's desired to kill the session, also delete the session cookie.
						// Note: This will destroy the session, and not just the session data!
						if (ini_get("session.use_cookies"))
						{
							$params = session_get_cookie_params();
							setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
						}

						// Finally, destroy the session.
						session_destroy();
						
						//Retourner à l'accueil
						header("Location: index.php");
						break;
					default :
						echo "<p>Erreur 404 - Aucune page ne correspond à votre choix.</p>";
		 		}
				
		 	}catch(Exception $oExcep){
		 		echo "<p>".$oExcep->getMessage()."</p>";
		 	}
		 }//fin de la fonction gererSite()


		 /**
		 * gère la sélection de l'internaute
		 */
		 public static function gererGabarit($section, $message=''){
		 	
		 		switch($section){
					case "header": //Afficher le header
						Controleur::gererHeader();
						break;
					case "nav": //Afficher le menu principale
						Controleur::gererNav();
						break;
					case "header2": //Afficher le l'image sous le nav
						Controleur::gererHeader2();
						break;
                    case "side": //Afficher le asside
						Controleur::gererSide();
						break;
					case "main": //Afficher la section principale
						Controleur::gererMain();
						break;
					case "footer": //Afficher le footer
						Controleur::gererFooter();
						break;
					case "login": //Afficher le login
						Controleur::gererLogin($message);
						break;


					default :
						echo "<p>Erreur 404 - Aucune page ne correspond à votre choix.</p>";
		 		
				}//fin du switch	
		 }//fin de la fonction gererGabarit()

		 /**
		 * gère la sélection de l'internaute
		 */
		 public static function gererMainPreStage(){
		 	try{
		 		//À l'arrivée sur le site, l'internaute n'a sélectionné 
		 		//aucune option dans le menu
		 		if(isset($_GET['s']) == false)
					$_GET['s']=1;
				echo $_GET['s'];
		 		
		 		switch($_GET['s']){
					case 1: //rechercher un groupe
						Controleur::gererRechercher();
						break;
					case "Rechercher": //rechercher un groupe
						Controleur::gererRechercher();
						break;
					default :
						echo "<p>Erreur 404 - Aucune page ne correspond à votre choix.</p>";
		 		}
				
		 	}catch(Exception $oExcep){
		 		echo "<p>".$oExcep->getMessage()."</p>";
		 	}
		 }//fin de la fonction gererSite()
		 
		 /**
		 * gère la recherche d'un groupe par un internaute
		 */
		 public static function gererRechercher(){
		 	try{
		 		
				//Si l'internaute arrive sur le site
				if(isset($_POST['cmd']) == false){
					//afficher le formulaire de saisie du no de groupe
					VueGroupe::afficherFormGroupe();
				}else{//Sinon
					$oGroupe = new Groupe($_POST['txtNoGroupe']);
					//$oGroupe->setIdGroupe($_POST['txtNoGroupe']);
					//rechercher le groupe par son no de groupe
					$bTrouve = $oGroupe->Rechercher_Groupe();
					
					//Si trouvé
					if($bTrouve == true){
						//afficher le groupe
						//include '../modeles/Etape.class.php';/* a enlever et remplacer par auto loader*/
				 		//include '../modeles/Ressource.class.php';
				 		
						 $oEtape = new Etape();
						 $aEtape = $oEtape->Rechercher_Etapes();
						 
						 
						 /*$oLien = new Lien();
						 $oLien->rechercherUnLien();*/
						 
						 $oRessource = new Ressource();
						 $aRessource = $oRessource->Rechercher_Ressources();
						 
						 /*$oTexte = new Texte();
						 $otexte->rechercherUnTexte();*/
						VueGroupe::afficher_Groupe($aEtape, $aRessource);
					}else{//Sinon
						//message "Aucun groupe avec le no " . no de groupe saisi
						VueGroupe::afficherFormGroupe("Aucun groupe avec le no ". $oGroupe->getIdGroupe());						
					} 
				}
				
		 	}catch(Exception $oExcep){
		 		VueGroupe::afficherFormGroupe($oExcep->getMessage());
		 	}
		 }//fin de la fonction gererRechercher()

		  /**
		 * Faire Afficher le Footer
		 */
		 public static function gererLogin(){
		 		
		 		VueGabarit::afficheLogin();
		 	
		 }//fin de la fonction gererFooter()

		 /**
	 * Affiche page login
	 * @return void
	 */
	private static function verifierLogin()
	{
		
		//initialiser ma vue
		//$oVue = new Vue();

		
		/*echo "<br>_SESSION = ";
		var_dump($_SESSION);echo "<br>";

		echo "<br>_POST = ";
		var_dump($_POST);echo "<br>";

		echo "<br>_GET = ";
		var_dump($_GET);echo "<br>";*/
		

		if(isset($_GET["username"]) && isset($_GET["password"]))
		{

			//connexion à la base de données
	 		$oLogin = new Login();
			$motDePasseMD5 = $oLogin->MotDePasse($_GET["username"]);
			$motDePassePlusGrainSel = md5($motDePasseMD5 . $_SESSION["grainSel"]);
				
			
			//Si la combinaison username et password est valide
			if($motDePassePlusGrainSel == $_GET["password"])
			{
				//Initialiser une variable session qui permet au serveur de savoir si je suis authentifié.
				$_SESSION["UserID"] = $_GET["username"];
				
				//Rediriger vers la page d'accueil
				VuePreStage::afficherPreStage();
			}
			else
			{
				$message = "Combinaison 'usager' et 'mot de passe' invalide.";
				VueAccueil::afficherAccueil($message);
				//VueGabarit::afficheLogin($message);
			}
		}
		else
		{
			VueAccueil::afficherAccueil();
		}
		
		//$oVue->afficheLogin();
	}
		
		/**
		 * Faire Afficher le Header
		 */
		 public static function gererPreStage(){
		 	
		 		VuePreStage::afficherPreStage();
		 	     
		 }//fin de la fonction gererPrestage()

		 /**
		 * Faire Afficher le Header
		 */
		 public static function gererAccueil(){
		 	
		 		VueAccueil::afficherAccueil();
		 	     
		 }//fin de la fonction gererAccueil()

		 /**
		 * Faire Afficher le Header
		 */
		 public static function gererHeader(){
		 	
		 		VueGabarit::afficherHeader();
		 	     
		 }//fin de la fonction gererHeader()
        
        
       	/**
		 * Faire Afficher le Header2
		 */
		 public static function gererHeader2(){
		 	
		 		VueGabarit::afficherHeader2();
		 	
		 }//fin de la fonction gererHeader2()
		 
		 
        /**
		 * Faire Afficher le Nav
		 */
		 public static function gererNav(){
		 	
		 		VueGabarit::afficherNav();
		 	
		 }//fin de la fonction gererNav()
        
        
        /**
		 * Faire Afficher la section asside
		 */
        
		 public static function gererSide(){
		     try{
		 		/*include '../modeles/Etape.class.php';
		 		include '../modeles/Ressource.class.php';*/
		 		
				 $oEtape = new Etape();
				 $aEtape = $oEtape->Rechercher_Etape();
				 
				 
				 $oLien = new Lien();
				 $oLien->Rechercher_Lien();
				 
				 $oRessource = new Ressource();
				 $aRessource = $oRessource->Rechercher_Ressources();
				 
				 $oTexte = new Texte();
				 $oTexte->Rechercher_Texte();
				
				//VueGabarit::afficherSide($aEtape, $aRessource);
				 VueGabarit::afficherSide($aEtape, $aRessource);
		 	}catch(Exception $oExcep){
                         echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
                     }
		 }//fin de la fonction gererSide()
        
        
        /**
		 * Faire Afficher la section main
		 */
        
		 public static function gererMain(){
		 	
		 		VueGabarit::afficherMain();
		 	
		 }//fin de la fonction gererMain()


		 /**
		 * Faire Afficher le Footer
		 */
		 public static function gererFooter(){
		 	
		 		VueGabarit::afficherFooter();
		 	
		 }//fin de la fonction gererFooter()

	}//fin de la classe Controleur
?>