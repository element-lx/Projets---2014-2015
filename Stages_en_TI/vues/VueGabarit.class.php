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
 * VueGabarit.class.php  
 * 
 * Vues principales du Gabarit
 * 
 */

class VueGabarit 
{ 					
    /**
    * afficher le header du site
    * 
    **/
    public static function afficherHeader()
    {
        ?>
        <html>
        <div class="container">
            <div class="row">
                <article class="col-md-12 col-lg-12 login">
                	<h4 class='login'>Bonjour 
                        <?php
                            if(!isset($_SESSION["UserID"]))
                            {
                                echo "Anonymous.";
                            }
                            else
                            {
                                echo $_SESSION["UserID"];   
                            }
                        ?>
                    </h4> <br>
                    
             		<!--LOGIN ADMIN -- LIEN DYNAMIQUE  LOGIN SI USAGER NON CONNECTÉ ET LOGOUT SI CONNECTÉ-->
                    <?php 
                    if(isset($_SESSION["UserID"]))
                    {
                        echo "<a  id='logout' class='login' href='index.php?s=Logout'>Se déconnecter</a>";
                      }
                    else
                    {
                        echo "<a id='login' class='login' href='index.php'>Login</a>";
                    }
                    ?>
                    <!--
                    	<a class="login" href="#">Se déconnecter</a> -->
                    <!-- <input type="submit" value="Se connecter" name="Login"></input> -->
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
            
                <div class="hidden-xs col-sm-9 col-md-9 col-lg-9"> <!-- Comportement de la bare de recherche pour ecran small(sm) a large(lg)/ Invisible pour ecran extra small(xs)-->
                    <article class="input-group searchInput">
                        <input type="text" class="form-control" placeholder="Rechercher un stage">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"> </span></button> <!-- glyphicon sont des composantes(icones) venant avec bootstrap-->
                        </span>
                    </article>
                </div>
                
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg"> <!-- Comportement de la bare de recherche pour ecran xs/ Invisible pour autres formats-->
                    <center>
                        <article class="input-group searchInput2">
                                <input type="text" class="form-control" placeholder="Rechercher un stage">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"> </span></button>
                                </span>
                        </article> 
                     </center> 
                </div>
            </div>
        </div>
        								
        </html>
    <?php
    }//fin de la fonction afficherHeader()
		 
    /**
    * afficher le nav du site
    * 
    */
    public static function afficherNav()
    {
    ?>
        <html>
            <div class="container">
                <div class="row ">    <!-- Comportement du menu pour les formats md et lg -->
                    <div class="hidden-sm hidden-xs col-md-2 col-lg-2"></div>
                    <center>
                        <ul class="hidden-sm hidden-xs col-md-4 col-lg-4 droite">
                            <li class="droite"><a href="index.php?s=1">CHOIX1</a></li>
                            <li class="droite"><a href="index.php?requete=accueil">ACCUEIL</a></li>
                        </ul>
                        <ul class="hidden-sm hidden-xs col-md-4 col-lg-4 gauche">
                            <li class="gauche"><a href="index.php?s=2">CHOIX2</a></li>
                            <li class="gauche"><a href="index.php?s=3">CHOIX3</a></li>
                        </ul>
                    </center>
                    <div class="hidden-sm hidden-xs col-md-2 col-lg-2"></div>
                    
                    <div class="col-xs-6 col-sm-6 hidden-md hidden-lg ">   <!-- Comportement du menu pour les formats xs et sm -->
                        <p class="menuSmMd">MENU</p>
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 hidden-md hidden-lg">
                        <h3 class="droite top1"><strong> <i class="menu-open-icon glyphicon glyphicon-menu-hamburger"></i> </strong></h3>
                        <div id="side-menu" class="move-me" >
                            <hr class="hr-set" />
                            <span class="logo-text blanc">MENU</span>
                            <i  class="menu-close-icon glyphicon glyphicon-menu-hamburger"></i>
                            <hr class="hr-set-two" />

                            <ul  class="">
                                <li><a class="" href="#" > <i class="glyphicon glyphicon-home"></i>ACCUEIL</a></li>
                                <li><a class="" href="#" > <i class="glyphicon glyphicon-th"> </i> CHOIX1</a></li>
                                <li><a class="" href="#" > <i class="glyphicon glyphicon-time"></i>CHOIX2</a></li>
                                <li><a class="" href="#" > <i class="glyphicon glyphicon-user"></i>CHOIX3</a></li>
                            </ul>
                        </div>
                    </div> <!--Fin side menu-->       
                </div> <!--Fin row--> 
            </div><!--Fin container-->
        </html>
    <?php
    }//fin de la fonction afficherNav()
    
