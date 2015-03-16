<?php

	/**
	 * classe Groupe 
	 * 582-P41-MA Programmation Web Dynamique 3
	 * 
	 * @version 2015-02-05
	 */
    class Etape {
    	
		private $idEtape;
		private $sNomEtape;
		private $iOrdreEtape;
		private $iEnumEtape;
		
		/* Mutateurs */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $iEnumEtape
		 */
		 public function setEnumEtape($iEnumEtape){
			TypeException::estNumerique($iEnumEtape);
			
			$this->iEnumEtape = $iEnumEtape;
		}//fin de la fonction setEnumEtape()
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idEtape
		 */
		public function setIdEtape($idEtape){
			TypeException::estNumerique($idEtape);
			
			$this->idEtape = $idEtape;
		}//fin de la fonction setidgroupe()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sNomEtape
		 */
		public function setNomEtape($sNomEtape){
			TypeException::estVide($sNomEtape);
			
			$this->sNomEtape = $sNomEtape;
		}//fin de la fonction setNomEtape()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $iOrdreEtape
		 */
		public function setOrdreEtape($iOrdreEtape){
			if($iOrdreEtape!=NULL){
				TypeException::estNumerique($iOrdreEtape);
			}
			
			
			
			$this->iOrdreEtape = $iOrdreEtape;
		}//fin de la fonction setidgroupe()
		
		
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getEnumEtape(){
			return $this->iEnumEtape;
		}//fin de la fonction getIdEtape()
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdEtape(){
			return $this->idEtape;
		}//fin de la fonction getIdEtape()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getNomEtape(){
			return htmlentities($this->sNomEtape);
		}//fin de la fonction getNomEtape()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getOrdreEtape(){
			return $this->iOrdreEtape;
		}//fin de la fonction getOrdreEtape()
		
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idEtape=0, $sNomEtape="etape", $iOrdreEtape=1, $iEnumEtape=1){
			$this->setEnumEtape($iEnumEtape);
			$this->setIdEtape($idEtape);
			$this->setNomEtape($sNomEtape);
			$this->setOrdreEtape($iOrdreEtape);
		}
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		/**
		 * ajoute un groupe dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Etape(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			//ajouter enumetape si besoin dans la requete
			$sRequete = "
				INSERT INTO `etapes`(`vchnometape`, `intordre`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sNomEtape)."', '".$this->iOrdreEtape."')
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->insert_id;
		}//fin de la fonction ajouterUnGroupe()
		
		/**
		 * modifie un groupe dans la base de données
		 * @return boolean
		 */
		public function Modifier_Etape(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de modification
			$sRequete = "
				UPDATE etapes
				SET vchnometape = '".$oMysqliLib->getMySqli()->real_escape_string($this->sNomEtape)."',
				intordre ='".$this->iOrdreEtape."' 
				WHERE idetape = ".$this->idEtape."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction modifierUnGroupe()
		
		/**
		 * supprime un etape de la base de données
		 * @return boolean
		 */
		public function Supprimer_Etape(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM etapes
				WHERE idetape = ".$this->idEtape."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnGroupe()
		
		/**
         * supprime toutes les etapes de la base de données
         * @return boolean
         */
        public function Supprimer_Etapes(){
            //connexion à la base de données
            $oMysqliLib = new MySqliLib();
            //requête de suppression
            $sRequete = "
            
                DELETE FROM etapes
               
            ";
            //exécuter la requête
            $bResult = $oMysqliLib->executer($sRequete);
            //retourner la valeur booléenne
            return $oMysqliLib->getMySqli()->affected_rows;
        }//fin de la fonction supprimerUnGroupe()
        
		/**
		 * rechercher un Etape
		 * @param $sNomEtape Nom de l'etape a rechercher
		 * @return boolean true si le groupe est trouvé false sinon
		 */
		 public function Rechercher_Etape(){
		 	
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	$sRequete = " SELECT * FROM etapes WHERE idetape = '".$this->idEtape."'";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aEtape = $oMysqliLib->recupererTableau($oResult);
		 	//Si le groupe est trouvé
		 	if(count($aEtape) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($aEtape[0]['idetape'], $aEtape[0]['vchnometape'], $aEtape[0]['intordre'], $aEtape[0]['enumetape']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnGroupe()
		 
		/**
		 * rechercher toute les etapes
		 * @param $sNomEtape Nom de l'etape a rechercher
		 * @return array contenant les etapes
		 */
		 
		 
		 public static function Rechercher_Etapes(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du programme
		 	$sRequete = "SELECT * FROM etapes ";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aEtapes = $oMysqliLib->recupererTableau($oResult);
			
		 	//retourner array contenant les etapes
		 	return $aEtapes;	
		 }//fin de la fonction Rechercher_Etapes()
		 
    }//fin de la classe Etape
?>