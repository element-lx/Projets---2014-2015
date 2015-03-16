<?php
/*
//Auteurs: Francois Tremblay, David Julien
//Programmation Client Serveur
//Formulaire avec jQuery
//02 Fev 2015
***************************************/



//Déclaration des variables pour connetcion à la base de données
    require 'config.php';
	$connexion = mysqli_connect ($hote, $user, $mdp, $dbName) 
		or die ("Connexion au serveur impossible");

	// Attraper le parametre du URL
	isset($_REQUEST["nom"])? $nom = $_REQUEST["nom"]: $nom="" ;
    isset($_REQUEST["prenom"])? $prenom = $_REQUEST["prenom"]: $prenom="";
    isset($_REQUEST["dateNaisssance"])? $dateNaisssance = $_REQUEST["dateNaisssance"]: $dateNaisssance="";
    isset($_REQUEST["courriel"])? $courriel = $_REQUEST["courriel"]: $courriel="";
    isset($_REQUEST["pays"])? $pays = $_REQUEST["pays"]: $pays="";
    isset($_REQUEST["ville"])? $ville= $_REQUEST["ville"]: $ville="";
    isset($_REQUEST["fonction"])? $fonction= $_REQUEST["fonction"]: $fonction="";
    
	switch ($fonction) {// sert a decider la sorte de requete
		case 'inscription':// Si l'usager inscrit des informations, envois les information à la base de données
    			$setUser = "INSERT INTO `tpProg__user`(`nom`, `prenom`, `dateNaissance`, `courriel`, `pays`, `ville`) VALUES ('".$nom."','".$prenom."','".$dateNaisssance."','".$courriel."','".$pays."','".$ville."')";
                mysqli_query ($connexion, $setUser)
                    or die ("Exécution de la requete impossible");//message si il y a une erreur
                echo "<p class='succes'>".$prenom." vos informations ont été ajoutés à notre base de données </p>" ;//Message si il n'y as pas d'erreur et que les informations sont bien envoyer à la base de données
    			break;
        case 'trouverVille':// requête qui récupère la ville du pays choisi
                $req = "SELECT DISTINCT `ville` from tpProg__user WHERE `pays`='".$pays."' AND `ville` LIKE '".$ville."%'";
                $res = mysqli_query ($connexion, $req) //Déclaration de variable qui exécute une requête sur la base de données
                    or die ("Exécution de la requête impossible");
                $nbLignes = mysqli_num_rows($res);
                
                if ($nbLignes == 0) {// si la ville n'est pas dans la base de données
                    echo "Pas de suggestions.";
                } 
                else {
                    while ($ligne = mysqli_fetch_assoc($res)) { //récupère les noms de ville
                        extract($ligne);
                        echo "<option value='".$ville."'>".$ville."</option>" ;//les affiches en menu déroulant
                    }
                }
            break;
		default:
            echo "Connexion au serveur impossible";
			break;
	}	
?>
