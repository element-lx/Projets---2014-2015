<?php

	/**
	 * classe Document 
	 * 582-P41-MA Programmation Web Dynamique 3
	 * 
	 * @version 2015-02-05
	 */
    class Document {
    	
		private $idDocument;
		private $sNomDocument;
        private $sTxtDescripDocument;
        private $sEcheancierDocument;
        private $sPonderationDocument;
        private $sEnumTypeDocument;
        private $idGroupe;
		private $idLien;
       
		
		/* Mutateurs */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idDocument
		 */
		public function setIdDocument($idDocument){
			TypeException::estNumerique($idDocument);
			
			$this->idDocument = $idDocument;
		}//fin de la fonction setidDocument()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sNomDocument
		 */
		public function setNomDocument($sNomDocument){
			TypeException::estVide($sNomDocument);
			
			$this->sNomDocument = $sNomDocument;
		}//fin de la fonction setNomDocument()
		
		/**
         * affecte une valeur à la propriété privée
         * @param string $sTxtDescripDocument
         */
        public function setTxtDescripDocument($sTxtDescripDocument){
            //TypeException::estVide($sTxtDescripDocument);
            
            $this->sTxtDescripDocument = $sTxtDescripDocument;
        }//fin de la fonction setTxtDescripDocument()
        
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sEcheancierDocument
         */
        public function setEcheancierDocument($sEcheancierDocument){
            //TypeException::estVide($sEcheancierDocument);
            
            $this->sEcheancierDocument = $sEcheancierDocument;
        }//fin de la fonction setEcheancierDocument()
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sPonderationDocument
         */
        public function setPonderationDocument($sPonderationDocument){
            //TypeException::estVide($sPonderationDocument);
            
            $this->sPonderationDocument = $sPonderationDocument;
        }//fin de la fonction setPonderationDocument()
        
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sEnumTypeDocument
         */
        public function setEnumTypeDocument($sEnumTypeDocument){
            TypeException::estVide($sEnumTypeDocument);
            
            $this->sEnumTypeDocument = $sEnumTypeDocument;
        }//fin de la fonction setEnumTypeDocument()
        
		
		/**
         * affecte une valeur à la propriété privée
         * @param integer $idGroupe
         */
        public function setIdGroupe($idGroupe){
            //TypeException::estVide($idGroupe);
            
            $this->idGroupe = $idGroupe;
        }//fin de la fonction setEnumDomaineDocument()
        
        /**
         * affecte une valeur à la propriété privée
         * @param integer $idLien
         */
        public function setIdLien($idLien){
            //TypeException::estVide($idLien);
            
            $this->idLien = $idLien;
        }//fin de la fonction setEnumDomaineDocument()
        
		
		
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdDocument(){
			return $this->idDocument;
		}//fin de la fonction getIdDocument()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getNomDocument(){
			return htmlentities($this->sNomDocument);
		}//fin de la fonction getNomDocument()
		
		/**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getTxtDescripDocument(){
            return htmlentities($this->sTxtDescripDocument);
        }//fin de la fonction getTxtDescripDocument()
        
        /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getEcheancierDocument(){
            return htmlentities($this->sEcheancierDocument);
        }//fin de la fonction getEcheancierDocument()
        
        /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getPonderationDocument(){
            return htmlentities($this->sPonderationDocument);
        }//fin de la fonction getPonderationDocument()
        
         /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getEnumTypeDocument(){
            return htmlentities($this->sEnumTypeDocument);
        }//fin de la fonction getEnumTypeDocument()
        
       
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdGroupe(){
			return $this->idGroupe;
		}//fin de la fonction getidGroupe()
		
			/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdLien(){
			return $this->idLien;
		}//fin de la fonction getidLien()
		
		
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idDocument=0, $sNomDocument="Veuillez choisir un document", $sTxtDescripDocument="cortes", $sEcheancierDocument="allo", $sPonderationDocument="www.aloo.com", $sEnumTypeDocument="patoc76@yahoo.ca", $idGroupe=0, $idLien=1){
			$this->setIdDocument($idDocument);
			$this->setNomDocument($sNomDocument);
			$this->setTxtDescripDocument($sTxtDescripDocument);
            $this->setEcheancierDocument($sEcheancierDocument);
            $this->setPonderationDocument($sPonderationDocument);
            $this->setEnumTypeDocument($sEnumTypeDocument);
            $this->setIdGroupe($idGroupe);
			$this->setIdLien($idLien);
            
		}
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		/**
		 * ajoute un Document dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Document(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			//ajouter enumetape si besoin dans la requete
			$sRequete = "
				INSERT INTO `documents`(`vchnomdocument`, `txtdescripdocument`, `vchecheancierdocument`, `vchponderationdocument`, `enumtypedocument`, `idgroupe`, `idlien`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sNomDocument)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sTxtDescripDocument)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sEcheancierDocument)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sPonderationDocument)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sEnumTypeDocument)."',
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
		 * modifie un Document dans la base de données
		 * @return boolean
		 */
		public function Modifier_Document(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de modification
			$sRequete = "
				UPDATE documents
				SET vchnomdocument = '".$oMysqliLib->getMySqli()->real_escape_string($this->sNomDocument)."',
				    txtdescripdocument = '".$oMysqliLib->getMySqli()->real_escape_string($this->sTxtDescripDocument)."',
				    vchecheancierdocument = '".$oMysqliLib->getMySqli()->real_escape_string($this->sEcheancierDocument)."',
				    vchponderationdocument = '".$oMysqliLib->getMySqli()->real_escape_string($this->sPonderationDocument)."',
				    enumtypedocument = '".$oMysqliLib->getMySqli()->real_escape_string($this->sEnumTypeDocument)."',
				    idgroupe=".$this->idGroupe.",
				    idlien=".$this->idLien."
				    WHERE iddocument = ".$this->idDocument."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
			var_dump($sRequete);
            }//fin de la fonction modifierUnDocument()
            
            
            
            
		/**
		 * supprime un Document de la base de données
		 * @return boolean
		 */
		public function Supprimer_Document(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM documents
				WHERE iddocument = ".$this->idDocument."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnDocument()
		
		/**
         * supprime tout les Documents de la base de données
         * @return boolean
         */
        public function Supprimer_Documents(){
            //connexion à la base de données
            $oMysqliLib = new MySqliLib();
            //requête de suppression
            $sRequete = "
            
                DELETE FROM documents
               
            ";
            //exécuter la requête
            $bResult = $oMysqliLib->executer($sRequete);
            //retourner la valeur booléenne
            return $oMysqliLib->getMySqli()->affected_rows;
        }//fin de la fonction supprimerUnDocument()
		
		
		/**
		 * rechercher un Document
		 * @param $sNomDocument Nom de l'etape a rechercher
		 * @return boolean true si le Document est trouvé false sinon
		 */
		 public function Rechercher_Document(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Document
		 	$sRequete = "
		 		SELECT * 
		 		FROM documents
		 		WHERE iddocument = '".$this->idDocument."'";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$oDocument = $oMysqliLib->recupererTableau($oResult);

		 	
		 	//Si le Document est trouvé
		 	if(count($oDocument) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($oDocument[0]['iddocument'], $oDocument[0]['vchnomdocument'], $oDocument[0]['txtdescripdocument'], $oDocument[0]['vchecheancierdocument'],$oDocument[0]['vchponderationdocument'], $oDocument[0]['enumtypedocument'], $oDocument[0]['idgroupe'], $oDocument[0]['idlien']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnDocument()
		 
		/**
		 * rechercher toute les Documents
		 * @param $sNomDocument Nom du Document a rechercher
		 * @return array contenant les Documents
		 */
		 public static function Rechercher_Documents(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Document
		 	$sRequete = "SELECT * FROM documents";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aDocument = $oMysqliLib->recupererTableau($oResult);
			
		 	//retourner array contenant les etapes
		 	return $aDocument;	
		 }//fin de la fonction rechercherToutEtape()
		 
    }//fin de la classe Etape
?>