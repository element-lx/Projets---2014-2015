<?php
session_start();
	/***************************************************/
    /** Fichier de configuration, contient l'autoloader **/
    /***************************************************/
   require_once("config.php");
	
   /* Inclure les classes librairie */
	//require '../lib/MySqliLib.class.php';
	//require '../lib/TypeException.class.php';
	
   /* Inclure les classes Modèles */
  // require '../modeles/Groupe.class.php';
   

   /* Inclure les classes Vues */
   //require '../vues/VueGroupe.class.php';
   //require '../vues/VueGabarit.class.php';

   
   /* Inclure le contrôleur */
   require 'Controleur.class.php';
   
   require 'gabarit.php'; 
?>