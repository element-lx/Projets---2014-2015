<?php

	/**
	 * classe Groupe 
	 * 582-P41-MA Programmation Web Dynamique 3
	 * @author Caroline Martin
	 * @version 2015-02-10
	 */
    class VueAccueil {
    					
		/**
		 * afficher le formulaire de saisie du no de groupe
		 * @param string $sMsg 
		 */
		 public static function afficherAccueil($message=''){
		 	?>
			   <!-- <div id="containerAccueil">
			     <center id="logoTexte">
						<div id="CentrerLogo">
							<img src="medias/logo1.jpg" alt="Collège Maisonneuve">
							<h1>COLLÈGE DE MAISONNEUVE</h1>
						</div>
				</center> 

				<center> 
						<ul id="menu-accordeon">
							

			   				<li><a class="active" href="#" />VEUILLEZ VOUS CONNECTER EN TANT QUE </a>
					      		<ul>
						        	<li><a href="http://127.0.0.1/USB/PROJET%20WEB%202/groupes_1.2/gabarit.php">ÉTUDIANT</a></li>
						        	 <dd class="active">
						        	<?php
						        			
			            	Controleur::gererGabarit("login",$message);
							?>
							    </dd>
						        	<li><a href="accueil.php">EMPLOYEUR</a></li>
						         	<li><a href="http://127.0.0.1/USB/PROJET%20WEB%202/groupes_1.2/admin/site/">ADMINISTRATEUR</a></li>
					        	</ul>
					        </li>
						</ul>

						
				</center>
   				</div>	 -->
   				
   						
        
    		<?php
		 }//fin de la fonction afficherFormGroupe()
		 
			 
		 
		 // <div class="accordion">
  // <dl>
    // <dt class="active"><a href="#"><span class="arrow"></span>Quality</a></dt>
    // <dd class="active">
      // <p>Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    // </dd>
		 
		 
    }//fin de la classe VueGroupe
?>