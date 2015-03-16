<?php


/**
 * 	Projet Web 2
 * 
 *	Refaire site de présentation des stages du college Maisonneuve
 *
 *  Ressource.class.PHP    
 * 
 *  Classe qui connecte a db
 * 
 * @authors Steven Castelli, Jose Cortes, Francois Tremblay, David Julien
 * @version 1.0
 * @license Aucune
 * 
 * Date de remise : 2015-03-15
 * 
 */

 


	/**
	 * classe User 
	 * @author 
	 * @version 
	 */
    class Ressource {
    	/*Propriétées*/
    	/***********************************************************************************/
		private $idRessource;
		private $sNomRessource;
		private $sDescripRessource;
		private $sUrlMedia;
		private $idEtape;
        private $idLien;
        

		
		/* Mutateur */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idRessource
		 */
			public function setIdRessource($idRessource){
				TypeException::estNumerique($idRessource);
				//TypeException::estInteger($idRessource);
				TypeException::estVide($idRessource);

				$this->idRessource = $idRessource;
			}//fin de la fonction idRessource()
			
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sNomRessource
		 */
		public function setNomRessource($sNomRessource){
			TypeException::estVide($sNomRessource);
			TypeException::estString($sNomRessource);


			$this->sNomRessource = $sNomRessource;
		}//fin de la fonction sNomRessource()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sDescripRessource
		 */
		public function setDescripRessource($sDescripRessource){
			TypeException::estVide($sDescripRessource);
			TypeException::estString($sDescripRessource);
			
			$this->sDescripRessource = $sDescripRessource;
		}//fin de la fonction sDescripRessource()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $sUrlMedia
		 */
			public function setUrlMedia($sUrlMedia){
				TypeException::estVide($sUrlMedia);
				TypeException::estString($sUrlMedia);


				$this->sUrlMedia = $sUrlMedia;
			}//fin de la fonction sUrlMedia()

		
			
		/**
         * affecte une valeur à la propriété privée
         * @param integer $idEtape
         */
            public function setidEtape($idEtape){
                TypeException::estNumerique($idEtape);
                //TypeException::estInteger($idRessource);
                TypeException::estVide($idEtape);

                $this->idEtape = $idEtape;
            }//fin de la fonction IdEtape()
            
         /**
         * affecte une valeur à la propriété privée
         * @param integer $idEtape
         */
            public function setidLien($idLien){
                TypeException::estNumerique($idLien);
                //TypeException::estInteger($idRessource);
                TypeException::estVide($idLien);

                $this->idLien = $idLien;
            }//fin de la fonction IdLien()
		
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdRessource(){
			return $this->idRessource;
		}//fin de la fonction getIdRessource()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getNomRessource(){
			return htmlentities($this->sNomRessource);
		}//fin de la fonction getNomRessource()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return string 
		 */
		public function getDescripRessource(){
			return htmlentities($this->sDescripRessource);
		}//fin de la fonction getDescripRessource()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getUrlMedia(){
			return $this->sUrlMedia;
		}//fin de la fonction getUrlMedia()


		/**
         * retourne la valeur de la propriété privée
         * @return integer 
         */
        public function getIdEtape(){
            return $this->idEtape;
        }//fin de la fonction getIdEtape()
        
        /**
         * retourne la valeur de la propriété privée
         * @return integer 
         */
        public function getIdLien(){
            return $this->idLien;
        }//fin de la fonction getIdRessource()
        

		
		/* Constructeur */
		/***********************************************************************************/

	
		public function __construct($idRessource=1, $sNomRessource="res", $sDescripRessource="res", $sUrlMedia="res", $idEtape=1, $idLien=1){
			$this->setIdRessource($idRessource);
			$this->setNomRessource($sNomRessource);
			$this->setDescripRessource($sDescripRessource);
			$this->setUrlMedia($sUrlMedia);
			$this->SetidEtape($idEtape);
            $this->SetidLien($idLien);

		}
		
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		


		/**
		 * ajoute un groupe dans la base de données
		 * @return boolean
		 */
		public function Ajouter_Ressource(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête d'ajout
			$sRequete = "
				INSERT INTO `ressources`(`vchnomressource`, `txtdescripressource`, `urlmedia`,`idetape`,idlien`) 
				VALUES ('".$oMysqliLib->getMySqli()->real_escape_string($this->sNomRessource)."', 
				'".$oMysqliLib->getMySqli()->real_escape_string($this->sDescripRessource)."', 
				'".$oMysqliLib->getMySqli()->real_escape_string($this->sUrlMedia)."', 
				'".$this->idEtape."'
				'".$this->idLien."')
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
		 public function Modifier_Ressource(){
			 //connexion à la base de données
			 $oMysqliLib = new MySqliLib();
			 //requête de modification
			 $sRequete = " 
				 UPDATE `ressources`
				 SET `vchnomressource`='".$oMysqliLib->getMySqli()->real_escape_string($this->sNomRessource)."',
				 `txtdescripressource`='".$oMysqliLib->getMySqli()->real_escape_string($this->sDescripRessource)."',
				 `urlmedia`='".$oMysqliLib->getMySqli()->real_escape_string($this->sUrlMedia)."',
				 `idetape`=".$this->idEtape."
				 `idlien`=".$this->idLien."
				  WHERE idressource = ".$this->idRessource."
			 ";

			 echo $sRequete;
			 //exécuter la requête
			 $bResult = $oMysqliLib->executer($sRequete);
			 //retourner la valeur booléenne
			 return $oMysqliLib->getMySqli()->affected_rows;
		}//fin de la fonction modifierUnUser()
		/**
		 * supprime un groupe de la base de données
		 * @return boolean
		 */
		
		public function Supprimer_Ressource(){
			//connexion à la base de données
			$oMysqliLib = new MySqliLib();
			//requête de suppression
			$sRequete = "
				DELETE FROM `ressources`
				WHERE idRessource = ".$this->idRessource."
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

		
		public function Rechercher_Ressource(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	$sRequete = "
		 		SELECT * 
		 		FROM `ressources`
		 		WHERE idRessource = ".$this->idRessource."
			";
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aRessource = $oMysqliLib->recupererTableau($oResult);
					 				
			//Si le groupe est trouvé
		 	if(count($aRessource) > 0){
		 		//affecter aux propriétés privées les valeurs lues dans la base de données
		 		$this->__construct($aRessource[0]['idressource'], $aRessource[0]['vchnomressource'], $aRessource[0]['txtdescripressource'], $aRessource[0]['urlmedia'], $aRessource[0]['idetape'], $aRessource[0]['idlien']);
		 		//retourner true
		 		return true;
		 	}
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnGroupe()
		 
		 public function Rechercher_Ressources(){
            //connexion à la base de données
            $oMysqliLib = new MySqliLib();
            //requête de recherche du groupe
            $sRequete = "SELECT * FROM ressources";             
            
            //exécuter la requête
            $oResult = $oMysqliLib->executer($sRequete); 
            //récupérer le tableau des enregistrements
            $aRessource = $oMysqliLib->recupererTableau($oResult);
            
            //retourner array contenant les etapes
            return $aRessource; 
         }//fin de la fonction Rechercher_Ressources()


         /**
		 * rechercher un groupe
		 * @return boolean true si le groupe est trouvé false sinon
		 */
		public function Rechercher_Ressource_IdEtape($idetape=1){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	$sRequete = "
		 		SELECT * 
		 		FROM `ressources`
		 		WHERE idetape = ".$idetape."
			";
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	//récupérer le tableau des enregistrements
		 	$aRessource = $oMysqliLib->recupererTableau($oResult);

		 	
		 	return $aRessource;	
		 }//fin de la fonction rechercherUnGroupe()

		 /**
		 * rechercher un groupe
		 * @return boolean true si le groupe est trouvé false sinon
		 */
		public function testextraire(){
		 	//connexion à la base de données
		 	$oMysqliLib = new MySqliLib();
		 	//requête de recherche du groupe
		 	$sRequete = "
		 		SELECT * 
		 		FROM `ressources`
		 		WHERE idRessource = ".$this->idRessource."
			";
		 	//exécuter la requête
		 	$oResult = $oMysqliLib->executer($sRequete); 
		 	var_dump($oResult);

		 	
		 	//retourner false
		 	return false;	
		 }//fin de la fonction rechercherUnGroupe()
		 
		 

		 	
	}//fin de la classe Groupe

 
 
 
 
 
 
 
 
 ?>