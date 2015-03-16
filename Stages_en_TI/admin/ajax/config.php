<?php
/**
 * 	Projet Web 2
 * 
 *	Refaire site de présentation des stages du college Maisonneuve
 *
 *  CONFIG.PHP 
 * 
 *  Fichier de configuration. Il est appelé par index.php et par test/index.php
 * 	Il contient notamment l'autoloader
 * 
 * @authors Steven Castelli, Jose Cortes, Francois Tremblay, David Julien
 * @version 1.0
 * @license Aucune
 * Professeur : Caroline Martin
 * Date de remise : 2015-03-15
 * 
 */	
	
	function mon_autoloader($class) 
	{
		$dossierClasse = array('../modeles/', '../vues/', '../lib/', '../lib/mysql/', '' );	// Ajouter les dossiers au besoin
		
		foreach ($dossierClasse as $dossier) 
		{
			//var_dump('./'.$dossier.$class.'.class.php');
			if(file_exists('../'.$dossier.$class.'.class.php'))
			{
				require_once('../'.$dossier.$class.'.class.php');
			}
		}
		
	  
	}
	
	spl_autoload_register('mon_autoloader');
	

?>