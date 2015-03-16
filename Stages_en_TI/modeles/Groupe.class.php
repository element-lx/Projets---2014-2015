<?php

	/**
	 * classe Groupe 
	 * 582-P41-MA Programmation Web Dynamique 3
	 * 
	 * @version 2015-02-05
	 */
    class Groupe {
    	
		private $idGroupe;
		private $sNomGroupe;
		private $idProgramme;
		private $idMembre;
		
		/* Mutateurs */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idGroupe
		 */
		public function setIdGroupe($idGroupe){
			TypeException::estNumerique($idGroupe);
			
			$this->idGroupe = $idGroupe;
		}//fin de la fonction setidgroupe()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idMembre
		 */
		public function setIdMembre($idMembre){
			if($idMembre!=null)
				TypeException::estNumerique($idMembre);
			
			$this->idMembre = $idMembre;
		}//fin de la fonction setidmembre()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sNomGroupe
		 */
		public function setNomGroupe($sNomGroupe){
			TypeException::estVide($sNomGroupe);
			
			$this->sNomGroupe = $sNomGroupe;
		}//fin de la fonction setNomGroupe()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idProgramme
		 */
		public function setIdProgramme($idProgramme){
			TypeException::estNumerique($idProgramme);
			
			$this->idProgramme = $idProgramme;
		}//fin de la fonction setidgroupe()
		
		
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdGroupe(){
			return $this->idGroupe;
		}//fin de la fonction getidgroupe()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getNomGroupe(){
			return htmlentities($this->sNomGroupe);
		}//fin de la fonction getNomGroupe()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdProgramme(){
			return $this->idProgramme;
		}//fin de la fonction getIdProgramme()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdMembre(){
			return $this->idMembre;
		}//fin de la fonction getIdMembre()
		
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idGroupe=0, $idProgramme=0, $sNomGroupe="gpe", $idMembre=0){
			$this->setIdGroupe($idGroupe);
			$this->setNomGroupe($sNomGroupe);
			$this->setIdProgramme($idProgramme);
			$this->setIdMembre($idMembre);
		}
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		/**
		 * ajoute un groupe dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Groupe(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			$sRequete = "
				INSERT INTO `groupes`(`vchnomgroupe`, `idprogramme`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sNomGroupe)."', '".$this->idProgramme."')
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
		public function Modifier_Groupe(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de modification
			$sRequete = "
				UPDATE groupes
				SET vchnomgroupe = '".$oMysqliLib->getMySqli()->real_escape_string($this->sNomGroupe)."'
				WHERE idgroupe = ".$this->idGroupe."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction modifierUnGroupe()
		/**
		 * supprime un groupe de la base de données
		 * @return boolean
		 */
		public function Supprimer_Groupe(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM groupes
				WHERE idgroupe = ".$this->idGroupe."
			";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnGroupe()
		
		
		/**tous les groupes de la base de données
         * @return boolean
         */
        public function Supprimer_Groupes(){
            //connexion à la base de données
            $oMysqliLib = new MySqliLib();
            //requête de suppression
            $sRequete = "
                DELETE  FROM groupes
                
            ";
            //exécuter la requête
            $bResult = $oMysqliLib->executer($sRequete);
            //retourner la valeur booléenne
            return $oMysqliLib->getMySqli()->affected_rows;
        }//fin de la fonction supprimerUnGroupe()
        
		
		
		/**
		 * rechercher un groupe
		 * @param $sNomGroupe Nom du groupe a rechercher
		 * @return boolean true si le groupe est trouvé false sinon
		 */
		 public function Rechercher_Groupe(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	$sRequete = "
		 		SELECT * 
		 		FROM groupes
		 		WHERE `idgroupe` = ".$this->idGroupe;		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aGroupe = $oMysqliLib->recupererTableau($oResult);
			
		 	//Si le groupe est trouvé
		 	if(count($aGroupe) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($aGroupe[0]['idgroupe'], $aGroupe[0]['idprogramme'], $aGroupe[0]['vchnomgroupe'], $aGroupe[0]['idmembre']);
		 		//retourner true
		 		return true;
		 	}else{		 	//retourner false
		 		return false;	
			}
		 }//fin de la fonction rechercherUnGroupe()
		 
		 /**
		 * rechercher un groupe
		 * @param $id id du groupe a rechercher
		 * @return array 
		 */
		 public static function Rechercher_Groupes($id="rien"){//surtout utile si utiliser dans un formulaire ou l'objet n'est pas instancié ex:rechercher un nom groupe dans un form etapes
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du ou des groupe

			if($id=="rien"){
				$sRequete = "SELECT * FROM groupes";
			}else{
				$sRequete = "SELECT * FROM groupes WHERE idgroupe='".$id."'";
			}
				
					 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aGroupe = $oMysqliLib->recupererTableau($oResult);
			
			if($id==null){
				$aGroupe[0]['vchnomgroupe']="";// si le id est null sinon ca cause des erreurs
			}
			
		 	//retourner array contenant les groupes
		 	return $aGroupe;	
		 }//fin de la fonction Rechercher_Groupes()
		 
    }//fin de la classe Groupe
?>