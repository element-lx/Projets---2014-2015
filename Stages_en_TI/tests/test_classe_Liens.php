<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">

		
		<title>test_classe_Lien</title>
		<meta name="description" content="">
		<meta name="author" content="cmartin">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div>
			<header>
				<h1>test_classe_Lien</h1>
			</header>
			

			<div>
				<?php 
				/* include des fichiers de librairie */
				require("../lib/MySqliLib.class.php");
				require("../lib/TypeException.class.php");
				
				/* include des fichiers modèle */
				require("../modeles/Lien.class.php");
				?>
				<h2>Test du module</h2>

				<h3>test de modifierUnLien()</h3>
				 <?php 
					 try{
						 $oLien = new Lien(5);
						 $oLien->setNomLien("steven");
						 $oLien->setUrlLien("google.ca");
 						
						 $bResult = $oLien->modifierUnLien();
 						
						 echo "$bResult";
						 var_dump($oLien);
						
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>test de rechercherUnLien()</h3>
				 <?php 
					 try{
						 $oLien = new Lien(5);
 						
						 $bResult = $oLien->rechercherUnLien();
 						
						 echo "$bResult";
						 var_dump($oLien);
						
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>test de supprimerUnLien()</h3>
				 <?php 
					 try{
						 $oLien = new Lien();
						 $oLien->setIdLien(33);
						 $iIdInsere = $oLien->supprimerUnLien();
 						
						 
							echo $iIdInsere;
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->


				<h3>ajouterUnLien(1234)</h3>
				 <?php 
					 try{
						 $oLien = new Lien();
						 $oLien->setNomLien(1234);
						 $iIdInsere = $oLien->ajouterUnLien();
 						
						 
						echo $iIdInsere;
						 
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>setIdLien("")</h3>
				<?php 
					try{
						$oLien = new Lien();
						echo "<p>".$oLien->setIdLien("")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	 
				 <h3>setIdLien(2)</h3>
				 <?php 
					 try{
						  $oLien = new Lien();
						 $oLien->setIdLien(2);
						 echo $oLien->getIdLien();
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
 				
				<h3>setNomLien("")</h3>
				 <?php 
					 try{
						 $oLien = new Lien();
						 echo "<p>".$oLien->setNomLien(12356)."</p>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>	
				<h3>setNomLien("Le nom du Lien")</h3>
				 <?php 
					 try{
						 $oLien = new Lien();
						 echo "<p>".$oLien->setNomLien("Le nom du Lien")."</p>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>setUrlLien("www.liens.com")</h3>
				 <?php 
					 try{
						 $oLien = new Lien();
						 echo "<p>".$oLien->setUrlLien("www.liens.com")."</p>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>ajouterUnLien(1234)</h3>
				 <?php 
					 try{
						 $oLien = new Lien();
						 $oLien->setNomLien(1234);
						 $iIdInsere = $oLien->ajouterUnLien();
 						
						 echo "<pre>";
						 var_dump($iIdInsere);
						 echo "</pre>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>modifierUnLien() avec new Lien(2,"gfruwry","cvufveu")</h3>
				 <?php 
					 try{
						 $oLien = new Lien(2,"gfruwry","cvufveu");
 						
						 $bResult = $oLien->modifierUnLien();
 						
						 echo "<pre>";
						 var_dump($bResult);
						 echo "</pre>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>modifierUnLien() avec $sNomLien = "1657"</h3>
				 <?php 
					 try{
						 $oLien = new Lien();
 						
						 $bResult = $oLien->supprimerUnLien();
 						
						 echo "<pre>";
						 var_dump($bResult);
						 echo "</pre>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>rechercherUnLien() avec $idLien = 17 N'EXISTE PAS</h3>
				 <?php 
					 try{
						 $oLien = new Lien(34);
 						
						 $bResult = $oLien->rechercherUnLien();
 						
						 echo "<pre>";
						 var_dump($bResult);
						 echo "</pre>";
						 echo "<pre>";
						 var_dump($oLien);
						 echo "</pre>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h3>rechercherUnLien() avec $idLien = 2 EXISTE </h3>
				 <?php 
					 try{
						 $oLien = new Lien(2);
 						
						 $bResult = $oLien->rechercherUnLien();
 						
						 echo "<pre>";
						 var_dump($bResult);
						 echo "</pre>";
						 echo "<pre>";
						 var_dump($oLien);
						 echo "</pre>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				?>
			</div>

			<footer>
				<p>
					&copy; Copyright  by cmartin
				</p>
			</footer>
		</div>
	</body>
</html>
