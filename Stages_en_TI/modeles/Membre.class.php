<?php

	/**
	 * classe Membre 
	 * 582-P41-MA Programmation Web Dynamique 3
	 * 
	 * @version 2015-02-05
	 */
    class Membre {
    	
		private $idMembre;
		private $sNomMembre;
        private $sPrenomMembre;
        private $sTitreMembre;
        private $sTxtDescripMembre;
        private $sUrlPhotoMembre;
        private $sCourrielMembre;
        private $sTelMembre;
		
		/* Mutateurs */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idMembre
		 */
		public function setIdMembre($idMembre){
			TypeException::estNumerique($idMembre);
			
			$this->idMembre = $idMembre;
		}//fin de la fonction setidMembre()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sNomMembre
		 */
		public function setNomMembre($sNomMembre){
			TypeException::estVide($sNomMembre);
			
			$this->snomMembre = $sNomMembre;
		}//fin de la fonction setNomMembre()
		
		/**
         * affecte une valeur à la propriété privée
         * @param string $sPrenomMembre
         */
        public function setPrenomMembre($sPrenomMembre){
            TypeException::estVide($sPrenomMembre);
            
            $this->sPrenomMembre = $sPrenomMembre;
        }//fin de la fonction setPrenomMembre()
        
        /**
         * affecte une valeur à la propriété privée
         * @param string $sTitreMembre
         */
        public function setTitreMembre($sTitreMembre){
            TypeException::estVide($sTitreMembre);
            
            $this->sTitreMembre = $sTitreMembre;
        }//fin de la fonction setTitreMembre()
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sTxtDescripMembre
         */
        public function setTxtDescripMembre($sTxtDescripMembre){
            TypeException::estVide($sTxtDescripMembre);
            
            $this->sTxtDescripMembre = $sTxtDescripMembre;
        }//fin de la fonction setTxtDescripMembre()
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $UrlPhotoMembre
         */
        public function setUrlPhotoMembre($sUrlPhotoMembre){
            TypeException::estVide($sUrlPhotoMembre);
            
            $this->sUrlPhotoMembre = $sUrlPhotoMembre;
        }//fin de la fonction setUrlPhotoMembre()
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $CourrielMembre
         */
        public function setCourrielMembre($sCourrielMembre){
            TypeException::estVide($sCourrielMembre);
            
            $this->sCourrielMembre = $sCourrielMembre;
        }//fin de la fonction setCourrielMembre()
        
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $sTelMembre
		 */
		public function setsTelMembre($sTelMembre){
			TypeException::estNumerique($sTelMembre);
			
			$this->sTelMembre = $sTelMembre;
		}//fin de la fonction setsTelMembre()
		
		
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdMembre(){
			return $this->idMembre;
		}//fin de la fonction getIdMembre()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getNomMembre(){
			return htmlentities($this->snomMembre);
		}//fin de la fonction getNomMembre()
		
		/**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getPrenomMembre(){
            return htmlentities($this->sPrenomMembre);
        }//fin de la fonction getPrenomMembre()
        
        /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getTitreMembre(){
            return htmlentities($this->sTitreMembre);
        }//fin de la fonction getTitreMembre()
        
        /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getTxtDescripMembre(){
            return htmlentities($this->sTxtDescripMembre);
        }//fin de la fonction getTxtDescripMembre()
        
         /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getUrlPhotoMembre(){
            return htmlentities($this->sUrlPhotoMembre);
        }//fin de la fonction getTxtDescripMembre()
        
        /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getCourrielMembre(){
            return htmlentities($this->sCourrielMembre);
        }//fin de la fonction getCourrielMembre()
        
      
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getTelMembre(){
			return $this->sTelMembre;
		}//fin de la fonction getTelMembre()
		
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idMembre=0, $sNomMembre="membre", $sPrenomMembre="mr", $sTitreMembre="Sn", $sTxtDescripMembre="allo", $sUrlPhotoMembre="www.aloo.com", $sCourrielMembre="patoc76@yahoo.ca", $sTelMembre=1){
			$this->setIdMembre($idMembre);
			$this->setNomMembre($sNomMembre);
			$this->setPrenomMembre($sPrenomMembre);
            $this->setTitreMembre($sTitreMembre);
            $this->setTxtDescripMembre($sTxtDescripMembre);
            $this->setUrlPhotoMembre($sUrlPhotoMembre);
            $this->setCourrielMembre($sCourrielMembre);
            $this->setsTelMembre($sTelMembre);
            
		}
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		/**
		 * ajoute un Membre dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Membre(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			//ajouter enumetape si besoin dans la requete
			$sRequete = "
				INSERT INTO `membres`(`vchnommembre`, `vchprenommembre`, `vchtitremembre`, `txtdescripmembre`, `urlphotomembre`, `vchcourrielmembre`, `vchtelmembre`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sNomMembre)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sPrenomMembre)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sTitreMembre)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sTxtDescripMembre)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sUrlPhotoMembre)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sCourrielMembre)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sTelMembre)."'
				         )
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->insert_id;
		}//fin de la fonction ajouterUnMembre()
		
		/**
		 * modifie un Membre dans la base de données
		 * @return boolean
		 */
		public function Modifier_Membre(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de modification
			$sRequete = "
				UPDATE membres
				SET vchnommembre = '".$oMysqliLib->getMySqli()->real_escape_string($this->sNomMembre)."',
				    vchprenommembre = '".$oMysqliLib->getMySqli()->real_escape_string($this->sPrenomMembre)."',
				    vchtitremembre = '".$oMysqliLib->getMySqli()->real_escape_string($this->sTitreMembre)."',
				    txtdescripmembre = '".$oMysqliLib->getMySqli()->real_escape_string($this->sTxtDescripMembre)."',
				    urlphotomembre = '".$oMysqliLib->getMySqli()->real_escape_string($this->sUrlPhotoMembre)."',
				    vchcourrielmembre = '".$oMysqliLib->getMySqli()->real_escape_string($this->sCourrielMembre)."',
				    vchtelmembre='".$oMysqliLib->getMySqli()->real_escape_string($this->sTelMembre)."'
				    WHERE idmembre = ".$this->idMembre."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
            }//fin de la fonction modifierUnMembre()
            
            
		/**
		 * supprime un Membre de la base de données
		 * @return boolean
		 */
		public function Supprimer_Membre(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM membres
				WHERE idmembre = ".$this->idMembre."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnMembre()
		
		
		/**
		 * rechercher un Membre
		 * @param $sNomMembre Nom de l'etape a rechercher
		 * @return boolean true si le Membre est trouvé false sinon
		 */
		 public function Rechercher_Membre(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Membre
		 	$sRequete = "
		 		SELECT * 
		 		FROM membres
		 		WHERE idmembre = '".$this->idMembre."'";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$oMembre = $oMysqliLib->recupererTableau($oResult);

		 	
		 	//Si le Membre est trouvé
		 	if(count($oMembre) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($oMembre[0]['idmembre'], $oMembre[0]['vchnommembre'], $oMembre[0]['vchprenommembre'], $oMembre[0]['vchtitremembre'], $oMembre[0]['txtdescripmembre'], $oMembre[0]['urlphotomembre'], $oMembre[0]['vchcourrielmembre'], $oMembre[0]['vchtelmembre']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnMembre()
		 
		/**
		 * rechercher toute les Membres
		 * @param $sNomMembre Nom du membre a rechercher
		 * @return array contenant les Membres
		 */
		 public static function Rechercher_Membres($id="rien"){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Membre
		 	
			if($id=="rien"){
				$sRequete = "SELECT * FROM membres";
			}else{
				$sRequete = "SELECT * FROM membres WHERE idmembre='".$id."'";
			}
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aGroupe = $oMysqliLib->recupererTableau($oResult);
			
			if($id==null){
				$aGroupe[0]['vchnommembre']="";// si le id est null sinon ca cause des erreurs
				$aGroupe[0]['vchprenommembre']="";
			}
			
		 	//retourner array contenant les groupes
		 	return $aGroupe;	
		 }//fin de la fonction Rechercher_Groupes()
		 
		
		 
    }//fin de la classe Membres
?>