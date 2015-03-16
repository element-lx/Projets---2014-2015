<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">

		
		<title>test_classe_Texte</title>
		<meta name="description" content="">
		<meta name="author" content="cmartin">

	</head>

	<body>
		<div>
			<header>
				<h1>test_classe_Texte</h1>
			</header>
			

			<div>
				<?php 
				/* include des fichiers de librairie */
				require("../lib/MySqliLib.class.php");
				require("../lib/TypeException.class.php");
				
				/* include des fichiers modèle */
				require("../modeles/Texte.class.php");
				?>
				<!--<h2>Constructeur</h2>
				<?php 
					try{
						$oTexte = new Texte(1,"josette","Cotres");
						
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
			 	<h2>setIdTexte() avec $idTexte = ""</h2>
				<?php 
					try{
						$oTexte = new Texte();
						echo "<p>".$oTexte->setIdTexte("")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h2>setIdTexte() avec $idTexte = 2</h2>
				 <?php 
					 try{
						 $oTexte = new Texte();
						echo "<p>".$oTexte->setIdTexte(2)."</p>";
                         echo $oTexte->getIdTexte();
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>		
				 <h2>setTitreTexte("")</h2>
				<?php 
				 try{
						 $oTexte = new Texte();
						 echo "<p>".$oTexte->setTitreTexte("")."</p>";
                         echo $oTexte->getTitreTexte();
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>	
				 <h2>setTitreTexte("Le nom du Texte")</h2>
				 <?php 
					 try{
						 $oTexte = new Texte();
						echo "<p>".$oTexte->setTitreTexte("Le nom du Texte")."</p>";
                         echo $oTexte->getTitreTexte();
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				  <h2>setContenuTexte("")</h2>
                <?php 
                 try{
                         $oTexte = new Texte();
                         echo "<p>".$oTexte->setContenuTexte("robert")."</p>";
                          echo $oTexte->getContenuTexte();
                     }catch(Exception $oExcep){
                         echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
                     }
                 ?> 
                 <h2>setContenuTexte("ayayayyayayayayayayayaya")</h2>
                 <?php 
                     try{
                         $oTexte = new Texte();
                        echo "<p>".$oTexte->setContenuTexte("ayayayyayayayayayayayaya")."</p>";
                        echo $oTexte->getContenuTexte();
                     }catch(Exception $oExcep){
                         echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
                     }
                 ?>
                  <h2>setTypeTexte("")</h2>
                <?php 
                 try{
                         $oTexte = new Texte();
                         echo "<p>".$oTexte->setTypeTexte("")."</p>";
                         echo $oTexte->getTypeTexte();
                     }catch(Exception $oExcep){
                         echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
                     }
                 ?> 
                 <h2>setTypeTexte("porno")</h2>
                 <?php 
                     try{
                         $oTexte = new Texte();
                        echo "<p>".$oTexte->setTypeTexte("porno")."</p>";
                        echo $oTexte->getTypeTexte("porno");
                     }catch(Exception $oExcep){
                         echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
                     }
                 ?>
				 <h2>ajouterUnTexte() avec new Texte(1, "jose", "cortes","haleluliaa",5)</h2>
				 <?php 
					try{
						$oTexte = new Texte(1, "jose", "cortes","haleluliaa", 5);
						$oTexte->ajouterUnTexte();
						$iIdInsere = $oTexte->ajouterUnTexte();
					
						echo "<pre>";
					   var_dump($iIdInsere);
						 echo "</pre>";
					}catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>-->
				 
				 <h2>modifierUnTexte() avec new User(1, "JOSE", "CORTES","BUGUFUYFFY", 5)</h2>
                <?php 
                 try{
                         $oTexte = new Texte(66, "JdgrtertrE", "Certetretestt","utile", 5);
                          
                     
                         $bResult = $oTexte->modifierUnTexte();
                         echo "id:  ".$oTexte->getidTexte();
                         echo "titre:  ".$oTexte->getTitreTexte();
                         echo "contenue:  ".$oTexte->getContenuTexte();
                         echo "type:  ".$oTexte->getTypeTexte();
                         echo "id:  ".$oTexte->getIdGroupe();
                         echo "<pre>";
                         var_dump($bResult);
                         var_dump($iIdInsere);
                         echo "</pre>";
                     }catch(Exception $oExcep){
                         echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
                    }
                 ?>
				<!--<h2>modifierUnTexte() avec $sNomTexte = "1657"</h2>
				<?php 
					 try{
						////$oTexte = new Texte(); 						
						 $bResult = $oTexte->supprimerUnTexte("1657");
					
						 echo "<pre>";
						 var_dump($bResult);
						 echo "</pre>";
					}catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h2>rechercherUnTexte() avec $idTexte = 17 N'EXISTE PAS</h2>
				<?php 
					 try{
						 //$oTexte = new Texte(17);
				
						 $bResult = $oTexte->rechercherUnTexte();
						
						 echo "<pre>";
						 var_dump($bResult);
						 echo "</pre>";
						 echo "<pre>";
						 var_dump($oTexte);
						 echo "</pre>";
					}catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h2>rechercherUnTexte() avec $idTexte = 2 EXISTE </h2>
				 <?php 
					try{
						 //$oTexte = new Texte(2);
					
						$bResult = $oTexte->rechercherUnTexte(); 						
						 echo "<pre>";
						var_dump($bResult);
						 echo "</pre>";
						 echo "<pre>";
						 var_dump($oTexte);
						 echo "</pre>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>  -->
			</div>

			<footer>
				<p>
					&copy; Copyright  by cmartin
				</p>
			</footer>
		</div>
	</body>
</html>
