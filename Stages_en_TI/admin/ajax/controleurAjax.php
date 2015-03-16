<?php
	require './config.php';
	//$_GET['id']=2;
	if(isset($_GET['requeteForm'])&&$_GET['requeteForm']!="undefined_undefined"){
		$operations = explode("_",$_GET['requeteForm']);
		eval('$oObjet = new '.$operations[1]."();");
		
		if(isset($_GET['id'])){	//si je recois un id je construit mon objet avec 
			eval('$oObjet = new '.$operations[1]."(".$_GET['id'].");");
			eval('$oObjet->Rechercher_'.$operations[1].'();');
		}else{
			eval('$oObjet = new '.$operations[1]."();");
		}
		eval("VueFormAdmin".$operations[0]."::".$_GET['requeteForm'].'($oObjet);');
			
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//echo "VueFormAdmin".$operations[0]."::".$_GET['requeteForm'].'($oObjet)';
			//var_dump($oObjet);
	
	/* if(isset($_GET['choix'])&&$_GET['idChoix']!="undefined"){
		eval('$oObjet = new '.$operations[1]."();");
		eval("VueFormAdmin".$operations[0]."::".$_GET['requeteForm'].'($oObjet);');
	}*/
	 
	 
	 
	 
	 
	 
	 /*if(isset($_GET['typeListe'])&&$_GET['typeListe']!="undefined"){
		eval('$res = '.$_GET['typeListe']."::Rechercher_".$_GET['typeListe'].'s("'.$_GET['motsIncomplet'].'");');
		
        foreach ($res as $key => $value) {
        	echo "<option value='".$value['id'.strtolower($_GET['typeListe'])]."'>".$value['vchnom'.strtolower($_GET['typeListe'])]." (".$value['urllien'].")</option>";	
        }      
	}
	
	//http://e0163173.webdev.cmaisonneuve.qc.ca/groupes_1.1/admin//ajax/controleurAjax.php?typeListe=Lien&motsIncomplet=ht
	/*if(isset($_POST['nomForm'])){
		var_dump($_POST);
		$nomForms = explode("_",$_POST['nomForms']);
		
		$oClass = eval(" = new ".$nomForms[1]."();");
		
		$oClass->eval($nomForms[0]."();");
	}*/ 
	

       
?>