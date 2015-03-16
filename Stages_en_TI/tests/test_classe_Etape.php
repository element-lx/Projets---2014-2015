<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">

		
		<title>test_classe_Etape</title>
		<meta name="description" content="">
		<meta name="author" content="cmartin">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div>
			<header>
				<h1>test_classe_Etape</h1>
			</header>
			

			<div>
				<?php 
				/* include des fichiers de librairie */
				require("../lib/MySqliLib.class.php");
				require("../lib/TypeException.class.php");
				
				/* include des fichiers modèle */
				require("../modeles/Etape.class.php");
				?>

				<h2>Test du module</h2>

				<h3>test de modifierUnEtape()</h3>
				 <?php 
					 try{
						 $oEtape4 = new Etape(7,"Steven est besu",0);

						//echo $oEtape4->getIdEtape();
						 $oEtape4->rechercherUnEtape();
						 $oEtape4->setNomEtape("Steven est besu");
						 
						 $bResult = $oEtape4->modifierUnEtape();
 						
						 //echo "$bResult";
						 var_dump($bResult);
						var_dump($oEtape4);
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>test de rechercherUnEtape()</h3>
				 <?php 
					 try{
						 $oEtape4 = new Etape(7);

						echo $oEtape4->getIdEtape();
						 $bResult = $oEtape4->rechercherUnEtape();
 						
						 //echo "$bResult";
						 var_dump($bResult);
						var_dump($oEtape4);
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>test de rechercherToutEtape()</h3>
				 <?php 
					 try{
						 $oEtape3 = new Etape();
						
						 $bResult = $oEtape3->rechercherToutEtape();
 						
						 //echo "$bResult";
						 var_dump($bResult);
						var_dump($oEtape3);
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>test de supprimerUnEtape()</h3>
				 <?php 
					 try{
						 $oEtape = new Etape(16);
												 
						 
						 $bResult = $oEtape->supprimerUnEtape();
 						
						 echo "$bResult";
						 var_dump($oEtape);
						
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>test de ajouterUnEtape()</h3>
				 <?php 
					 try{
						 $oEtape2 = new Etape();
						
						 $oEtape2->setNomEtape("Se tirer en bas du pont2");
						 
						 $bResult = $oEtape2->ajouterUnEtape();
 						
						 echo "$bResult";
						 var_dump($oEtape2);
						
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->
				
			
			</div>

			<footer>
				<p>
					&copy; Copyright  by cmartin
				</p>
			</footer>
		</div>
	</body>
</html>
