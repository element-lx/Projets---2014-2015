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

class VueAdminAjouter
{ 					

    
    
    public static function afficherAjouter()
    {
     ?>
		<div class="hauteur3 bgColor total">

			<!-- Debut menu accordéon -->   <!-- Source pour l'accordéon http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/bootstrap-accordion.php -->
			<div class="marge3 hauteur7">  
			    <div class="panel-group" id="accordion">				
			        <div class="panel panel-default">
			            <div class="panel-heading">
			                <h4 class="panel-title menuAdmin">
			                    <a class="gras" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5>&nbsp &nbsp Ajouter </a>
			                </h4>
			            </div>
			            <div id="collapseOne" class="panel-collapse collapse in">
			                <div class="panel-body">
			                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 ajouter marge6" data-operation="Ajouter">
				                    <h4 class="menuStyle" data-type="Document">Ajouter un document</h4>
				                    <h4 class="menuStyle" data-type="Etape">Ajouter une étape</h4>
				                    <h4 class="menuStyle" data-type="Groupe">Ajouter un groupe</h4>
				                    <h4 class="menuStyle" data-type="Lien">Ajouter un lien</h4>
				                    <h4 class="menuStyle" data-type="Logiciel">Ajouter un logiciel</h4>
				                    <h4 class="menuStyle" data-type="Membre">Ajouter un membre</h4>
				                    <h4 class="menuStyle" data-type="Programme">Ajouter un programme</h4>
				                    <h4 class="menuStyle" data-type="Ressource">Ajouter une ressource</h4>
				                    <h4 class="menuStyle" data-type="Stage">Ajouter un stage</h4>
				                    <h4 class="menuStyle" data-type="Texte">Ajouter un texte</h4>
				                    <h4 class="menuStyle" data-type="Utilisateur">Ajouter un utilisateur</h4>
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