    /**
    * afficher la section Header2 du site
    * Header2 comprend une bande noir et une image contenu dans un contenant.
    */
    public static function afficherHeader2()
    {
    ?>
         <html>
            <div class="barreNoir">
                <div class="container hauteur4">
                    <img src="../site/medias/accueil4a.jpg">    
                </div>
            </div>
         </html>
    <?php
    }
	
    
   public static function afficherSide($oLiens, $aEtape, $aRessources)
    {
    ?>
        <html>
             <div class="col-xs-push-6 col-sm-push-6 hauteur2">
                <div class="Yo"><img src="../site/medias/tumblr_500.gif"></div>
                <div class="Yo"><img src="../site/medias/81927368.gif"></div>
                <ul>
                <?php 
                //var_dump($aEtape);
                foreach ($aEtape as $keyEtape => $valeurEtape) {
                    echo "<li><h3>".$valeurEtape["vchnometape"]."</h3></li>" ;
                    
                    
                    foreach ($aRessources as $keyRessources => $valeurRessources) {
                    
                        if($valeurRessources["idetape"]==$valeurEtape["idetape"]){
                            echo "<li><a href='#'><b>".$valeurRessources["vchnomressource"]."</b></a></li>";
                        }     
                    }
                }
                ?>
                </ul>
            </div>  
        </html>
    <?php
    }
    
    public static function afficherMain()
    {
    ?>
        <html>
            <div class="col-xs-pull-6 col-sm-pull-6 hauteur3">
                <div class="Yo"><img src="../site/medias/advantages-of-being-water.gif"></div>
            </div>
        </html>
    <?php
    }//fin de la fonction afficherMain()*/
    
