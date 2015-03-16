<?php
/**
 * 	TP2 Les maires de Québec
 * 
 *	Application qui donne la liste des maires des villes du Québec et 
 * 	permet de faire des recherches dans cette liste.
 *
 *  MAIRES.CLASS.PHP 
 * 
 *  Class LOGIN
 *  
 * 
 * @author Steven Castelli
 * @version 1.0
 * @update 2014-10-23
 * @license Aucune
 * @reference Inspiré par exemple donné en classe par Jonathan MArtel
 * 
 */

	/*************/
	/** WEBDEV **/
	/************/
	 /*
	define('DB_HOST', 'localhost');
	define('DB_PASS', '830521');//mot de passe
	define('DB_USER', 'e1495127');//mon numero dusager webdev
	define('DB_NAME', 'e1495127');*/
	


	/*************/
	/** LOCAL **/
	/************/
	 
	define('DB_HOST', 'localhost');
	define('DB_PASS', '811201');//mot de passe
	define('DB_USER', 'e0163173');//mon numero dusager webdev
	define('DB_NAME', 'e0163173');

class Login {

	private $db;


    
	function __construct ()
	{
		// Connection à la base de données
		$this->db = new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME);
		$this->db->set_charset('UTF8');
		if ($this->db->connect_error) 
		{
			die('Connect Error (' . $this->db->connect_errno . ') '
            . $this->db->connect_error);
		}
	}

	
	/**
	 * Va chercher le mot de passe crypté dans base de donnée
	 * @access public
	 * @return Array
	 */	
	public function MotDePasse($loginUser)
	{
		
			/*$resultat[] = "";
			$xxx = "";
			$motpassemd5['vchpwduser']= "";

		echo "<br>=======================<br>";
	
		$mrResultat = $this->db->query("SELECT vchpwduser from users WHERE vchloginuser = '" .$loginUser. "'");
		var_dump($mrResultat);
		echo "<br>=======================<br>";*/

		if($mrResultat = $this->db->query("SELECT vchpwduser from users WHERE vchloginuser = '" .$loginUser. "'"))
		{
			while($db_md5 = $mrResultat->fetch_assoc())
			{
				$resultat[] = $db_md5;
				//echo "<br>=======================<br>";
			}

			
		}
		//echo "<br>=======================<br>";
		foreach ($resultat as $motpassemd5)
		{
		  		
		  		$xxx = $motpassemd5['vchpwduser'] ;
		  		//echo "<br>=======================<br>";
		}
		

		
	return $xxx;
	}

}