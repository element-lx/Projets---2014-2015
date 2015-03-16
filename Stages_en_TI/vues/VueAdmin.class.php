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

class VueAdmin
{ 					
    /**
    * afficher le header du site
    * 
    **/
    public static function afficherHeader()
    {
        ?>
        <div class="imgHeader">                
	        <div class="container ">
	            <div class="row">
	                <article class="col-md-12 col-lg-12"> 
	                     <a class="login" href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.2/site/" target="_blank">Retour à  l'accueil</a> <!-- target="blank" permet d'ouvrir une nouvelle page lorsque le lien est cliqué. Ainsi, l'adinistrateur à toujours acces a la page admin -->
	                </article>
	          	</div> 
	            <div class="row">  
	                <div class="hidden-xs col-sm-3 col-md-3 col-lg-3"> <!-- Comportement logo pour ecran small(sm) a large(lg)/ Invisible pour ecran extra small(xs)-->
	                    <article class="logo">
	                        <img src="medias/logo_college_maisonneuve.png" alt="Logo du college de Maisonneuve" >
	                    </article>
	                </div>
	                
	                <div class="col-xs-12 hidden-sm hidden-md hidden-lg"> <!-- comportement logo pour xs()/ invisible pour autres grandeurs -->
	                    <article>
	                        <center>
	                            <img class="logo2" src="medias/logo_college_maisonneuve.png" alt="Logo du college de Maisonneuve" >
	                        </center>
	                    </article>
	                </div>
				</div>	
            </div>
		</div>
   								
        
    <?php
    }//fin de la fonction afficherHeader()
		 

    /**
    * afficher la section main du site
    * 
    */
    public static function afficherHeader2()
	{
    ?>
   		<div class="bg">
	   	   	<div class="container">
		       <div class="row">
					<div class="panel panel-default marge4">
					  	<div class="panel-heading droite2 styleFont1">
					  		Section Administrateur
					  	</div>
					  	<div class="panel-body styleFont1">
					    	Bienvenue
					    </div>
					</div>
			 	</div>
	  		</div> 
	  	</div>
	
  		
    <?php
    }
	
    /**
    * Section principale contenant le menu permettant d'ajouter de modifier ou supprimer des éléments de la base de données
    * 
    **/
    public static function afficherMain()
    {
    ?>
            <div class=" container hauteur3 bgColor ">
				
				<!-- Debut menu accordéon -->   
				<div class="marge3 hauteur7 ">  
				    <div class="panel-group" id="accordion">				<!-- Source pour l'accordéon http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/bootstrap-accordion.php -->
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                <h4 class="panel-title menuAdmin">
				                    <a class="gras" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5>&nbsp &nbsp Ajouter </a>
				                </h4>
				            </div>
				            <div id="collapseOne" class="panel-collapse collapse in">
				                <div class="panel-body">
				                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 bDroite">
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter un document</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter une étape</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter un groupe</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter un lien</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter un logiciel</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter un membre</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter un programme</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter une ressource</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter un stage</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter un texte</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Ajouter un utilisateur</a>
				                   </div>
				                   	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 bordure afficherJS">
					                		
						            </div>
				                </div>
				            </div>
				        </div>
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                <h4 class="panel-title menuAdmin">
				             		<a class="gras" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5>&nbsp &nbsp Modifier </a>
				                </h4>
				            </div>
				            <div id="collapseTwo" class="panel-collapse collapse">
				                <div class="panel-body">
					                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier un document</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier une étape</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier un groupe</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier un lien</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier un logiciel</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier un membre</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier un programme</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier une ressource</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier un stage</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier un texte</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Modifier un utilisateur</a>
					                </div>
					                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 bordure">
					                		
						            </div>
				                </div>
				            </div>
				        </div>
				        <div class="panel panel-default">
				            <div class="panel-heading">
				                <h4 class="panel-title menuAdmin">
				               		<a class="gras" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp &nbsp Supprimer </a>
				                </h4>
				            </div>				          
				            <div id="collapseThree" class="panel-collapse collapse">					            	  
				                <div class="panel-body">
				                	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer document</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer une étape</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer un groupe</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer un lien</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer un logiciel</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer un membre</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer un programme</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer une ressource</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer un stage</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer un texte</a>
					                    <a href="http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin/site/">Supprimer un utilisateur</a>
				                	</div>
				                	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 bordure">
				                		
					            	</div>
								</div>
					       	</div>
					    </div>
					</div> <!-- fin menu accordéon --> 
				</div>                    		                                		
			</div> <!-- fin du main -->
    <?php
    }//fin de la fonction afficherMain()  
  
    
    /**
    * afficher le footer section admin
    * 
    **/
    public static function afficherFooter()
    {
     ?>
	        <div class="container">
	        	<div class="row">
	        		<div class="hauteur8">
	        			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	        				<p class="pFooter1">© Version 1.2 Par François Tremblay, David Julien, Jose Cortes, Steven Castelli </p>
	        			</div>
	        		</div>
	        	</div>
	        </div> <!-- fin container -->
		</html>
    <?php
    }//fin de la fonction afficherFooter()
}//fin de la classe VueAdmin
?>





