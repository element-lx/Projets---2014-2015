<?php

	/**
	 * classe Groupe 
	 * 582-P41-MA Programmation Web Dynamique 3
	 * @author Caroline Martin
	 * @version 2015-02-10
	 */
    class VueGroupe {
    					
		/**
		 * afficher le formulaire de saisie du no de groupe
		 * @param string $sMsg 
		 */
		 
		 public static function afficherFormGroupe($sMsg=""){
		 	
		 	?>
		 		 	
			</div>
		</div> <!-- Necessaire pour fermer le container -->
		
		<div class="bgGroupe">
			<div class="row hauteur6 ">
		 		<form action ="index.php?s=<? echo $_GET['s']; ?>" method ="post" >
					<div class="hauteur7">
						  <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 col-sm-offset-2 col-md-offset-3 col-lg-offset-3 bordureNoir bgBleu">
						  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
						  		<label for ="gr" class="entrer_groupe blanc">Entrez le numero de votre groupe:</label>
							    <div class="input-group">	
								      <input type="text" class="form-control"  name ="txtNoGroupe" id ="gr" value ="" placeholder="Entrez un groupe">
								      <span class="input-group-btn">
								        	<button class="btn btn-default" type="submit" name ="cmd" value ="Rechercher">Rechercher!</button>
								      </span>
								</div>
								<p class="erreur"><?php echo $sMsg; ?></p>
						 	</div>
						 </div> 
					</div>
				</form>
		 	</div>	<!-- /.row -->
		</div>
		
		 <?php
		 }//fin de la fonction afficherFormGroupe()
		 
 /**
		 * afficher le groupe
		 * @param Groupe $oGroupe 
		 */
		 public static function Afficher_Groupe($aEtape, $aRessources){ ?>
        <html>
        	<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-push-4 col-lg-push-4 ">
				<div class="col-xs-pull-6 col-sm-pull-6 hauteur3 afficheRessource">
	            </div>
        	</div>
        	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-pull-8 col-lg-pull-8 ">  <!-- Push 12 n'est pas possible avec le framework. Il faut inverser l'ordre est push/pull 4/8 -->
	            <div class="col-xs-push-6 col-sm-push-6 hauteur2">
	             	<ul id="asidePreStage">
	             	<?php 
		             	//var_dump($aEtape);
		             	foreach ($aEtape as $keyEtape => $valeurEtape) {
		             	    echo "<li class='etapeClic' data-etape='".$valeurEtape["idetape"]."'><h3>".$valeurEtape["vchnometape"]."</h3></li>";
		             	}
		            ?>
	             	</ul>
	            </div>	
            </div>	
            <script>
            	$(document).ready(function(){
				    $('.etapeClic').click(function(){
						$.get("../site/ajax/controleurAjax.php?requeteAjax=afficherTouteRessource&idetape="+$(this).data('etape'), function(data) {
							$(".afficheRessource").html(" ");
							if ( data !="") {
								$(".afficheRessource").html("<ul>" + data + "</ul>");
							}else {
								$(".afficheRessource").html(" ");
							}
						});
				 	});
		 		});
            	
            </script>
        </html>
        
    <?php
		 }//fin de la fonction afficherUnGroupe()
		
		 
		 
		 
		 
		 
		 
    }//fin de la classe VueGroupe
?>