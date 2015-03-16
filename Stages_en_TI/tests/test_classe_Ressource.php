<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">

		
		<title>test_classe_Ressource</title>
		<meta name="description" content="">
		<meta name="author" content="cmartin">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div>
			<header>
				<h1>test_classe_Ressource</h1>
			</header>
			

			<div>
				<?php 
				/* include des fichiers de librairie */
				require("../lib/MySqliLib.class.php");
				require("../lib/TypeException.class.php");
				
				/* include des fichiers modèle */
				require("../modeles/Ressource.class.php");
				?>
				<h2>Test du module</h2>
				<h3>Tester le UPDATE</h3>
				 <?php 
					try{

					$oRessource3 = new Ressource();
					$oRessource3->setIdRessource(4);
					$aRessourceAUpdate = $oRessource3->rechercherUneRessource();
					$oRessource3->setDescripRessource("Il faut etre pret");
					$oRessource3->modifierUneRessource();

					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				<!-- =============================================================================      -->

				<h3>J'essaie d'ajouter une ressource</h3>
				 <?php 
					try{

					$oRessource = new Ressource("44","Etape FINALE!!","la derniere etape","www.google.ca", "11");
					//var_dump($oRessource);
					//$idRessource=1, $sNomRessource="", $sDescripRessource="", $sUrlMedia="", $iOrdreRessource=""
					//setIdRessource($idRessource)
					//INSERT INTO `ressources`(`vchnomressource`, `txtdescripressource`, `urlmedia`,`idetape`) 
					

					$oRessource->ajouterUneRessource();

					//echo "<p>".$oRessource->setIdRessource("fdsfds")."</p>";


					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->
				 <h3>J'essaie de supprimer une ressource</h3>
				 <?php 
					try{

					$oRessource2 = new Ressource();
					//var_dump($oRessource);
					//$idRessource=1, $sNomRessource="", $sDescripRessource="", $sUrlMedia="", $iOrdreRessource=""
					//setIdRessource($idRessource)
					//INSERT INTO `ressources`(`vchnomressource`, `txtdescripressource`, `urlmedia`,`idetape`) 
					
					$oRessource2->setIdRessource(2);
					$oRessource2->supprimerUneRessource();

					//echo "<p>".$oRessource->setIdRessource("fdsfds")."</p>";


					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>Tester le rechercherToutRessources</h3>
				 <?php 
					try{

					$oRessource3 = new Ressource();
					echo"<hr>";
					//$idRessource=1, $sNomRessource="", $sDescripRessource="", $sUrlMedia="", $iOrdreRessource=""
					//setIdRessource($idRessource)
					//INSERT INTO `ressources`(`vchnomressource`, `txtdescripressource`, `urlmedia`,`idetape`) 
					$aRessources = $oRessource3->rechercherToutRessources();
					var_dump($aRessources);


					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				<!-- =============================================================================      -->

				 		
				<h3>Tester le rechercherTouteRessourceAvecIdEtape</h3>
				 <?php 
					try{

					$oRessource = new Ressource("21","Etape FINALE!!","la derniere etape","www.google.ca", "11");
					//var_dump($oRessource);
					//$idRessource=1, $sNomRessource="", $sDescripRessource="", $sUrlMedia="", $iOrdreRessource=""
					//setIdRessource($idRessource)
					//INSERT INTO `ressources`(`vchnomressource`, `txtdescripressource`, `urlmedia`,`idetape`) 
					

					$aEtapesTest = $oRessource->rechercherTouteRessourceAvecIdEtape("7");
					var_dump($aEtapesTest);
					//echo "<p>".$oRessource->setIdRessource("fdsfds")."</p>";


					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <hr>
				<!-- =============================================================================      -->





				<h2>Test de fonction setIdRessource</h2>
				 <h3>setIdRessource("")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setIdRessource("")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->
				  <h3>setIdRessource("acbde")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setIdRessource("acbde")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>setIdRessource("1")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setIdRessource("1")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>setIdRessource(3)</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setIdRessource(3)."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 

				  <h3>setIdRessource("+-=")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setIdRessource("+-=")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	

				 <hr>
							 <!-- +++++++++++++++++++++++++++++++++++++++++     -->
				 <h2>Test de fonction setNomRessource</h2>
				 <h3>setNomRessource("")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setNomRessource("")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->
				  <h3>setNomRessource("acbde")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setNomRessource("acbde")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>setNomRessource("1")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setNomRessource("1")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>setNomRessource(3)</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setNomRessource(3)."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				  <h3>setNomRessource("+-=")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setNomRessource("+-=")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				
				 <hr>
				  <!-- +++++++++++++++++++++++++++++++++++++++++     -->

				  <h2>Test de fonction setDescripRessource</h2>
				 <h3>setDescripRessource("")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setDescripRessource("")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->
				  <h3>setDescripRessource("acbde")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setDescripRessource("acbde")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>setDescripRessource("1")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setDescripRessource("1")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>setDescripRessource(3)</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setDescripRessource(3)."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				  <h3>setDescripRessource("+-=")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setDescripRessource("+-=")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				
				 <hr>
				  <!-- +++++++++++++++++++++++++++++++++++++++++     -->

				  <h2>Test de fonction setUrlMedia</h2>
				 <h3>setUrlMedia("")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setUrlMedia("")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->
				  <h3>setUrlMedia("acbde")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setUrlMedia("acbde")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>setUrlMedia("1")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setUrlMedia("1")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>setUrlMedia(3)</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setUrlMedia(3)."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				  <h3>setUrlMedia("+-=")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setUrlMedia("+-=")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				
				 <hr>
				  <!-- +++++++++++++++++++++++++++++++++++++++++     -->

				<h2>Test de fonction setOrdreRessource</h2>
				 <h3>setOrdreRessource("")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setOrdreRessource("")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->
				  <h3>setOrdreRessource("acbde")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setOrdreRessource("acbde")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>setOrdreRessource("1")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setOrdreRessource("1")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>setOrdreRessource(3)</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setOrdreRessource(3)."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				  <h3>setOrdreRessource("+-=")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->setOrdreRessource("+-=")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				
				 <hr>
				  <!-- +++++++++++++++++++++++++++++++++++++++++     -->

				  <h2>Test de fonction getIdRessource</h2>
				 <h3>getIdRessource("")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->getIdRessource("")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->
				  <h3>getIdRessource("acbde")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->getIdRessource("acbde")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>getIdRessource("1")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->getIdRessource("1")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>getIdRessource(3)</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->getIdRessource(3)."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				  <h3>getIdRessource("+-=")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->getIdRessource("+-=")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				
				 <hr>
				  <!-- +++++++++++++++++++++++++++++++++++++++++     -->


				   <h2>Test de fonction getNomRessource</h2>
				 <h3>getNomRessource("")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->getNomRessource("")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->
				  <h3>getNomRessource("acbde")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->getNomRessource("acbde")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>getNomRessource("1")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->getNomRessource("1")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				 <h3>getNomRessource(3)</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->getNomRessource(3)."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h3>========</h3>
				 <!-- =============================================================================      -->

				  <h3>getNomRessource("+-=")</h3>
				 <?php 
					try{
						$oRessource = new Ressource();
						echo "<p>".$oRessource->getNomRessource("+-=")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				
				 <hr>
				  <!-- +++++++++++++++++++++++++++++++++++++++++     -->
			<footer>
				<p>
					&copy; Copyright  Steven Castelli
				</p>
			</footer>
		</div>
	</body>
</html>