    /**
    * afficher le footer du site
    * 
    **/
    public static function afficherFooter()
    {
     ?>
	    <html>
	        <div class="container">
	        	<div class="row">
	        		
	        	</div>	        	
	        	
	        	<div class="row">
	        		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" >
	        			<h4 class="hauteur5">MAISONNEUVE</h4>
	        			<ul class="spec">
		        			<li class="footerLi"><a class="plain" href="http://www.cmaisonneuve.qc.ca/a-propos/vision/">À propos</a></li>
		        			<li class="footerLi"><a href="http://www.cmaisonneuve.qc.ca/medias/communiques-presse/">Médias</a></li>
		        			<li class="footerLi"><a href="http://www.cmaisonneuve.qc.ca/a-propos/fondation-du-college-maisonneuve/">Fondation du Collège Maisonneuve</a></li>
	        			</ul>
	        		</div>
	        		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" >
	        			<h4 class="hauteur5">LES PLUS CONSULTÉS</h4>
	        			<ul class="spec">
		        			<li class="footerLi"><a href="http://www.cmaisonneuve.qc.ca/accueil/venez-rencontrer/soiree-dinformation/">Soirée d'information</a></li>
		        			<li class="footerLi"><a href="http://www.cmaisonneuve.qc.ca/programmes-admission/comparateur-programmes/">Comparateur de programmes</a></li>
		        			<li class="footerLi"><a href="http://www.cmaisonneuve.qc.ca/vie-etudiante/orientation-emploi/choix-carriere/test-dorientation/">Test d'orientation</a></li>
	        			</ul>
	        		</div>
	        		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" >
	        			<h4 class="hauteur5">NOUS JOINDRE</h4>
	        			<ul class="spec">
		        			<li class="footerLi"><a href="http://www.cmaisonneuve.qc.ca/nous-joindre/"></a>Trouver une personne ou un service</li>
		        			<li class="footerLi"><a href="http://www.cmaisonneuve.qc.ca/nous-joindre/">Trouver un campus de formation</a></li>
		        			<li class="footerLi"><a href="http://www.cmaisonneuve.qc.ca/faq/futurs-etudiants/">FAQ</a></li>
	        			</ul>
	        		</div>
	        		<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" >
	        			<h4 class="hauteur5">SUIVEZ-NOUS</h4>
	        			<div>
	        				<a class="enligne" href="https://www.facebook.com/CollegeMaisonneuve"><h2><span class="fa fa-2 fa-facebook"></h2> </span></a>
	        				<a class="enligne marge1" href="https://twitter.com/CdeMaisonneuve"><h2><span class="fa fa-2 fa-twitter" ></h2></span></a>
						<a class="enligne marge1" href="https://www.youtube.com/user/communicmaisonneuve"><h2><span class="fa fa-2 fa-youtube"></h2></span></a>
						<a class="enligne marge1" href="http://ca.linkedin.com/company/collegedemaisonneuve"><h2><span class="fa fa-2 fa-linkedin "></h2></span></a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="row">
	        		<div class="hauteur">
	        			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	        				<p class="pFooter1">© Version 1.2 Par François Tremblay, David Julien, Jose Cortes, Steven Castelli </p>
	        			</div>
		        		<div class="hidden-xs col-sm-6 col-md-6 col-lg-6">
		        			<a class="aLien1" href="http://www.cmaisonneuve.qc.ca/plan-du-site">Plan du site</a>
	    	    		</div>
	        			<div class="col-xs-12 hidden-sm hidden-md hidden-lg aLien2">
	        				<a  href="http://www.cmaisonneuve.qc.ca/plan-du-site">Plan du site</a>
	        			</div>
	        		</div>
	        	</div>
	        </div> <!-- fin container footer-->
		</html>
    <?php
    }//fin de la fonction afficherFooter()


    /**
    * Code le HTML pour login
    * @access private
    *
    */
    public static function afficheLogin($message=''){
        
               
        //aller chercher le code du login
        //require("vues/Login.php");

            if(isset($_SESSION["UserID"]))
            {
                //Rediriger vers la page d'accueil
                //header("Location: index.php");
                
            }
            else
            {
            
                    if(isset($message))
                        echo "<p class='erreur'><b>$message</b></p>";
                        
                    $nombreAleatoire = rand(1, 10000);
                    if(!isset($_SESSION["grainSel"]))
                    {
                        $_SESSION["grainSel"] = $nombreAleatoire;

                    }
                    
                ?>

                <script type="text/javascript" src="js/md5.js"></script>
                <script type="text/javascript">
                    function encrypte()
                    {
                        var grainSel = document.loginForm.grainSel.value;
                        var passwordEncrypte = MD5(document.loginForm.password.value);
                        var passwordEncryptePlusGrainSel = MD5(passwordEncrypte + grainSel);
                        
                        document.formEncrypte.password.value = passwordEncryptePlusGrainSel;
                        document.formEncrypte.username.value = document.loginForm.username.value;
                        
                        document.formEncrypte.submit();
                    }
                </script>

                <form method="POST" name="loginForm">
                    <fieldset>
                        <legend>Login</legend>
                        
                        <label>Nom d'usager: </label>
                        <input type="text" name="username"/><br/>
                        
                        <label>Mot de passe: </label>
                        <input type="password" name="password"/><br/>
                        
                        <input type="hidden" name="grainSel" value="<?php echo $_SESSION["grainSel"]; ?>"/>
                        <input type="button" value="Envoyer" onclick="encrypte();"/>
                    </fieldset>
                </form>

                <form method="GET" name="formEncrypte" action="index.php">
                    <input type="hidden" name="s" value="verificationLogin"/>
                    <input type="hidden" name="username"/><br/>
                    <input type="hidden" name="password"/><br/>
                </form>



                <?php

            }

        
        
    }

}//fin de la classe VueGabarit
?>





