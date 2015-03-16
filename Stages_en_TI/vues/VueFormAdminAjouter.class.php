<?php
 /**
 * 	Projet Web 2
 * 
 *	Refaire site de présentation des stages du college Maisonneuve
 *
 * @authors Steven Castelli, Jose Cortes, Francois Tremblay, David Julien
 * @version 1.1
 * @license Aucune
 * Professeur : Caroline Martin
 * Date de remise : 2015-03-15
 *
 * VueFormAdminAjouter.class.php  
 *
 */

class VueFormAdminAjouter
{ 					

    public static function Ajouter_Document($oDocument)
    {
     ?>   
		<form class="form-horizontal">
			<fieldset>
				<!-- Form Name -->
				<legend>Ajouter un document</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreAddDoc">Titre<span class="red"> *</span></label>  
				  <div class="col-md-6">
				 	 <input id="titreAddDoc" name="titreAddDoc" placeholder="" class="form-control input-md" type="text"> 
				  </div>
				</div>
				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreAddDoc">Contenu</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="contenuAddDoc" name="titreAddDoc"></textarea>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="echeancierAddDoc">Échéancier du document</label>  
				  <div class="col-md-6">
				  <input id="echeancierAddDoc" name="echeancierAddDoc" placeholder="" class="form-control input-md" type="text">  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="ponderationAddDoc">Pondération du document<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="ponderationAddDoc" name="ponderationAddDoc" placeholder="" class="form-control input-md" type="text">
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="typeAddDoc">Type</label>
				  <div class="col-md-6">
				    <select id="typeAddDoc" name="typeAddDoc" class="form-control">
				      <option value="1">Etudiant</option>
				      <option value="2">Employé</option>
				      <option value="3">Associé</option>
				      <option value="4">Groupe</option>
				      <option value="5">Utile</option>
				    </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="IdGroupeAddDoc">Id groupe</label>
				  <div class="col-md-6">
				     <select id="Groupe_liste" name="IdGroupeAddDoc" class="form-control" >
				       <option value="aucun">aucun</option>
					     <?php 
					      	$aGroupes = Groupe::Rechercher_Groupes();
							foreach ($aGroupes as $key => $value) {
							  echo "<option value='".$value['vchnomgroupe']."'>".$value['vchnomgroupe']."</option>";
							}
						 ?>
					 </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="IdLienAddDoc">Id Lien</label>
				  <div class="col-md-6">
				    <input type="text" list="Lienliste" id="Lien_liste" name="IdLienAddDoc" class="form-control" value="aucun">
				    <datalist id="Lienliste">
				      <?php 
						  $aLiens = Lien::Rechercher_Liens();
					      foreach ($aLiens as $key => $value) {
	        				echo "<option value='".$value['urllien']."'>".$value['vchnomlien']." (".$value['urllien'].")";	
	        			  }
	        		  ?>
	        		</datalist>
				    </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonAddDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="envoyer" name="buttonAddDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>
			</fieldset>
		</form>
	
    <?php
    }//fin de la fonction Ajouter_Document
    
    
    public static function Ajouter_Etape()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
		
