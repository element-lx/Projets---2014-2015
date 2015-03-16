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
 * @authors Steven Castelli, David Julien, Jose Cortes, Francois Tremblay
 * @version 1.0
 * @license Aucune
 * Professeur : Caroline Martin
 * Date de remise : 2015-03-21
 * 
 */

 


	/**
	 * classe Texte
	 * @author 
	 * @version 
	 */
    class Texte {
    	/*Propriétées*/
    	/***********************************************************************************/
		private $idTexte;
		private $sTitreTexte;
		private $sContenuTexte;
        private $sEnumtypetexte;
		private $idGroupe;//pas dans le plans des classe mais ^resente dans la bd
		
		/* Mutateur */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idTexte
		 */
			public function setIdTexte($idTexte){
				//TypeException::estNumerique($idTexte);
                TypeException::estVide($idTexte);
				$this->idTexte = $idTexte;
			}//fin de la fonction setIdTexte()
			
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sTitreTexte
		 */
		public function setTitreTexte($sTitreTexte){
			TypeException::estVide($sTitreTexte);
			
			$this->sTitreTexte = $sTitreTexte;
		}//fin de la fonction setTitreTexte()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sContenuTexte
		 */
		public function setContenuTexte($sContenuTexte){
			TypeException::estVide($sContenuTexte);
			
			$this->sContenuTexte = $sContenuTexte;
		}//fin de la fonction setContenuTexte()
		
		/**
         * affecte une valeur à la propriété privée
         * @param string $sContenuTexte
         */
        public function setTypeTexte($sEnumtypetexte){
            TypeException::estString($sEnumtypetexte);
            
            $this->sEnumtypetexte = $sEnumtypetexte;
        }//fin de la fonction setContenuTexte()

		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idTexte
		 */
			public function setIdGroupe($idGroupe){
				TypeException::estNumerique($idGroupe);
				$this->idGroupe = $idGroupe;
			}//fin de la fonction setIdGroupe()
		
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getidTexte(){
			return $this->idTexte;
		}//fin de la fonction getidTexte()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getTitreTexte(){
			return htmlentities($this->sTitreTexte);
		}//fin de la fonction getTitreTexte()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getContenuTexte(){
			return htmlentities($this->sContenuTexte);
		}//fin de la fonction getContenuTexte()
		
		/**
         * retourne la valeur de la propriété privée
         * @return string 
         */
        public function getTypeTexte(){
            return htmlentities($this->sEnumtypetexte);
        }//fin de la fonction getContenuTexte()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdGroupe(){
			return $this->idGroupe;
		}//fin de la fonction getIdGroupe()
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idTexte=1, $sTitreTexte="texte", $sContenuTexte="Contenue",$sEnumtypetexte="" , $idGroupe=5){
			$this->setidTexte($idTexte);
			$this->setTitreTexte($sTitreTexte);
			$this->setContenuTexte($sContenuTexte);
            $this->setTypeTexte($sEnumtypetexte);
            $this->setIdGroupe($idGroupe);
		}
		
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		
		/**
		 * ajoute un groupe dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Texte(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			$sRequete = "
				INSERT INTO `textes`(`vchtitretexte`, `txtcontenutexte`,`enumtypetexte`, `idgroupe`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sTitreTexte)."', 
				'".$oMysqliLib->getMySqli()->real_escape_string($this->sContenuTexte)."', 
				'".$oMysqliLib->getMySqli()->real_escape_string($this->sEnumtypetexte)."',
				'".$this->idGroupe."')
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
		 public function Modifier_Texte(){
			 //connexion à la base de données
			 $oMysqliLib = new MySqliLib();
			 //requête de modification
			 $sRequete = " 
				 UPDATE `textes` SET `vchtitretexte`='".$oMysqliLib->getMySqli()->real_escape_string($this->sTitreTexte)."',
                 `txtcontenutexte`='".$oMysqliLib->getMySqli()->real_escape_string($this->sContenuTexte)."',
                 `enumtypetexte`='".$oMysqliLib->getMySqli()->real_escape_string($this->sEnumtypetexte)."',
                  `idgroupe`=".$this->idGroupe."
                  WHERE `idtexte` = ".$this->idTexte
			 ;
              
             
			 //exécuter la requête
			 $bResult = $oMysqliLib->executer($sRequete);
			 //retourner la valeur booléenne
			 return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction modifierUnUser()
		/**
		 * supprime un groupe de la base de données
		 * @return boolean
		 */
		
		public function Supprimer_Texte(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM `textes`
				WHERE idtexte = ".$this->idTexte."
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
		public function Rechercher_Texte(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	$sRequete = "
		 		SELECT * 
		 		FROM `textes`
		 		WHERE idtexte = ".$this->idTexte."
			";
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aTexte = $oMysqliLib->recupererTableau($oResult);
			
		 	//Si le groupe est trouvé
		 	if(count($aTexte) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($aTexte[0]['idtexte'], $aTexte[0]['vchtitretexte'], $aTexte[0]['txtcontenutexte'], $aTexte[0]['enumtypetexte'], $aTexte[0]['idgroupe']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnTexte()
		 
		 public static function Rechercher_Textes(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	$sRequete = "SELECT * FROM textes";		 		
		 	
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aTextes = $oMysqliLib->recupererTableau($oResult);
			
		 	//retourner array contenant les textes
		 	return $aTextes;	
		 }//fin de la fonction Rechercher_Testes()

		 	
	}//fin de la classe Groupe

 
 
 
 
 
 
 
 
 ?>