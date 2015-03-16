<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">

		<meta name="description" content="">
		<meta name="author" content="cmartin">

	</head>

	<body>
		<div>
			<header>
				<h1>test_classe_VueGroupe</h1>
			</header>

			<div>
				
				<?php
					require("../lib/TypeException.class.php");
					require("../modeles/Groupe.class.php");
					require("../vues/VueGroupe.class.php");
				?>
				<h2>afficherFormGroupe() $sMsg=""</h2>
				<?php
					try{
						VueGroupe::afficherFormGroupe();
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>
				<h2>afficherFormGroupe() $sMsg="Un message"</h2>
				<?php
					try{
						VueGroupe::afficherFormGroupe("Un message");
					}catch(Exception $oExcep){
						echo "<p style=\"color:red;\">".$oExcep->getMessage()."</p>";
					}
				?>
				<h2>afficherUnGroupe() </h2>
				<?php
					try{
						$oGroupe = new Groupe(1569, "Un groupe");
						VueGroupe::afficherUnGroupe($oGroupe);
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
