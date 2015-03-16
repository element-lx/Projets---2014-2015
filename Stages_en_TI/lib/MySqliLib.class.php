<?php

	/**
	 * classe MySqliLib 
	 * 582-P41-MA Programmation Web Dynamique 3
	 * @author Caroline Martin
	 * @version 2015-01-29
	 */
    class MySqliLib {
    	
		/* Constantes */
		const ERR_CONNEXION ="Une erreur de connexion est survenue.";
		const ERR_REQUETE = "Une erreur de requête est survenue.";
		
		const AFFICHAGE_ERREUR = true;//true affichage, false pas d'affichage
		
		const ENS_DE_CARAC = "utf8";
		
		const HOTE = "localhost";
		const USER = "e0163173";
		const PWD = "811201";
		const BDD = "e0163173";
		 
    	/* Propriétés privées */
    	private $sHote;
		private $sUser;
		private $sPwd;
		private $sBdd;
		private $oMySqli;
		
		/* accesseurs */
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sHote
		 */
		public function setHote($sHote){
			TypeException::estVide($sHote);
			
			$this->sHote = $sHote;
		}//fin de la fonction setHote()
		/**
		 * récupère la valeur de la propriété privée
		 * @return string
		 */
		public function getHote(){
			return $this->sHote;
		}//fin de la fonction getHote()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sUser
		 */
		public function setUser($sUser){
			TypeException::estVide($sUser);
			
			$this->sUser = $sUser;
		}//fin de la fonction setUser()
		/**
		 * récupère la valeur de la propriété privée
		 * @return string
		 */
		public function getUser(){
			return $this->sUser;
		}//fin de la fonction getUser()
		
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sPwd
		 */
		public function setPwd($sPwd){
			$this->sPwd = $sPwd;
		}//fin de la fonction setPwd()
		/**
		 * récupère la valeur de la propriété privée
		 * @return string
		 */
		public function getPwd(){
			return $this->sPwd;
		}//fin de la fonction getPwd()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param string $sBdd
		 */
		public function setBdd($sBdd){
			TypeException::estVide($sBdd);
			
			$this->sBdd = $sBdd;
		}//fin de la fonction setBdd()
		/**
		 * récupère la valeur de la propriété privée
		 * @return string
		 */
		public function getBdd(){
			return $this->sBdd;
		}//fin de la fonction getBdd()
		
		/**
		 * affecte une valeur à la propriété privée
		 * @param mysqli $oMySqli
		 */
		public function setMySqli(mysqli $oMySqli){
			$this->oMySqli = $oMySqli;
		}//fin de la fonction setMySqli()
		/**
		 * récupère la valeur de la propriété privée
		 * @return mysqli
		 */
		public function getMySqli(){
			return $this->oMySqli;
		}//fin de la fonction getMySqli()
		
		/**
		 * connexion à la base de données
		 * @param string $sHote
		 * @param string $sUser
		 * @param string $sPwd
		 * @param string $sBdd
		 */
		public function __construct($sHote = MySqliLib::HOTE, $sUser=MySqliLib::USER, 
									$sPwd=MySqliLib::PWD, $sBdd=MySqliLib::BDD){
			$this->setHote($sHote);
			$this->setUser($sUser);
			$this->setPwd($sPwd);
			$this->setBdd($sBdd);
			
			$this->oMySqli = new mysqli($sHote, $sUser, $sPwd, $sBdd);
			if($this->oMySqli->connect_error){
				throw new Exception(MySqliLib::ERR_CONNEXION." ".$this->oMySqli->connect_error);				
			}
			$this->oMySqli->set_charset(MySqliLib::ENS_DE_CARAC);
			
		}//fin de la fonction __construct()
		
		/**
		 * exécuter une requête SQL 
		 * @param string $sRequete
		 * @return mixed 
		 * dans le cas des INSERT/UPDATE/DELETE true si l'exécution s'est bien déroulée
		 * dans le cas du SELECT un objet mysqli_result si l'exécution s'est bien déroulée
		 * false si l'exécution s'est mal déroulée 
		 */
		public function executer($sRequete){
			TypeException::estVide($sRequete);
			
			$mResult = $this->oMySqli->query($sRequete);
			if($mResult == FALSE){
				$sCh = "";
				if(MySqliLib::AFFICHAGE_ERREUR == TRUE){
					$sCh = " ". $sRequete ." ". $this->oMySqli->error;
				}
				throw new Exception(MySqliLib::ERR_REQUETE.$sCh);
				
			}
			return $mResult;
		}//fin de la fonction executer()
		
		/**
		 * récupérer dans un tableau à deux dimensions (la 1ere est numérique : ce sont les enregistrements, 
		 * la 2e est associative : ce sont les champs) le résultat de la requête ($oResult)
		 * @param mysqli_result $oResult
		 * @return array 
		 */
		public function recupererTableau(mysqli_result $oResult){
			$iEnreg = -1;
			$aEnreg = array();
			
			do{
				$iEnreg++;
				$aEnreg[$iEnreg] = $oResult->fetch_assoc();
			}while($aEnreg[$iEnreg]  != null);
			
			unset($aEnreg[$iEnreg]);
			return $aEnreg;
		}//fin de la fonction recupererTableau()
		
    }//fin de la classe MySqliLib
?>