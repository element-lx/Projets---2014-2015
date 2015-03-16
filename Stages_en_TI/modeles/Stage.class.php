<?php

	/**
	 * classe Stage
	 * @version 2015-02-05
	 */
    class Stage {
    	
		private $idStage;
		private $sTxtDescripStage;
        private $iBooreMunerationStage;
        private $sDateDebStage;
        private $sDateFinStage;
		private $sDateLimiteStage;
        private $iDureeStage;
        private $idGroupe;
		private $idLien;
       
		
		/* Mutateurs */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idStage
		 */
		public function setIdStage($idStage){
			TypeException::estNumerique($idStage);
			
			$this->idStage= $idStage;
		}//fin de la fonction setIdStage()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sTxtDescripStage
		 */
		public function setTxtDescripStage($sTxtDescripStage){
			TypeException::estVide($sTxtDescripStage);
			
			$this->sTxtDescripStage= $sTxtDescripStage;
		}//fin de la fonction setTxtDescripStage()
		
		/**
         * affecte une valeur à la propriété privée
         * @param string $sTxtDescripDocument
         */
        public function setBooreMunerationStage($iBooreMunerationStage){
            TypeException::estVide($iBooreMunerationStage);
            
            $this->iBooreMunerationStage= $iBooreMunerationStage;
        }//fin de la fonction setBooreMunerationStage()
        
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sDateDebStage
         */
        public function setDateDebStage($sDateDebStage){
            TypeException::estVide($sDateDebStage);
            
            $this->sDateDebStage= $sDateDebStage;
        }//fin de la fonction setDateDebStage()
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $setDateFinStage
         */
        public function setDateFinStage($sDateFinStage){
            TypeException::estVide($sDateFinStage);
            
            $this->sDateFinStage= $sDateFinStage;
        }//fin de la fonction setDateFinStage()
        
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sDateLimiteStage
         */
        public function setDateLimiteStage($sDateLimiteStage){
            TypeException::estVide($sDateLimiteStage);
            
            $this->sDateLimiteStage= $sDateLimiteStage;
        }//fin de la fonction setDateLimiteStage()
        
        /**
         * affecte une valeur à la propriété privée
         * @param integer $iDureeStage
         */
        public function setDureeStage($iDureeStage){
            TypeException::estVide($iDureeStage);
            
            $this->iDureeStage = $iDureeStage;
        }//fin de la fonction setDureeStage()
        
		
		/**
         * affecte une valeur à la propriété privée
         * @param integer $idGroupe
         */
        public function setIdGroupe($idGroupe){
            TypeException::estVide($idGroupe);
            
            $this->idGroupe = $idGroupe;
        }//fin de la fonction setEnumDomaineDocument()
        
        /**
         * affecte une valeur à la propriété privée
         * @param integer $idLien
         */
        public function setIdLien($idLien){
            TypeException::estVide($idLien);
            
            $this->idLien = $idLien;
        }//fin de la fonction setEnumDomaineDocument()
        
		
		
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getiDStage(){
			return $this->idStage;
		}//fin de la fonction getiDStage()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getTxtDescripStage(){
			return htmlentities($this->sTxtDescripStage);
		}//fin de la fonction getTxtDescripStage()
		
		/**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getBooreMunerationStage(){
            return htmlentities($this->iBooreMunerationStage);
        }//fin de la fonction getBooreMunerationStage()
        
        /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getDateDebStage(){
            return htmlentities($this->sDateDebStage);
        }//fin de la fonction getDateDebStage()
        
        /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getDateFinStage(){
            return htmlentities($this->sDateFinStage);
        }//fin de la fonction sDateFinStage()
        
         /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getDateLimiteStage(){
            return htmlentities($this->sDateLimiteStage);
        }//fin de la fonction setDateLimiteStage()
        
       /**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getDureeStage(){
			return $this->iDureeStage;
		}//fin de la fonction getDureeStage()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getidGroupe(){
			return $this->idGroupe;
		}//fin de la fonction getidGroupe()
		
			/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getidLien(){
			return $this->idLien;
		}//fin de la fonction getidLien()
		
		
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idStage=1, $sTxtDescripStage="Document", $iBooreMunerationStage="cortes", $sDateDebStage="allo", $sDateFinStage="www.aloo.com", $sDateLimiteStage="patoc76@yahoo.ca", $iDureeStage=1, $idGroupe=1, $idLien=1){
			$this->setIdStage($idStage);
			$this->setTxtDescripStage($sTxtDescripStage);
			$this->setBooreMunerationStage($iBooreMunerationStage);
            $this->setDateDebStage($sDateDebStage);
            $this->setDateFinStage($sDateFinStage);
            $this->setDateLimiteStage($sDateLimiteStage);
            $this->setDureeStage($iDureeStage);
			$this->setIdGroupe($idGroupe);
			$this->setIdLien($idLien);
            
		}
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		/**
		 * ajoute un Stagedans la base de données
		 * @return boolean
		 */
		public function Ajouter_Stage(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			//ajouter enumetape si besoin dans la requete
			$sRequete = "
				INSERT INTO `stages`(`txtdescripstage`, `booremunerationstage`, `datedebstage`, `datefinstage`,`datelimitestage`,`dureestage`, `idgroupe`, `idlien`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sTxtDescripStage)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->iBooreMunerationStage)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sDateDebStage)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sDateFinStage)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sDateLimiteStage)."',
				         ".$this->iDureeStage."
				         ".$this->idGroupe."
				         ".$this->idLien."
				         )
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->insert_id;
		}//fin de la fonction ajouterUnDocument()
		
		/**
		 * modifie un Stagedans la base de données
		 * @return boolean
		 */
		public function Modifier_Stage(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de modification
			$sRequete = "
				UPDATE stages
				SET txtdescripstage= '".$oMysqliLib->getMySqli()->real_escape_string($this->sNomDocument)."',
				    booremunerationstage= '".$oMysqliLib->getMySqli()->real_escape_string($this->sTxtDescripDocument)."',
				    datedebstage= '".$oMysqliLib->getMySqli()->real_escape_string($this->sEcheancierDocument)."',
				    datefinstage= '".$oMysqliLib->getMySqli()->real_escape_string($this->sPonderationDocument)."',
				    datelimitestage= '".$oMysqliLib->getMySqli()->real_escape_string($this->sEnumTypeDocument)."',
				    dureestage=".$this->idGroupe.",
				    idgroupe=".$this->idGroupe.",
				    idlien=".$this->idLien."
				    WHERE idstage= ".$this->idStage."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
            }//fin de la fonction modifierUnDocument()
            
            
		/**
		 * supprime un Stagede la base de données
		 * @return boolean
		 */
		public function Supprimer_Stage(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM stages
				WHERE idstage= ".$this->idStage."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnDocument()
		
		
		/**
		 * rechercher un Document
		 * @param $sNomStageNom de l'etape a rechercher
		 * @return boolean true si le Stageest trouvé false sinon
		 */
		 public function Rechercher_Stage(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Document
		 	$sRequete = "
		 		SELECT * 
		 		FROM stages
		 		WHERE idstage= ".$this->idStage."
				";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$oStage= $oMysqliLib->recupererTableau($oResult);

		 	
		 	//Si le Stage est trouvé
		 	if(count($oStage) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($oStage[0]['idstage'], $oStage[0]['txtdescripstage'], $oStage[0]['booremunerationstage'], $oStage[0]['datedebstage'],$oStage[0]['datefinstage'], $oStage[0]['datelimitestage'], $oStage[0]['dureestage'], $oStage[0]['idgroupe'], $oStage[0]['idlien']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnDocument()
		 
		/**
		 * rechercher toute les Documents
		 * @param $sNomStageNom du Stagea rechercher
		 * @return array contenant les Documents
		 */
		 public static function Rechercher_Stages(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Document
		 	$sRequete = "SELECT * FROM stages";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aStage= $oMysqliLib->recupererTableau($oResult);
			
		 	//retourner array contenant les stages
		 	return $aStage;	
		 }//fin de la fonction Rechercher_Stages()
		 
    }//fin de la classe Stage
?>