<?php


/**
 * 	Projet Web 2
 * 
 *	Refaire site de présentation des stages du college Maisonneuve
 *
 *  Utilisateur.class.PHP    
 * 
 *  Classe qui connecte a db
 * 
 * @authors Steven Castelli,  David Julien, Jose Cortes, Francois Tremblay,
 * @version 1.0
 * @license Aucune
 * Professeur : Caroline Martin
 * Date de remise : 2015-03-15
 * 
 */

 


	/**
	 * classe Utilisateur 
	 * @author 
	 * @version 
	 */
    class Utilisateur {
    	/*Propriétées*/
    	/***********************************************************************************/
		private $idUtilisateur;
		private $sLoginUtilisateur;
		private $sPwdUtilisateur;
		private $idGroupe;
		
		/* Mutateur */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idUtilisateur
		 */
			public function setIdUtilisateur($idUtilisateur){
				TypeException::estNumerique($idUtilisateur);
				$this->idUtilisateur = $idUtilisateur;
			}//fin de la fonction setIdUtilisateur()
			
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sLoginUtilisateur
		 */
		public function setLoginUtilisateur($sLoginUtilisateur){
			TypeException::estVide($sLoginUtilisateur);
			
			$this->sLoginUtilisateur = $sLoginUtilisateur;
		}//fin de la fonction setLoginUtilisateur()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sPwdUtilisateur
		 */
		public function setPwdUtilisateur($sPwdUtilisateur){
			TypeException::estVide($sPwdUtilisateur);
			
			$this->sPwdUtilisateur = $sPwdUtilisateur;
		}//fin de la fonction setPwdUtilisateur()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idUtilisateur
		 */
			public function setIdGroupe($idGroupe){
				TypeException::estNumerique($idGroupe);
				$this->idUtilisateur = $idGroupe;
			}//fin de la fonction setIdUtilisateur()
		
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdUtilisateur(){
			return $this->idUtilisateur;
		}//fin de la fonction getIdUtilisateur()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getLoginUtilisateur(){
			return htmlentities($this->sLoginUtilisateur);
		}//fin de la fonction getLoginUtilisateur()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getPwdUtilisateur(){
			return htmlentities($this->sPwdUtilisateur);
		}//fin de la fonction getPwdUtilisateur()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdGroupe(){
			return $this->idGroupe;
		}//fin de la fonction getIdUtilisateur()
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idUtilisateur=1, $sLoginUtilisateur="Utilisateur", $sPwdUtilisateur="pwd",$idGroupe=1){
			$this->setIdUtilisateur($idUtilisateur);
			$this->setLoginUtilisateur($sLoginUtilisateur);
			$this->setPwdUtilisateur($sPwdUtilisateur);
            $this->setIdUtilisateur($idGroupe);
		}
		
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		
		/**
		 * ajoute un Utilisateur dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Utilisateur(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			$sRequete = "
				INSERT INTO `users`(`vchloginuser`, `vchpwduser`, `idgroupe`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sLoginUtilisateur)."', 
				'".$oMysqliLib->getMySqli()->real_escape_string($this->sPwdUtilisateur)."', 
				".$this->idGroupe.")
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->insert_id;
		}//fin de la fonction ajouterUnUtilisateur()
		
		 /**
		  * modifie un Utilisateur dans la base de données
		  * @return boolean
		  */
		 public function Modifier_Utilisateur(){
			 //connexion à la base de données
			 $oMysqliLib = new MySqliLib();
			 //requête de modification
			 $sRequete = " 
				 UPDATE `users`
				 SET `vchloginuser`='".$oMysqliLib->getMySqli()->real_escape_string($this->sLoginUtilisateur)."',
				     `vchpwduser`='".$oMysqliLib->getMySqli()->real_escape_string($this->sPwdUtilisateur)."',
				     `idgroupe`=".$this->idGroupe."
				 WHERE `iduser` = ".$this->idUtilisateur."
			 ";
			 //exécuter la requête
			 $bResult = $oMysqliLib->executer($sRequete);
			 //retourner la valeur booléenne
			 return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction modifierUnUtilisateur()
		/**
		 * supprime un Utilisateur de la base de données
		 * @return boolean
		 */
		
		public function Supprimer_Utilisateur(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM `users`
				WHERE iduser = ".$this->idUtilisateur."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnUtilisateur()
 		
 		
		/**
		 * rechercher un Utilisateur
		 * @return boolean true si le Utilisateur est trouvé false sinon
		 */
		public function Rechercher_Utilisateur(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Utilisateur
		 	$sRequete = "
		 		SELECT * 
		 		FROM `users`
		 		WHERE iduser = ".$this->idUtilisateur."
			";
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aUtilisateur = $oMysqliLib->recupererTableau($oResult);
			
		 	//Si le Utilisateur est trouvé
		 	if(count($aUtilisateur) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($aUtilisateur[0]['iduser'], $aUtilisateur[0]['vchloginuserr'], $aUtilisateur[0]['vchpwduser']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnUtilisateur()
		 
		 public static function Rechercher_Utilisateurs(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	$sRequete = "SELECT * FROM users";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aUtilisateurs = $oMysqliLib->recupererTableau($oResult);
			
		 	//retourner array contenant les utilisateurs
		 	return $aUtilisateurs;	
		 }//fin de la fonction Rechercher_Utilisateurs()

		 	
	}//fin de la classe Utilisateur

 
 
 
 
 
 
 
 
 ?>