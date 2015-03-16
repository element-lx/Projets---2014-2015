<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">

		
		<title>test_classe_Groupe</title>
		<meta name="description" content="">
		<meta name="author" content="cmartin">

	</head>

	<body>
		<div>
			<header>
				<h1>test_classe_Groupe</h1>
			</header>
			

			<div>
				<?php 
				/* include des fichiers de librairie */
				require("../lib/MySqliLib.class.php");
				require("../lib/TypeException.class.php");
				
				/* include des fichiers modèle */
				require("../modeles/Groupe.class.php");
				?>
				
				<h2>setIdGroupe() avec $idGroupe = ""</h2>
				<?php 
					try{
						$oGroupe = new Groupe("");
						echo "<p>".$oGroupe->getIdGroupe()."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				 ?>	
				 <h2>setIdGroupe() avec $idGroupe = 2</h2>
				  <?php 
					try{
						$oGroupe = new Groupe(2);
						echo "<p>".$oGroupe->getIdGroupe()."</p>";
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				 ?>
				
				// <h2>setNomGroupe() avec $sNomGroupe = ""</h2>
				// <?php 
					// try{
						// $oGroupe = new Groupe(2, "");
						// echo "<p>".$oGroupe->getNomGroupe()."</p>";
					// }catch(Exception $oExcep){
						// echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					// }
				// ?>	
				// <h2>setNomGroupe() avec $sNomGroupe = "Le nom du groupe"</h2>
				// <?php 
					// try{
						// $oGroupe = new Groupe(2, "<script>alert(123)</script>");
						// echo "<p>".$oGroupe->getNomGroupe()."</p>";
					// }catch(Exception $oExcep){
						// echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					// }
				// ?>
				// <h2>ajouterUnGroupe() avec $sNomGroupe = "1667"</h2>
			     <!-- <?php 
					 try{
						 $oGroupe = new Groupe();
						 $oGroupe->setNomGroupe("190000");
                         $oGroupe->setIdProgramme(9);
                       
						$iIdInsere = $oGroupe->ajouterUnGroupe();
				
						 echo "<pre>";
						var_dump($iIdInsere);
						 echo "</pre>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				 ?> -->
				 <h2>modifierUnGroupe() avec $sNomGroupe = "1657"</h2>
				 <?php 
					 try{
						$oGroupe = new Groupe( "1657",2);
						 $oGroupe->setNomGroupe(4,"190000",2);
					
						 $bResult = $oGroupe->modifierUnGroupe();
						
						echo "<pre>";
						var_dump($bResult);
						echo "</pre>";
					 }catch(Exception $oExcep){
						 echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>
				// <h2>modifierUnGroupe() avec $sNomGroupe = "1657"</h2>
				// <?php 
					// try{
						// $oGroupe = new Groupe($iIdInsere);
// 						
						// $bResult = $oGroupe->supprimerUnGroupe();
// 						
						// echo "<pre>";
						// var_dump($bResult);
						// echo "</pre>";
					// }catch(Exception $oExcep){
						// echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					// }
				// ?>
				// <h2>rechercherUnGroupe() avec $idGroupe = 17 N'EXISTE PAS</h2>
				// <?php 
					// try{
						// $oGroupe = new Groupe(17);
// 						
						// $bResult = $oGroupe->rechercherUnGroupe();
// 						
						// echo "<pre>";
						// var_dump($bResult);
						// echo "</pre>";
						// echo "<pre>";
						// var_dump($oGroupe);
						// echo "</pre>";
					// }catch(Exception $oExcep){
						// echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					// }
				// ?>
				// <h2>rechercherUnGroupe() avec $idGroupe = 2 EXISTE </h2>
				// <?php 
					// try{
						// $oGroupe = new Groupe(2);
// 						
						// $bResult = $oGroupe->rechercherUnGroupe();
// 						
						// echo "<pre>";
						// var_dump($bResult);
						// echo "</pre>";
						// echo "<pre>";
						// var_dump($oGroupe);
						// echo "</pre>";
					// }catch(Exception $oExcep){
						// echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					// }
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