				<!-- Form Name -->
				<legend>Ajouter une étape</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomAddEtape">Nom de l'etape<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="nomAddEtape" name="nomAddEtape" type="text" placeholder="" class="form-control input-md">
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="numAddEtape">Numéro de l'etape<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="numAddEtape" name="numAddEtape" class="form-control">
				      <option value="0">0</option>
				      <option value="1">1</option>
				      <option value="2">2</option>
				      <option value="3">3</option>
				      <option value="4">4</option>
				    </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="ordreAddEtape">Ordre</label>
				  <div class="col-md-6">
				    <select id="ordreAddEtape" name="ordreAddEtape" class="form-control">
				      <option value="1">1</option>
				      <option value="2">2</option>
				      <option value="3">3</option>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonAddEtape"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="envoyer" name="buttonAddEtape" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>
			</fieldset>
		</form>
	<?php
	}//fin de la fonction Ajouter_Etape
	
	public static function Ajouter_Groupe()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Ajouter un groupe</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomAddGroupe">Nom du groupe<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  	<input id="nomAddGroupe" name="nomAddGroupe" type="text" placeholder="" class="form-control input-md">		
				  </div>
				</div>
				
				<!-- Select Multiple -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idProgrammeAddGroupe">Id Programme</label>
				  <div class="col-md-6">
				    <select id="idProgrammeAddGroupe" name="idProgrammeAddGroupe" class="form-control">
				    	<?php 
						  $aProgrammes = Programme::Rechercher_Programmes();
					      foreach ($aProgrammes as $key => $value) {
	        				echo "<option value='".$value['idprogramme']."'>".$value['vchnomprogramme']." (".$value['vchnoprogramme'].")";	
	        			  }
	        		  ?>
				    </select>
				  </div>
				</div>
				
				<!-- Select Multiple -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idMembreAddGroupe">Id Membre</label>
				  <div class="col-md-6">
				    <select id="idMembreAddGroupe" name="idMembreAddGroupe" class="form-control">
				      <?php 
						  $aMembres = Membre::Rechercher_Membres();
					      foreach ($aMembres as $key => $value) {
	        				echo "<option value='".$value['vchnommembre']."'>".$value['vchprenommembre']." ".$value['vchnommembre'];	
	        			  }
	        		  ?>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonAddGroupe"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="envoyer" name="buttonAddGroupe" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>			
			</fieldset>
		</form>
	<?php
	}//fin de la fonction Ajouter_Lien
	
	public static function Ajouter_Lien()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Ajouter un lien</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomAddLien">Nom du lien<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="nomAddLien" name="nomAddLien" type="text" placeholder="" class="form-control input-md">
				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomAddUrl">Url<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="nomAddUrl" name="nomAddUrl" type="text" placeholder="" class="form-control input-md">
				    
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonAddLien"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="envoyer" name="buttonAddLien" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>		
			</fieldset>
		</form>

	<?php
	}//fin de la fonction Ajouter_Lien
	
	public static function Ajouter_Logiciel()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>

				<!-- Form Name -->
				<legend>Ajouter un logiciel</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomAddLogiciel">Nom du logiciel<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="nomAddLogiciel" name="nomAddLogiciel" type="text" placeholder="***** Ce Logiciel existe deja *****" class="form-control input-md">
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="categorieAddLogiciel">Catégorie<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="categorieAddLogiciel" name="categorieAddLogiciel" class="form-control">
				      <option value="1">Bureautique</option>
				      <option value="2">Programmation</option>
				      <option value="3">Création</option>
				      <option value="4">Vidéo/Son</option>
				      <option value="5">Web</option>
				      <option value="6">Base de données</option>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonAddLogiciel"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="envoyer" name="buttonAddLogiciel" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>
			</fieldset>
		</form>

	<?php
	}//fin de la fonction Ajouter_Logiciel
	
	public static function Ajouter_Membre()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Ajouter un membre</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomAddMembre">Nom<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="nomAddMembre" name="nomAddMembre" type="text" placeholder="" class="form-control input-md">	    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="prenomAddMembre">Prenom<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="prenomAddMembre" name="prenomAddMembre" type="text" placeholder="" class="form-control input-md">		    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreAddMembre">Titre<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="titreAddMembre" name="titreAddMembre" type="text" placeholder="" class="form-control input-md">    
				  </div>
				</div>
				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="descriptionAddMembre">Description</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="descriptionAddMembre" name="descriptionAddMembre">Ajouter une description du membre</textarea>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="urlAddMembre">Url photo<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="urlAddMembre" name="urlAddMembre" type="text" placeholder="" class="form-control input-md">   
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="courrielAddMembre">Courriel<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="courrielAddMembre" name="courrielAddMembre" type="text" placeholder="exemple@exemple.com" class="form-control input-md">  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="telAddMembre">Téléphone<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="telAddMembre" name="telAddMembre" type="text" placeholder="" class="form-control input-md"> 
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonAddMembre"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="envoyer" name="buttonAddMembre" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>
			</fieldset>
		</form>


	<?php
	}//fin de la fonction Ajouter_Membre
	
	public static function Ajouter_Programme()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Ajouter un programme</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomAddProgramme">Nom du programme<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  	<input id="nomAddProgramme" name="nomAddProgramme" type="text" placeholder="" class="form-control input-md">			
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="numeroAddProgramme">Numéro du programme<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  	<input id="numeroAddProgramme" name="numeroAddProgramme" type="text" placeholder="" class="form-control input-md">		    
				  </div>
				</div>
				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="descriptionAddProgramme">description du programme</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="descriptionAddProgramme" name="descriptionAddProgramme"></textarea>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="dateAddProgramme">Fin du programme</label>  
				  <div class="col-md-6">
				  <input id="dateAddProgramme" name="dateAddProgramme" type="text" placeholder="Date de la fin du programme" class="form-control input-md">
				  </div>
				</div>
				
				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="enumAddProgramme">Formation</label>
				  <div class="col-md-4"> 
				    <label class="radio-inline" for="enumAddProgramme-0">
				      <input class="sansStyle"  type="radio" name="enumAddProgramme" id="enumAddProgramme-0" value="1" checked="checked">
				      FC
				    </label> 
				    <label class="radio-inline" for="enumAddProgramme-1">
				      <input  class="sansStyle" type="radio" name="enumAddProgramme" id="enumAddProgramme-1" value="2">
				      Rég
				    </label> 
				    <label class="radio-inline sansStyle" for="enumAddProgramme-2">
				      <input type="radio" name="enumAddProgramme" id="enumAddProgramme-2" value="3">
				      FC/Rég
				    </label>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="domaineAddProgramme">Domaine<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="domaineAddProgramme" name="domaineAddProgramme" class="form-control">
				      <option value="1">Multimédia/Web</option>
				      <option value="2">Informatique</option>
				      <option value="3">TGE</option>
				      <option value="4">Bureautique</option>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="control-group">
				  <label class="control-label" for="buttonAddProgramme"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="envoyer" name="buttonAddProgramme" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>
			</fieldset>
		</form>

	<?php
	}//fin de la fonction Ajouter_Programme
	
	public static function Ajouter_Ressource()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
		
				<!-- Form Name -->
				<legend>Ajouter une ressource</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomAddRessource">Nom de la ressource<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  	<input id="nomAddRessource" name="nomAddRessource" type="text" placeholder="/****Cette ressource existe deja*/" class="form-control input-md">
				  </div>
				</div>
				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="descriptionAddRessource">Description</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="descriptionAddRessource" name="descriptionAddRessource"></textarea>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="urlAddRessource">Url du media</label>  
				  <div class="col-md-6">
				 	 <input id="urlAddRessource" name="urlAddRessource" type="text" placeholder="" class="form-control input-md">
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idEtapeAddRessource">Id de l'étape<span class="red"> *</span></label>
				  <div class="col-md-6">
				   <select id="idMembreAddGroupe" name="idMembreAddGroupe" class="form-control">
				      <?php 
						  $aEtapes = Etape::Rechercher_Etapes();
					      foreach ($aEtapes as $key => $value) {
	        				echo "<option value='".$value['idetape']."'>".$value['vchnometape'];	
	        			  }
	        		  ?>
				    </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idLienAddRessource">Id du lien</label>
				  <div class="col-md-6">
				    <input type="text" list="Lienliste" id="Lien_liste" name="IdLienAddDoc" class="form-control" value="aucun">
				    <datalist id="Lienliste">
				      <?php 
						  $aLiens = Lien::Rechercher_Liens();
					      foreach ($aLiens as $key => $value) {
	        				echo "<option value='".$value['urllien']."'>".$value['vchnomlien']." (".$value['urllien'].")";	
	        			  }
	        		  ?>
	        		</datalist>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonAddRessource"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="envoyer" name="buttonAddRessource" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>
			</fieldset>
		</form>

	<?php
	}//fin de la fonction Ajouter_Stage
	
	public static function Ajouter_Stage()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				<!-- Form Name -->
				<legend>Ajouter un stage</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="descriptionAddStage">Description du stage<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="descriptionAddStage" name="descriptionAddStage" type="text" placeholder="" class="form-control input-md">				    
				  </div>
				</div>
				
				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="remunererAddStage">Stage rémunéré<span class="red"> *</span></label>
				  <div class="col-md-4"> 
				    <label class="radio-inline" for="remunererAddStage-0">
				      <input class="sansStyle" type="radio" name="remunererAddStage" id="remunererAddStage-0" value="1" checked="checked">
				      oui
				    </label> 
				    <label class="radio-inline" for="remunererAddStage-1">
				      <input class="sansStyle" type="radio" name="remunererAddStage" id="remunererAddStage-1" value="2">
				      non
				    </label>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="dateDebutAddStage">Date de début de stage</label>  
				  <div class="col-md-6">
				 	 <input id="dateDebutAddStage" name="dateDebutAddStage" type="date" placeholder="aaaa-mm-jj" class="form-control input-md">				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="dateFinAddStage">Date de la fin du stage</label>  
				  <div class="col-md-6">
				  	<input id="dateFinAddStage" name="dateFinAddStage" type="date" placeholder="aaaa-mm-jj" class="form-control input-md">			    
				  </div>
				</div>
				
				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="dureeAddStage">Durée du stage</label>
				  <div class="col-md-4"> 
				    <label class="radio-inline" for="dureeAddStage-0">
				      <input class="sansStyle" type="number" name="dureeAddStage" id="dureeAddStage-0" value="1">
				    </label> 
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idGroupeAddStage">Id du Groupe<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="Groupe_liste" name="IdGroupeAddDoc" class="form-control" >
				       <option value="aucun">aucun</option>
					     <?php 
					      	$aGroupes = Groupe::Rechercher_Groupes();
							foreach ($aGroupes as $key => $value) {
							  echo "<option value='".$value['vchnomgroupe']."'>".$value['vchnomgroupe']."</option>";
							}
						 ?>
					 </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idLienAddStage">Id du lien</label>
				  <div class="col-md-6">
				    <input type="text" list="Lienliste" id="Lien_liste" name="IdLienAddDoc" class="form-control" value="aucun">
				    <datalist id="Lienliste">
				      <?php 
						  $aLiens = Lien::Rechercher_Liens();
					      foreach ($aLiens as $key => $value) {
	        				echo "<option value='".$value['urllien']."'>".$value['vchnomlien']." (".$value['urllien'].")";	
	        			  }
	        		  ?>
	        		</datalist>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonAddStage"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="envoyer" name="buttonAddStage" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>
			</fieldset>
		</form>

	<?php
	}//fin de la fonction Ajouter_Stage
	
	public static function Ajouter_Texte()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>				
				<!-- Form Name -->
				<legend>Ajouter un texte</legend>
				
				<!-- Text input-->
				<div class="form-group ">
				  <label class="col-md-4 control-label" for="titreAddTexte">Titre<span class="red"> *</span></label>  
				  <div class="col-md-6">
				 	 <input id="titreAddTexte" name="titreAddTexte" placeholder="" class="form-control input-md" type="text">			    
				  </div>
				</div>
				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="contenuAddTexte">Contenu<span class="red"> *</span></label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="contenuAddTexte" name="contenuAddTexte"></textarea>
				  </div>
				</div>
				
				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="typeAddTexte">Type de texte</label>
				  <div class="col-md-4"> 
				    <label class="radio-inline" for="typeAddTexte-0">
				      <input class="sansStyle" name="typeAddTexte" id="typeAddTexte-0" value="1" checked="checked" type="radio">
				      groupe
				    </label> 
				    <label class="radio-inline" for="typeAddTexte-1">
				      <input class="sansStyle" name="typeAddTexte" id="typeAddTexte-1" value="2" type="radio">
				      utile
				    </label>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="IdGroupeAddTexte">Id groupe</label>
				  <div class="col-md-6">
				    <select id="Groupe_liste" name="IdGroupeAddDoc" class="form-control" >
				       <option value="aucun">aucun</option>
					     <?php 
					      	$aGroupes = Groupe::Rechercher_Groupes();
							foreach ($aGroupes as $key => $value) {
							  echo "<option value='".$value['vchnomgroupe']."'>".$value['vchnomgroupe']."</option>";
							}
						 ?>
					 </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonAddTexte"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="envoyer" name="buttonAddTexte" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>
			</fieldset>
		</form>

	<?php
	}//fin de la fonction Ajouter_Texte
	
	public static function Ajouter_Utilisateur()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				<!-- Form Name -->
				<legend>Ajouter un utilisateur</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="loginAddUser">Identifiant de l'utilisateur<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  	<input id="loginAddUser" name="loginAddUser" placeholder="si le username existe... la bd ne s'update pas et un message apparait pour choisir autre username" class="form-control input-md" type="text">
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="passwordAddUser">Mot de Passe<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  	<input id="passwordAddUser" name="passwordAddUser" placeholder="" class="form-control input-md" type="text">
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="IdGroupeAddUser">Id groupe<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="Groupe_liste" name="IdGroupeAddDoc" class="form-control" >
				       <option value="aucun">aucun</option>
					     <?php 
					      	$aGroupes = Groupe::Rechercher_Groupes();
							foreach ($aGroupes as $key => $value) {
							  echo "<option value='".$value['vchnomgroupe']."'>".$value['vchnomgroupe']."</option>";
							}
						 ?>
					 </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonAddUser"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="envoyer " name="buttonAddUser" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-plus"></span></h5> Ajouter</button>
				  </div>
				</div>
			</fieldset>
		</form>

	<?php
	}//fin de la fonction Ajouter_User
}
?>





