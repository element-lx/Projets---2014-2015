<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">

		
		<title>test_classe_Document</title>
		<meta name="description" content="">
		<meta name="author" content="cmartin">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div>
			<header>
				<h1>test_classe_Document</h1>
			</header>
			

			<div>
				<?php 
				/* include des fichiers de librairie */
				require("../lib/MySqliLib.class.php");
				require("../lib/TypeException.class.php");
				
				/* include des fichiers modèle */
				require("../modeles/Documents.class.php");
				?>

				<h2>Test du module</h2>
				
				<h2>setIdGroupe() avec $idDocument = 2</h2>
				  <?php 
					try{
						$oDocument = new Document(2);
						echo "<p>".$oDocument->getIdDocument()."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				 ?>

				<h3>test de modifierUnDocument()</h3>
				 <?php 
					 try{
						 $oDocument = new Document(7,"Steven est besu","Joseestplusbeau","Steven est gros",NULL,NULL,NULL,NULL);

						//echo $oDocument4->getIdDocument();
						 $oDocument->rechercherUnDocument();
						 $oDocument->setNomDocument("Steven est ppapapapapapap");
						 
						 $bResult = $oDocument->modifierUnDocument();
 						
						 //echo "$bResult";
						 var_dump($bResult);
						var_dump($oDocument);
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>test de rechercherUnDocument()</h3>
				 <?php 
					 try{
						 $oDocument4 = new Document(7);

						echo $oDocument4->getIdDocument();
						 $bResult = $oDocument4->rechercherUnDocument();
 						
						 //echo "$bResult";
						 var_dump($bResult);
						var_dump($oDocument4);
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>test de rechercherToutDocument()</h3>
				 <?php 
					 try{
						 $oDocument3 = new Document();
						
						 $bResult = $oDocument3->rechercherToutDocument();
 						
						 //echo "$bResult";
						 var_dump($bResult);
						var_dump($oDocument3);
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>test de supprimerUnDocument()</h3>
				 <?php 
					 try{
						 $oDocument = new Document(16);
												 
						 
						 $bResult = $oDocument->supprimerUnDocument();
 						
						 echo "$bResult";
						 var_dump($oDocument);
						
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>test de ajouterUnDocument()</h3>
				 <?php 
					 try{
						 $oDocument2 = new Document();
						
						 $oDocument2->setNomDocument("Se tirer en bas du pont2");
						 
						 $bResult = $oDocument2->ajouterUnDocument();
 						
						 echo "$bResult";
						 var_dump($oDocument2);
						
						 
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
