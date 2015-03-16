<?php
/*
 	$hote = "root";
	$user = "e0163173";
	$mdp = "811201";
	$dbName = "e0163173";
	$connexion = mysqli_connect ($hote, $user, $mdp, $dbName) 
		or die ("Connexion au serveur impossible");*/
		
	require_once("../../lib/MySqliLib.class.php");

	// Attraper  le parametre du URL
	$t = $_REQUEST["t"];

	// requete SQL
	$req = "SELECT vchnomdocument from documents WHERE vchnomdocument LIKE '$t%'";
	$res = mysqli_query ($connexion, $req)
		or die ("Exécution de la requête impossible");
	$ligne = mysqli_num_rows($res);

	// suggestion nom de villes
	if ($ligne == 0)  
    	{
		echo "Aucune Suggestion";
	}

    	else 
    	{
       	for ($i=0; $i<$ligne; $i++) 
	   	{
			$reponse = mysqli_fetch_assoc($res);
			extract($reponse);
			echo "$titreDoc";
		}
	}
?>