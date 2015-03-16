<?php

	/**
	 * classe Programmes 
	 * 582-P41-MA Programmation Web Dynamique 3
	 *
	 * @version 2015-02-05
	 */
    class Programme {
    	
		private $idProgramme;
		private $sNomProgramme;
        private $sNoProgramme;
        private $sTxtDescriptProgramme;
        private $sTxtDescriptLProgramme;
        private $sDateFinProgramme;
        private $sEnumFormaProgramme;
        private $sEnumDomaineProgramme;
		private $idLien;
		
		/* Mutateurs */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idProgramme
		 */
		public function setIdLien($idLien){
			if($idLien!=null)
				TypeException::estNumerique($idLien);
			
			$this->idLien = $idLien;
		}//fin de la fonction setIdLien()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idProgramme
		 */
		public function setIdProgramme($idProgramme){
			TypeException::estNumerique($idProgramme);
			
			$this->idProgramme = $idProgramme;
		}//fin de la fonction setidProgramme()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sNomProgramme
		 */
		public function setNomProgramme($sNomProgramme){
			TypeException::estVide($sNomProgramme);
			
			$this->sNomProgramme = $sNomProgramme;
		}//fin de la fonction setNomProgramme()
		
		/**
         * affecte une valeur à la propriété privée
         * @param string $sNoProgramme
         */
        public function setNoProgramme($sNoProgramme){
            TypeException::estVide($sNoProgramme);
            
            $this->sNoProgramme = $sNoProgramme;
        }//fin de la fonction setPrenomProgramme()
        
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sTxtDescripProgramme
         */
        public function setTxtDescripProgramme($sTxtDescripProgramme){
            if($sTxtDescripProgramme!=null)
            	TypeException::estVide($sTxtDescripProgramme);
            
            $this->sTxtDescripProgramme = $sTxtDescripProgramme;
        }//fin de la fonction setTxtDescripProgramme()
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sTxtDescriptLProgramme
         */
        public function setTxtDescripLProgramme($sTxtDescriptLProgramme){
        	if($sTxtDescriptLProgramme!=null)
            	TypeException::estVide($sTxtDescriptLProgramme);
            
            $this->sTxtDescriptLProgramme = $sTxtDescriptLProgramme;
        }//fin de la fonction setTxtDescripLProgramme()
        
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sDateFinProgramme
         */
        public function setDateFinProgramme($sDateFinProgramme){
        	if($sDateFinProgramme!=null)
            	TypeException::estVide($sDateFinProgramme);
            
            $this->sDateFinProgramme = $sDateFinProgramme;
        }//fin de la fonction setDateFinProgramme()
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sEnumFormaProgrammes
         */
        public function setEnumFormaProgramme($sEnumFormaProgramme){
            TypeException::estVide($sEnumFormaProgramme);
            
            $this->sEnumFormaProgramme = $sEnumFormaProgramme;
        }//fin de la fonction setEnumFormaProgramme()
        
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $sTelProgrammes
		 */
		public function setEnumDomaineProgramme($sEnumDomaineProgramme){
			TypeException::estVide($sEnumDomaineProgramme);
			
			$this->sEnumDomaineProgramme = $sEnumDomaineProgramme;
		}//fin de la fonction setEnumDomaineProgrammes()
		
		
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdLien(){
			return $this->idLien;
		}//fin de la fonction getIdLien()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdProgramme(){
			return $this->idProgramme;
		}//fin de la fonction getIdProgrammes()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getNomProgramme(){
			return htmlentities($this->sNomProgramme);
		}//fin de la fonction getNomProgrammes()
		
		/**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getNoProgramme(){
            return htmlentities($this->sNoProgramme);
        }//fin de la fonction getNoProgrammes()
        
        /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getTxtDescripProgramme(){
            return htmlentities($this->sTxtDescripProgramme);
        }//fin de la fonction getTxtDescripProgrammes()
        
        /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getTxtDescripLProgramme(){
            return htmlentities($this->sTxtDescriptLProgramme);
        }//fin de la fonction getTxtDescriptLgProgrammes()
        
         /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getDateFinProgramme(){
            return htmlentities($this->sDateFinProgramme);
        }//fin de la fonction getDateFinProgrammes()
        
        /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getEnumFormaProgramme(){
            return htmlentities($this->sEnumFormaProgramme);
        }//fin de la fonction getEnumFormaProgrammes()
        
      
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getEnumDomaineProgramme(){
			return htmlentities($this->sEnumDomaineProgramme);
		}//fin de la fonction getEnumDomaineProgramme()
		
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idProgramme=0, $sNomProgramme="Programmes", $sNoProgramme="jose", $sTxtDescripProgramme="cortes", $TxtDescripLGProgramme="allo", $sDateFinProgramme="www.aloo.com", $sEnumFormaProgramme="patoc76@yahoo.ca", $sEnumDomaineProgramme="1", $idLien=1 ){
			$this->setIdProgramme($idProgramme);
			$this->setNomProgramme($sNomProgramme);
			$this->setNoProgramme($sNoProgramme);
            $this->setTxtDescripProgramme($sTxtDescripProgramme);
            $this->setTxtDescripLProgramme($TxtDescripLGProgramme);
            $this->setDateFinProgramme($sDateFinProgramme);
            $this->setEnumFormaProgramme($sEnumFormaProgramme);
            $this->setEnumDomaineProgramme($sEnumDomaineProgramme);
			$this->setIdLien($idLien);
            
		}
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		/**
		 * ajoute un Programmes dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Programme(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			//ajouter enumetape si besoin dans la requete
			$sRequete = "
				INSERT INTO `Programmess`(`vchnomprogramme`, `vchnoprogramme`, `txtDescriptprogramme`, `txtDescriptlgprogramme`, `datefinprogramme`, `enumformation`, `enumdomaine`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sNomProgrammes)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sNoProgrammes)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sTxtDescripProgrammes)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->TxtDescripLGProgrammes)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sDateFinProgrammes)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sEnumFormaProgrammes)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sEnumDomaineProgrammes)."'
				         )
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->insert_id;
		}//fin de la fonction ajouterUnProgrammes()
		
		/**
		 * modifie un Programmes dans la base de données
		 * @return boolean
		 */
		public function Modifier_Programme(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de modification
			$sRequete = "
				UPDATE programme
				SET vchnomprogramme = '".$oMysqliLib->getMySqli()->real_escape_string($this->sNomProgrammes)."',
				    vchnoprogramme = '".$oMysqliLib->getMySqli()->real_escape_string($this->sNoProgrammes)."',
				    txtDescriptprogramme = '".$oMysqliLib->getMySqli()->real_escape_string($this->sTxtDescripProgrammes)."',
				    txtDescriptlgprogramme = '".$oMysqliLib->getMySqli()->real_escape_string($this->TxtDescripLGProgrammes)."',
				    datefinprogramme = '".$oMysqliLib->getMySqli()->real_escape_string($this->sDateFinProgrammes)."',
				    enumformation = '".$oMysqliLib->getMySqli()->real_escape_string($this->sEnumFormaProgrammes)."',
				    enumdomaine='".$oMysqliLib->getMySqli()->real_escape_string($this->sEnumDomaineProgrammes )."'
				    WHERE idprogramme = ".$this->idProgrammes."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
            }//fin de la fonction modifierUnProgrammes()
            
            
		/**
		 * supprime un Programmes de la base de données
		 * @return boolean
		 */
		public function Supprimer_Programme(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM programmes
				WHERE idprogramme = ".$this->idProgrammes."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnProgrammes()
		
		
		/**
		 * rechercher un Programmes
		 * @param $sNomProgrammes Nom de l'etape a rechercher
		 * @return boolean true si le Programmes est trouvé false sinon
		 */
		 public function Rechercher_Programme(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Programmes
		 	$sRequete = "
		 		SELECT * 
		 		FROM programmes
		 		WHERE idprogramme = '".$this->idProgramme."'";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$oProgrammes = $oMysqliLib->recupererTableau($oResult);

		 	
		 	//Si le Programmes est trouvé
		 	if(count($oProgrammes) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($oProgrammes[0]['idprogramme'], $oProgrammes[0]['vchnomprogramme'], $oProgrammes[0]['vchnoprogramme'], $oProgrammes[0]['txtdescriptprogramme'],$oProgrammes[0]['txtdescriptlgprogramme'], $oProgrammes[0]['datefinprogramme'], $oProgrammes[0]['enumformation'], $oProgrammes[0]['enumdomaine']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnProgrammes()
		 
		/**
		 * rechercher toute les Programmess
		 * @param $sNomProgrammes Nom du Programmes a rechercher
		 * @return array contenant les Programmess
		 */
		 public static function Rechercher_Programmes($id="rien"){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Programmes
		 	if($id=="rien"){
				$sRequete = "SELECT * FROM programmes";
			}else{
				$sRequete = "SELECT * FROM programmes WHERE idprogramme='".$id."'";
			}
				
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aProgrammes = $oMysqliLib->recupererTableau($oResult);
			
			if($id==null){
				$aProgrammes[0]['vchnomprogramme']="";// si le ud est null sinon ca cause des erreurs
			}
			
		 	//retourner array contenant les etapes
		 	return $aProgrammes;	
		 }//fin de la fonction rechercherToutProgramme()
		 
		
		 
    }//fin de la classe Programme
?>