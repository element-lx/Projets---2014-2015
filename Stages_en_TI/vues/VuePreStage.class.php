<?php

	/**
	 * classe Groupe 
	 * 582-P41-MA Programmation Web Dynamique 3
	 * @author Caroline Martin
	 * @version 2015-02-10
	 */
    class VuePreStage {
    					
		/**
		 * afficher le formulaire de saisie du no de groupe
		 * @param string $sMsg 
		 */
		 public static function afficherPreStage(){
		 	 ?>
				<div>
			
					<header>
						<?php
		                	Controleur::gererGabarit("header");
						?>				
					</header>

		            <nav>
		                <?php
		                	Controleur::gererGabarit("nav"); 
		                ?>
		            </nav>
		            
					<header>
						<?php
		                	Controleur::gererGabarit("header2");
						?>				
					</header>
		            
		            <div class="container">
			            <div class="row">
			            		<?php 
				            		Controleur::gererRechercher(); 
				            	?>
			            </div>
		            </div>
		            <footer>
		            	<?php
			            	Controleur::gererGabarit("footer"); 
			            ?>
		            </footer>
		            
		              
				</div>
   								
        
    		<?php
		 }//fin de la fonction afficherFormGroupe()
		 
			 
		 
		 
		 
		 
    }//fin de la classe VueGroupe
?>