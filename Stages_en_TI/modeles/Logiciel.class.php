<?php

	/**
	 * classe Logiciel 
	 * 582-P41-MA Programmation Web Dynamique 3
	 *
	 * @version 2015-02-05
	 */
    class Logiciel {
    	
		private $idLogiciel;
		private $sNomLogiciel;
        private $sEnumCategorie;
       
       
		
		/* Mutateurs */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idLogiciel
		 */
		public function setIdLogiciel($idLogiciel){
			TypeException::estNumerique($idLogiciel);
			
			$this->idLogiciel = $idLogiciel;
		}//fin de la fonction setidLogiciel()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sNomLogiciel
		 */
		public function setNomLogiciel($sNomLogiciel){
			TypeException::estVide($sNomLogiciel);
			
			$this->sNomLogiciel = $sNomLogiciel;
		}//fin de la fonction setNomLogiciel()
		
        
         /**
         * affecte une valeur à la propriété privée
         * @param string $sEnumTypeLogiciel
         */
        public function setEnumCategorie($sEnumCategorie){
            TypeException::estVide($sEnumCategorie);
            
            $this->sEnumCategorie = $sEnumCategorie;
        }//fin de la fonction setEnumTypeLogiciel()
        
		
			
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdLogiciel(){
			return $this->idLogiciel;
		}//fin de la fonction getIdLogiciel()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getNomLogiciel(){
			return htmlentities($this->sNomLogiciel);
		}//fin de la fonction getNomLogiciel()
		
		
         /**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getEnumCategorie(){
            return htmlentities($this->sEnumCategorie);
        }//fin de la fonction getEnumCategorie()
        
       
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idLogiciel=0, $sNomLogiciel="Logiciel", $sEnumCategorie="cortes"){
			$this->setIdLogiciel($idLogiciel);
			$this->setNomLogiciel($sNomLogiciel);
			$this->setEnumCategorie($sEnumCategorie);
           
            
		}
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		/**
		 * ajoute un Logiciel dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Logiciel(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			//ajouter enumetape si besoin dans la requete
			$sRequete = "
				INSERT INTO `logiciels`(`vchnomlogiciel`, `enumcategorie`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sNomLogiciel)."',
				        '".$oMysqliLib->getMySqli()->real_escape_string($this->sEnumCategorie)."'
				        )
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->insert_id;
		}//fin de la fonction ajouterUnLogiciel()
		
		/**
		 * modifie un Logiciel dans la base de données
		 * @return boolean
		 */
		public function Modifier_Logiciel(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de modification
			$sRequete = "
				UPDATE logiciels
				SET vchnomlogiciel = '".$oMysqliLib->getMySqli()->real_escape_string($this->sNomLogiciel)."',
				    enumcategorie = '".$oMysqliLib->getMySqli()->real_escape_string($this->sTxtDescripLogiciel)."'
				    WHERE idlogiciel = ".$this->idLogiciel."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
            }//fin de la fonction modifierUnLogiciel()
            
            
		/**
		 * supprime un Logiciel de la base de données
		 * @return boolean
		 */
		public function Supprimer_Logiciel(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM logiciels
				WHERE idlogiciel = ".$this->idLogiciel."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnLogiciel()
		
		
		/**
		 * rechercher un Logiciel
		 * @param $sNomLogiciel Nom de l'etape a rechercher
		 * @return boolean true si le Logiciel est trouvé false sinon
		 */
		 public function Rechercher_Logiciel(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Logiciel
		 	$sRequete = "
		 		SELECT * 
		 		FROM logiciels
		 		WHERE idlogiciel = ".$this->idLogiciel."";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$oLogiciel = $oMysqliLib->recupererTableau($oResult);

		 	
		 	//Si le Logiciel est trouvé
		 	if(count($oLogiciel) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($oLogiciel[0]['idlogiciel'], $oLogiciel[0]['vchnomlogiciel'], $oLogiciel[0]['enumcategorie']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnLogiciel()
		 
		/**
		 * rechercher toute les Logiciels
		 * @param $sNomLogiciel Nom du Logiciel a rechercher
		 * @return array contenant les Logiciels
		 */
		 public static function Rechercher_Logiciels($id="rien"){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Logiciel
		 	
			if($id=="rien"){
				$sRequete = "SELECT * FROM logiciels";
			}else{
				$sRequete = "SELECT * FROM groupes WHERE idlogiciel='".$id."'";
			}
				
					 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aLogiciels = $oMysqliLib->recupererTableau($oResult);
			
			if($id==null){
				$aLogiciels[0]['vchnomlogiciel']="";// si le id est null sinon ca cause des erreurs
			}
			
		 	//retourner array contenant les groupes
		 	return $aLogiciels;	
		 }//fin de la fonction Rechercher_Groupes()
		 
    }//fin de la classe Logiciel
?>