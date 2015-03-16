<?php

	/**
	 * classe Suit
	 * @version 2015-02-05
	 */
    class Suit {
    	
		private $idGroupe;
		private $idEtape;
       
       
       
		
		/* Mutateurs */
		/***********************************************************************************/
		
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idEtape
		 */
		public function setIdEtape($idEtape){
			TypeException::estNumerique($idEtape);
			
			$this->idEtape = $idEtape;
		}//fin de la fonction setIdEtape()
		
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idGroupe
		 */
		public function setIdGroupe($idGroupe){
			TypeException::estNumerique($idGroupe);
			
			$this->idGroupe = $idGroupe;
		}//fin de la fonction setIdTexte()
		
		
			
		/* Accesseurs */
		/***********************************************************************************/
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdEtape(){
			return $this->idEtape;
		}//fin de la fonction getIdPresente()
		
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdGroupe(){
			return $this->idGroupe;
		}//fin de la fonction getIdGroupe()
		
		
		
        
       
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idEtape=1, $idGroupe=1){
			$this->setIdEtape($idEtape);
			$this->setIdGroupe($idGroupe);
			}
		
		
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		/**
		 * ajoute un goupeSuitEtape dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Suit(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			//ajouter enumSuit si besoin dans la requete
			$sRequete = "
				INSERT INTO `suit`(`idetape`, `idgroupe`) 
				VALUES (".$this->idEtape.",
				        ".$this->idGroupe.")";
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->insert_id;
		}//fin de la fonction ajouterUnPresente()
		
        /**
		 * supprime un goupeSuitEtape dans la base de données
		 * @return int  Nombre de lignes afffecter par l'operation
		 */ 
		public function Supprimer_Suit($typeId=""){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			if($typeId=='groupe'||$typeId=='etape'){
		 		$typeId=='etape'?$sRequete = "DELETE FROM `suit` WHERE idetape = ".$this->idEtape: $sRequete = "DELETE FROM `suit` WHERE idgroupe = ".$this->idgroupe;	 
			}
			else {
				TypeException::groupeOuEtape($typeId);
			}
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnPresente()
		
		/**
		 * supprime un goupeSuitEtape dans la base de données
		 * @return int  Nombre de lignes afffecter par l'operation
		 */ 
		public function Supprimer_Suits(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			
		 	$sRequete = "DELETE FROM `suit`";
			
			//exécuter la requête
			$bResult = $oMysqliLib->executer($sRequete);
			//retourner la valeur booléenne
			return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction supprimerUnPresente()
		
		
		/**
		 * rechercher un Suit
		 * @param $sNomPresente Nom de l'Suit a rechercher
		 * @return boolean true si le Presente est trouvé false sinon
		 */
		 public function Rechercher_Suit($typeId=""){ //peut recevoir comme valeur 'groupe' ou 'texte'
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Presente
		 	if($typeId=='groupe'||$typeId=='etape'){
		 		$typeId=='etape'?$sRequete = "SELECT * FROM `suit` WHERE idetape = ".$this->idEtape: $sRequete = "SELECT * FROM `suit` WHERE idgroupe = ".$this->idgroupe;	 
			}
			else {
				TypeException::groupeOuEtape($typeId);
			}		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$oSuit = $oMysqliLib->recupererTableau($oResult);

		 	
		 	//Si le Presente est trouvé
		 	if(count($oSuit) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($oSuit[0]['idgroupe'], $oSuit[0]['idetape']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnPresente()
		 
		/**
		 * rechercher toute les Presentes
		 * @param $sNomPresente Nom du Presente a rechercher
		 * @return array contenant les Presentes
		 */
		 public static function Rechercher_Suits(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du Presente
		 	$sRequete = "SELECT * From `suit`";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aPresente = $oMysqliLib->recupererTableau($oResult);
			
		 	//retourner array contenant les Suits
		 	return $aPresente;	
		 }//fin de la fonction rechercherToutSuit()
		 
    }//fin de la classe Suit
?>