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
 * VueFormAdminSupprimer.class.php  
 * 
 */

class VueFormAdminSupprimer
{ 					

    public static function Supprimer_Document()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer un document</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreSupDoc">Titre du document à supprimer<span class="red"> *</span></label>  
				  <div class="col-md-7 marge7">
					  <select id="Document_liste" name="Iddocument" class="form-control" >
					  <?php 
							$aDocuments = Document::Rechercher_Documents();
							foreach ($aDocuments as $key => $value) {
							echo "<option value='".$value['iddocument']."'>".$value['vchnomdocument']."</option>";
							}
					  ?>
					  </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  </div>
				</div>
			</fieldset>
		</form>
		   
    <?php
    }//fin de la fonction Supprimer_Document
    
    
    public static function Supprimer_Etape()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer une etape</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreSupDoc">Nom de l'étape à supprimer<span class="red"> *</span></label>  
				  <div class="col-md-7 marge7">
					  <select id="Supprimer_liste" name="Idetape" class="form-control" >
					  <?php 
							$aEtapes = Etape::Rechercher_Etapes();
							foreach ($aEtapes as $key => $value) {
							echo "<option value='".$value['idetape']."'>".$value['vchnometape']."</option>";
							}
					  ?>
					  </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  </div>
				</div>
			</fieldset>
		</form>
	<?php
	}
	
	public static function Supprimer_Groupe()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer un groupe</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreSupDoc">Numéro du groupe à supprimer<span class="red"> *</span></label>  
				  <div class="col-md-7 marge7">
					  <select id="Groupe_liste" name="Idgroupe" class="form-control" >
					  	<?php 
							$aGroupes = Groupe::Rechercher_Groupes();
							foreach ($aGroupes as $key => $value) {
							echo "<option value='".$value['idgroupe']."'>".$value['vchnomgroupe']."</option>";
							}
					  	?>
					  </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  </div>
				</div>
			</fieldset>
		</form>
	<?php
	}
	
	public static function Supprimer_Lien()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer un lien</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreSupDoc">Nom du lien à supprimer<span class="red"> *</span></label>  
					 <div class="col-md-7 marge7">
						  <select id="Lien_liste" name="Idlien" class="form-control" >
							  <?php 
								$aLiens = Lien::Rechercher_Liens();
								foreach ($aLiens as $key => $value) {
								echo "<option value='".$value['idlien']."'>".$value['vchnomlien']."</option>";
								}
							  ?>
						  </select>
					 </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  </div>
				</div>
			</fieldset>
		</form>
	<?php
	}
	
	public static function Supprimer_Logiciel()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer un logiciel</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  	<label class="col-md-4 control-label" for="titreSupDoc">Nom du logiciel à supprimer<span class="red"> *</span></label>  
				 	<div class="col-md-7 marge7">
						  <select id="Logiciel_liste" name="Idlogiciel" class="form-control" >
							  <?php 
								$aLogiciels = Logiciel::Rechercher_Logiciels();
								foreach ($aLogiciels as $key => $value) {
								echo "<option value='".$value['idlogiciel']."'>".$value['vchnomlogiciel']."</option>";
								}
							  ?>
						  </select>
					</div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  </div>
				</div>
			</fieldset>
		</form>
	<?php
	}
	
	public static function Supprimer_Membre()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer un membre</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreSupDoc">Nom du membre à supprimer<span class="red"> *</span></label>  
				  <div class="col-md-7 marge7">
					  <select id="Membre_liste" name="Idmembre" class="form-control" >
						  <?php 
							$aMembres = Membre::Rechercher_Membres();
							foreach ($aMembres as $key => $value) {
							echo "<option value='".$value['idmembre']."'>".$value['vchnommembre']."</option>";
							}
						  ?>
					  </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  </div>
				</div>
			</fieldset>
		</form>
	<?php
	}
	
	public static function Supprimer_Programme()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer un programme</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  	<label class="col-md-4 control-label" for="titreSupDoc">Nom du programme à supprimer<span class="red"> *</span></label>  
					 <div class="col-md-7 marge7">
						  <select id="Programme_liste" name="Idprogramme" class="form-control" >
							  <?php 
								$aProgrammes = Programme::Rechercher_Programmes();
								foreach ($aProgrammes as $key => $value) {
								echo "<option value='".$value['idprogramme']."'>".$value['vchnomprogramme']."</option>";
								}
							  ?>
						  </select>
				  	</div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  </div>
				</div>
			</fieldset>
		</form>
	<?php
	}
	
	public static function Supprimer_Ressource()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer une ressource</legend>
				
				<!-- Text input-->
				<div class="form-group">
			 		 <label class="col-md-4 control-label" for="titreSupDoc">Nom de la ressource à supprimer<span class="red"> *</span></label>  
				 	 <div class="col-md-7 marge7">
						  <select id="ressource_liste" name="Idressource" class="form-control" >
							  <?php 
								$aRessources = Ressource::Rechercher_Ressources();
								foreach ($aRessources as $key => $value) {
								echo "<option value='".$value['idressource']."'>".$value['vchnomressource']."</option>";
								}
							  ?>
						  </select>
				  	</div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  </div>
				</div>
			</fieldset>
		</form>
	<?php
	}
	
	public static function Supprimer_Stage()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer un stage</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  	<label class="col-md-4 control-label" for="titreSupDoc">Nom du stage à supprimer<span class="red"> *</span></label>  
					<div class="col-md-7 marge7">
						  <select id="Stage_liste" name="Idstage" class="form-control" >
							  <?php 
								$aStages = Stage::Rechercher_Stages();
								foreach ($aStages as $key => $value) {
								echo "<option value='".$value['idstage']."'>".$value['txtdescripstage']."</option>";
								}
							  ?>
						  </select>
					  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
					  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
					  <div class="droiteBouton col-md-10">
				    		<button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  	  </div>
				</div>
			</fieldset>
		</form>
	<?php
	}
	
	public static function Supprimer_Texte()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer un texte</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreSupDoc">Titre du texte à supprimer<span class="red"> *</span></label>  
				  <div class="col-md-7 marge7">
					  <select id="Texte_liste" name="Idtexte" class="form-control" >
						  <?php 
								$aTextes = Texte::Rechercher_Textes();
								foreach ($aTextes as $key => $value) {
								echo "<option value='".$value['idtexte']."'>".$value['vchtitretexte']."</option>";
								}
						  ?>
					  </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  </div>
				</div>
			</fieldset>
		</form>
	<?php
	}
	
	public static function Supprimer_Utilisateur()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Supprimer un utilisateur</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  	<label class="col-md-4 control-label" for="titreSupDoc">Login du user à supprimer<span class="red"> *</span></label>  
					<div class="col-md-7 marge7">
						  <select id="Utilisateur_liste" name="IdUtilisateur" class="form-control" >
							  <?php 
									$aUtilisateur = Utilisateur::Rechercher_Utilisateurs();
									foreach ($aUtilisateur as $key => $value) {
									echo "<option value='".$value['iduser']."'>".$value['vchloginuser']."</option>";
									}
							  ?>
						  </select>
					 </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonSupDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonSupDoc" name="buttonSupDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-trash"></span></h5>&nbsp; Supprimer</button>
				  </div>
				</div>
			</fieldset>
		</form>	
	<?php
	}
}
?>





