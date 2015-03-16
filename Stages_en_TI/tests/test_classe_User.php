<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">

		
		<title>test_classe_User</title>
		<meta name="description" content="">
		<meta name="author" content="cmartin">

	</head>

	<body>
		<div>
			<header>
				<h1>test_classe_User</h1>
			</header>
			

			<div>
				<?php 
				/* include des fichiers de librairie */
				require("../lib/MySqliLib.class.php");
				require("../lib/TypeException.class.php");
				
				/* include des fichiers modèle */
				require("../modeles/User.class.php");
				?>
				<h2>Constructeur</h2>
				<?php 
					try{
						$oUser = new User(11,"josette","Cotres",1635);
						
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
			 	<h2>setIdUser("")</h2>
				<?php 
					try{
						//$oUser = new User();
						echo "<p>".$oUser->setIdUser("")."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>	
				 <h2>setIdUser(2)</h2>
				 <?php 
					 try{
						 //$oUser = new User();
						echo "<p>".$oUser->setIdUser(2)."</p>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>		
				 <h2>setLoginUser("")</h2>
				<?php 
				 try{
						 //$oUser = new User();
						 echo "<p>".$oUser->setLoginUser("robert")."</p>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>	
				 <h2>setLoginUser("Le nom du User")</h2>
				 <?php 
					 try{
						 //$oUser = new User();
						echo "<p>".$oUser->setLoginUser("user")."</p>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h2>ajouterUnUser() avec new User(1, "jose", "cortes")</h2>
				 <?php 
					try{
						$oUser = new User(1, "jose", "cortes", 5);
						$oUser->ajouterUnUser();
						$iIdInsere = $oUser->ajouterUnUser();
					
						echo "<pre>";
					   var_dump($iIdInsere);
						 echo "</pre>";
					}catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				<h2>modifierUnUser() avec new User(79,"huhuih","ijij",2014)</h2>
				<?php 
				 try{
						 $oUser = new User(79,"huhuih","ijij",2014);
						
						 $bResult = $oUser->modifierUnUser();
						 echo "id:".$oUser->getIdUser();
						 echo "login:".$oUser->getLoginUser();
						 echo "Pwd:".$oUser->getPwdUser();
						 echo "id:".$oUser->getIdUser();
						 echo "<pre>";
						 var_dump($bResult);
						 echo "</pre>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				 ?>
				<h2>supprimerUnUser("1657")</h2>
				<?php 
					 try{
						////$oUser = new User(); 						
						 $bResult = $oUser->supprimerUnUser("1657");
					
						 echo "<pre>";
						 var_dump($bResult);
						 echo "</pre>";
					}catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h2>rechercherUnUser() avec $idUser = 17 N'EXISTE PAS</h2>
				<?php 
					 try{
						 //$oUser = new User(17);
				
						 $bResult = $oUser->rechercherUnUser();
						
						 echo "<pre>";
						 var_dump($bResult);
						 echo "</pre>";
						 echo "<pre>";
						 var_dump($oUser);
						 echo "</pre>";
					}catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					 }
				 ?>
				 <h2>rechercherUnUser() avec $idUser = 2 EXISTE </h2>
				 <?php 
					try{
						 //$oUser = new User(2);
					
						$bResult = $oUser->rechercherUnUser(); 						
						 echo "<pre>";
						var_dump($bResult);
						 echo "</pre>";
						 echo "<pre>";
						 var_dump($oUser);
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
