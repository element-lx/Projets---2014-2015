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

class VueAdminModifier
{ 		
    public static function afficherModifier()
    {
     ?>
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                <h4 class="panel-title menuAdmin">
				             		<a class="gras" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5>&nbsp &nbsp Modifier </a>
				                </h4>
				            </div>
				            <div id="collapseTwo" class="panel-collapse collapse">
				                <div class="panel-body">
					                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 modifier marge6" data-operation="Modifier">
					                    <h4 class="menuStyle" data-type="Document">Modifier un document</h4>
					                    <h4 class="menuStyle" data-type="Etape">Modifier une étape</h4>
					                    <h4 class="menuStyle" data-type="Groupe">Modifier un groupe</h4>
					                    <h4 class="menuStyle" data-type="Lien">Modifier un lien</h4>
					                    <h4 class="menuStyle" data-type="Logiciel">Modifier un logiciel</h4>
					                    <h4 class="menuStyle" data-type="Membre">Modifier un membre</h4>
					                    <h4 class="menuStyle" data-type="Programme">Modifier un programme</h4>
					                    <h4 class="menuStyle" data-type="Ressource">Modifier une ressource</h4>
					                    <h4 class="menuStyle" data-type="Stage">Modifier un stage</h4>
					                    <h4 class="menuStyle" data-type="Texte">Modifier un texte</h4>
					                    <h4 class="menuStyle" data-type="Utilisateur">Modifier un utilisateur</h4>
					                </div>
					                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 bordure afficherJS">
					                		
						            </div>
				                </div>
				            </div>
				        </div>
       
    <?php
    }//fin de la fonction afficherAjouter
}
?>





