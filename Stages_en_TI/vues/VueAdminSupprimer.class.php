<?php
 /**
 * 	Projet Web 2
 * 
 *	Refaire site de présentation des stages du college Maisonneuve
 *
 * @authors Steven Castelli, Jose Cortes, Francois Tremblay, David Julien
 * @version 1.1
 * @license Aucune
 * Professeur : Caroline Martin
 * Date de remise : 2015-03-15
 *
 * VueAdmin.class.php  
 * 
 * Vues principales du Gabarit
 * 
 */

class VueAdminSupprimer
{ 					
    public static function afficherSupprimer()
    {
     ?>
       
		        <div class="panel panel-default">
		            <div class="panel-heading">
		                <h4 class="panel-title menuAdmin">
		               		<a class="gras" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp &nbsp Supprimer </a>
		                </h4>
		            </div>				          
		            <div id="collapseThree" class="panel-collapse collapse">					            	  
		                <div class="panel-body">
		                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 supprimer marge6" data-operation="Supprimer">
			                    <h4 class="menuStyle" data-type="Document">Supprimer un document</h4>
			                    <h4 class="menuStyle" data-type="Etape">Supprimer une étape</h4>
			                    <h4 class="menuStyle" data-type="Groupe">Supprimer un groupe</h4>
			                    <h4 class="menuStyle" data-type="Lien">Supprimer un lien</h4>
			                    <h4 class="menuStyle" data-type="Logiciel">Supprimer un logiciel</h4>
			                    <h4 class="menuStyle" data-type="Membre">Supprimer un membre</h4>
			                    <h4 class="menuStyle" data-type="Programme">Supprimer un programme</h4>
			                    <h4 class="menuStyle" data-type="Ressource">Supprimer une ressource</h4>
			                    <h4 class="menuStyle" data-type="Stage">Supprimer un stage</h4>
			                    <h4 class="menuStyle" data-type="Texte">Supprimer un texte</h4>
			                    <h4 class="menuStyle" data-type="Utilisateur">Supprimer un utilisateur</h4>
		                	</div>
		                	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 bordure afficherJS">
		                		
			            	</div>
						</div>
			       	</div>
			    </div>
			</div> <!-- fin menu accordéon --> 
		</div>                    		                                		
	</div> <!-- fin du main -->
   
    <?php
    }//fin de la fonction afficherAjouter
}
?>





