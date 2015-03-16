<?php


/**
 * 	Projet Web 2
 * 
 *	Refaire site de présentation des stages du college Maisonneuve
 *
 *  User.class.PHP    
 * 
 *  Classe qui connecte a db
 * 
 * @authors Steven Castelli, Jose Cortes, Francois Tremblay, David Julien
 * @version 1.0
 * @license Aucune
 * Professeur : Caroline Martin
 * Date de remise : 2015-03-21
 * 
 */

 


	/**
	 * classe Lien
	 * @author 
	 * @version 
	 */
    class Lien {
    	/*Propriétées*/
    	/***********************************************************************************/
		private $idLien;
		private $sNomLien;
		private $sUrlLien;
		
		
		/* Mutateur */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idLien
		 */
			public function setIdLien($idLien){
				TypeException::estNumerique($idLien);
				$this->idLien = $idLien;
			}//fin de la fonction setIdLien()
			
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sNomLien
		 */
		public function setNomLien($sNomLien=""){
			TypeException::estVide($sNomLien);
			
			$this->sNomLien = $sNomLien;
		}//fin de la fonction setNomLien()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sUrlLien
		 */
		public function setUrlLien($sUrlLien){
			TypeException::estVide($sUrlLien);
			
			$this->sUrlLien = $sUrlLien;
		}//fin de la fonction setContenuTexte()
		
		
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdLien(){
			return $this->idLien;
		}//fin de la fonction getidLien()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getNomLien(){
			return htmlentities($this->sNomLien);
		}//fin de la fonction getTitreTexte()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getUrlLien(){
			return htmlentities($this->sUrlLien);
		}//fin de la fonction getUrlLien()
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idLien=0, $sNomLien="Nom", $sUrlLien="Url"){
			$this->setIdLien($idLien);
			$this->setNomLien($sNomLien);
			$this->setUrlLien($sUrlLien);
		}
		
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		
		/**
		 * ajoute un groupe dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Lien(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			$sRequete = "
				INSERT INTO `liens`(`vchnomlien`, `urllien`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sNomLien)."', 
						'".$oMysqliLib->getMySqli()->real_escape_string($this->sUrlLien)."')
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
						
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->insert_id;
		}//fin de la fonction ajouterUnUser()
		
		 /**
		  * modifie un groupe dans la base de données
		  * @return boolean
		  */
		 public function Modifier_Lien(){
			 //connexion à la base de données
			 $oMysqliLib = new MySqliLib();
			 //requête de modification
			 $sRequete = " 
				 UPDATE `liens`
				 SET `vchnomlien`='".$oMysqliLib->getMySqli()->real_escape_string($this->sNomLien)."',
				 `urllien`='".$oMysqliLib->getMySqli()->real_escape_string($this->sUrlLien)."'
				 WHERE idlien = ".$this->idLien."
			 ";
			 //exécuter la requête
			 $bResult = $oMysqliLib->executer($sRequete);
			 //retourner la valeur booléenne
			 return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction modifierUnUser()
		/**
		 * supprime un groupe de la base de données
		 * @return boolean
		 */
		
		public function Supprimer_Lien(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM `liens`
				WHERE idlien = ".$this->idLien."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnUser()
 		
 		
		/**
		 * rechercher un groupe
		 * @return boolean true si le groupe est trouvé false sinon
		 */
		public function Rechercher_Lien($lien=""){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	if($lien!=""){
		 		$sRequete = "SELECT * FROM `liens` WHERE idlien = ".$lien." ";
			}else {
				$sRequete = "SELECT * FROM `liens` WHERE idlien = ".$this->idLien." ";
			}
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aLien = $oMysqliLib->recupererTableau($oResult);
			
		 	//Si le lien est trouvé
		 	if(count($aLien) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($aLien[0]['idlien'], $aLien[0]['vchnomlien'], $aLien[0]['urllien']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnLien()
		 
		 public static function Rechercher_Lien_Id($lien=""){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	if($lien!=""){
			 	$sRequete = "SELECT * FROM `liens` WHERE idlien = '".$lien."' ";
				
			 	//exécuter la requête
			 	$oResult = $oMysqliLib->executer($sRequete); 
			 	//récupérer le tableau des enregistrements
			 	$aResults=$oMysqliLib->recupererTableau($oResult);
			 	
			 	$aLiens = $aResults[0]['vchnomlien'];
				//var_dump($aLiens);
			}else{
				$aLiens="aucune lien";	
			}
		 	return $aLiens;	
		 }//fin de la fonction rechercherUnLien()
		 
		 public static function Rechercher_Liens($id="rien"){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	if($id=="rien"){
				$sRequete = "SELECT * FROM liens";
			}else{
				$sRequete = "SELECT * FROM liens WHERE idlien='".$id."'";
			}
				
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aLiens = $oMysqliLib->recupererTableau($oResult);
			
			if($id==null){
				$aLiens[0]['vchnomlien']="";// si le ud est null sinon ca cause des erreurs
				$aLiens[0]['urllien']="";
			}
			
		 	//retourner array contenant les etapes
		 	return $aLiens;	
		 }//fin de la fonction rechercherToutProgramme()

		 	
	}//fin de la classe Liens

 
 
 
 
 
 
 
 
 ?>