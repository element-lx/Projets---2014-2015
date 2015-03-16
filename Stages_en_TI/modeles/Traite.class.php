<?php

	/**
	 * classe Presente 
	 * @version 2015-02-05
	 */
    class Etape {
    	
		private $idProgramme;
		private $idLogiciel;
       
       
       
		
		/* Mutateurs */
		/***********************************************************************************/
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idProgramme
		 */
		public function setIdProgramme($idProgramme){
			TypeException::estNumerique($idProgramme);
			
			$this->idProgramme = $idProgramme;
		}//fin de la fonction setIdTexte()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param integer $idLogiciel
		 */
		public function setIdLogiciel($idLogiciel){
			TypeException::estNumerique($idLogiciel);
			
			$this->idLogiciel = $idLogiciel;
		}//fin de la fonction setIdLogiciel()
		
		
		
			
		/* Accesseurs */
		/***********************************************************************************/
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdProgramme(){
			return $this->idProgramme;
		}//fin de la fonction getIdPresente()
		
		/**
		 * retourne la valeur de la propriété privée
		 * @return integer 
		 */
		public function getIdLogiciel(){
			return $this->idLogiciel;
		}//fin de la fonction getIdPresente()
		
		
        
       
		
		/* Constructeur */
		/***********************************************************************************/
		
		public function __construct($idProgramme=1, $idLogiciel=1){
			$this->setIdProgramme($idProgramme);
			$this->setIdLogiciel($idLogiciel);
			}
		
		
		/* Manipulation des données sur la base de données */
		/***********************************************************************************/
		/**
         * ajoute un goupeTraiteEtape dans la base de données
         * @return boolean
         */
        public function Ajouter_Traite(){
            //connexion à la base de données
            $oMysqliLib = new MySqliLib();
            //requête d'ajout
            //ajouter enumTraite si besoin dans la requete
            $sRequete = "
                INSERT INTO `traite`(`idprogramme`, `idlogiciel`) 
                VALUES (".$this->idProgramme.",
                        ".$this->idLogiciel.")";
            //exécuter la requête
            $bResult = $oMysqliLib->executer($sRequete);
            //retourner la valeur booléenne
            return $oMysqliLib->getMySqli()->insert_id;
        }//fin de la fonction ajouterUnPresente()
        
        /**
         * supprime un goupeTraiteEtape dans la base de données
         * @return int  Nombre de lignes afffecter par l'operation
         */ 
        public function Supprimer_Traite($typeId=""){
            //connexion à la base de données
            $oMysqliLib = new MySqliLib();
            if($typeId=='programmes'||$typeId=='logiciels'){
                $typeId=='logiciels'?$sRequete = "DELETE FROM `traite` WHERE idprogramme = ".$this->idProgramme: $sRequete = "DELETE FROM `traite` WHERE idlogiciel = ".$this->idLogiciel;   
            }
            else {
                TypeException::programmeOulogiciel($typeId);
            }
            //exécuter la requête
            $bResult = $oMysqliLib->executer($sRequete);
            //retourner la valeur booléenne
            return $oMysqliLib->getMySqli()->affected_rows;
        }//fin de la fonction supprimerUnPresente()
        
        /**
         * supprime un goupeTraiteEtape dans la base de données
         * @return int  Nombre de lignes afffecter par l'operation
         */ 
        public function Supprimer_Traites(){
            //connexion à la base de données
            $oMysqliLib = new MySqliLib();
            
            $sRequete = "DELETE FROM `traite`";
            
            //exécuter la requête
            $bResult = $oMysqliLib->executer($sRequete);
            //retourner la valeur booléenne
            return $oMysqliLib->getMySqli()->affected_rows;
        }//fin de la fonction supprimerUnPresente()
        
        
        /**
         * rechercher un Traite
         * @param $sNomPresente Nom de l'Traite a rechercher
         * @return boolean true si le Presente est trouvé false sinon
         */
         public function Rechercher_Traite($typeId=""){ //peut recevoir comme valeur 'programmes' ou 'logiciels'
            //connexion à la base de données
            $oMysqliLib = new MySqliLib();
            //requête de recherche du Presente
            if($typeId=='programmes'||$typeId=='logiciels'){
                $typeId=='logiciels'?$sRequete = "SELECT * FROM `traite` WHERE idprogramme = ".$this->idProgramme: $sRequete = "SELECT * FROM `traite` WHERE idlogiciel = ".$this->idLogiciel;   
            }
            else {
                TypeException::programmeOulogiciel($typeId);
            }       
            
            //exécuter la requête
            $oResult = $oMysqliLib->executer($sRequete); 
            //récupérer le tableau des enregistrements
            $oTraite = $oMysqliLib->recupererTableau($oResult);

            
            //Si le Presente est trouvé
            if(count($oTraite) > 0){
                //affecter aux propriétés privées les valeurs lues dans la base de données
                $this->__construct($oTraite[0]['idprogramme'], $oTraite[0]['idlogiciel']);
                //retourner true
                return true;
            }
            //retourner false
            return false;   
         }//fin de la fonction rechercherUnPresente()
         
        /**
         * rechercher toute les Traites
         * @param $sNomPresente Nom du Traites a rechercher
         * @return array contenant les Traites
         */
         public static function Rechercher_Traites(){
            //connexion à la base de données
            $oMysqliLib = new MySqliLib();
            //requête de recherche du Presente
            $sRequete = "SELECT * From `traite`";             
            
            //exécuter la requête
            $oResult = $oMysqliLib->executer($sRequete); 
            //récupérer le tableau des enregistrements
            $aTraite = $oMysqliLib->recupererTableau($oResult);
            
            //retourner array contenant les traites
            return $aTraite;  
         }//fin de la fonction rechercherToutTraite()
         
    }//fin de la classe Traite
?>