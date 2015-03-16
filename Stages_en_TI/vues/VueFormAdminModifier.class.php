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
 * VueFormAdminModifier.class.php  
 * 
 */

class VueFormAdminModifier
{ 					

    public static function Modifier_Document($oDocument)
    {
     ?>   
		<form class="form-horizontal">
			<fieldset>
				<!-- Form Name -->
				<legend>Modifier un document</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreModDoc">Veuillez choisir le titre du document à modifier<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  
				  <?php if($oDocument->getIdDocument()==0){ ?>
				    <select id="Document_liste" name="vchnomdocument" class="form-control" data-operation="Rechercher">					     
				    	<?php 
					      	$aDocuments = Document::Rechercher_Documents();
							foreach ($aDocuments as $key => $value) {
							  echo "<option value='".$value['iddocument']."'>".$value['vchnomdocument']."</option>";
							}
						 ?>
					</select>
				  <?php }else{ ?>
				  	<input type="hidden"  name="iddocument" class="form-control" value="<?php echo $oDocument->getIdDocument(); ?>">
				  	<input type="text" id="Document_liste" name="vchnomdocument" class="form-control" value="<?php echo $oDocument->getNomDocument(); ?>">
				  <?php } ?>
				  
				  </div>
				</div>
			<?php if($oDocument->getIdDocument()!=0){ //si aucun document n'est choisi alors le reste du formulaire n'apparait pas?>
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreModDoc">Contenu</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="titreModDoc" name="titreModDoc"><?php echo $oDocument->getTxtDescripDocument(); ?></textarea>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="echeancierModDoc">Échéancier du document</label>  
				  <div class="col-md-6">
				  <input id="echeancierModDoc" name="echeancierModDoc" placeholder="" class="form-control input-md" type="text" value="<?php echo $oDocument->getEcheancierDocument(); ?>">  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="ponderationModDoc">Pondération du document<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="ponderationModDoc" name="ponderationModDoc" placeholder="" class="form-control input-md" type="text" value="<?php echo $oDocument->getPonderationDocument(); ?>">
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="typeModDoc">Type</label>
				  <div class="col-md-6">
				    <select id="typeModDoc" name="typeModDoc" class="form-control">
				   	  <option value='<?php echo $oDocument->getEnumTypeDocument()?>'><?php echo $oDocument->getEnumTypeDocument(); ?></option>
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
				  <label class="col-md-4 control-label" for="IdGroupeModDoc">Id groupe</label>
				  <div class="col-md-6">
				    <select id="IdGroupeModDoc" name="IdGroupeModDoc" class="form-control" >
				       <option value='<?php echo $oDocument->getIdGroupe()?>'><?php echo Groupe::Rechercher_Groupes($oDocument->getIdGroupe())[0]['vchnomgroupe']; ?></option>
				       <?php 
					      	$aGroupes = Groupe::Rechercher_Groupes();
							foreach ($aGroupes as $key => $value) {
							  echo "<option value='".$value['idgroupe']."'>".$value['vchnomgroupe']."</option>";
							}
						 ?>
				    </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="IdLienModDoc">Id Lien</label>
				  <div class="col-md-6">
				    <select id="IdLienModDoc" name="IdLienModDoc" class="form-control">
				      <option value='<?php echo $oDocument->getIdLien()?>'><?php echo Lien::Rechercher_Liens($oDocument->getIdLien())[0]['vchnomlien']."  ".Lien::Rechercher_Liens($oDocument->getIdLien())[0]['urllien'] ; ?></option>
				      <?php 
					      	$aLiens = Lien::Rechercher_Liens();
							foreach ($aLiens as $key => $value) {
							  echo "<option value='".$value['idlien']."'>".$value['vchnomlien']."(".$value['urllien'].")</option>";
							}
					  ?>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonModDoc"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="buttonModDoc" name="buttonModDoc" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>
			<?php } ?>
			</fieldset>
		</form>
		
		<script>afficherChoix('Document');</script>

    <?php
    }//fin de la fonction Modifier_Document
    
    
    public static function Modifier_Etape($oEtape)
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
		
				<!-- Form Name -->
				<legend>Modifier une étape</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomModEtape">Veuillez cliquer sur le nom de l'étape à modifier<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  
					  <?php if($oEtape->getIdEtape()==0){ ?>
					    <select id="Etape_liste" name="vchnometape" class="form-control" data-operation="Rechercher">				     
					    	<?php 
						      	$aEtapes = Etape::Rechercher_Etapes();
								foreach ($aEtapes as $key => $value) {
								  echo "<option value='".$value['idetape']."'>".$value['vchnometape']."</option>";
								}
							 ?>
						</select>
					  <?php }else{ ?>
					  	<input type="hidden"  name="idetape" class="form-control" value="<?php echo $oEtape->getIdEtape(); ?>">
					  	<input type="text" id="Etape_liste" name="vchnometape" class="form-control" value="<?php echo $oEtape->getNomEtape(); ?>">
					  <?php } ?>
				  
				  </div>
				</div>
			<?php if($oEtape->getIdEtape()!=0){ //si aucun etape n'est choisi alors le reste du formulaire n'apparait pas?>
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="numModEtape">Numéro de l'etape<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="numModEtape" name="numModEtape" class="form-control">
				        <option value="<?php echo $oEtape->getEnumEtape();?>"><?php echo $oEtape->getEnumEtape(); ?></option>
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
				  <label class="col-md-4 control-label" for="ordreModEtape">Ordre</label>
				  <div class="col-md-6">
				    <select id="ordreModEtape" name="ordreModEtape" class="form-control">
				        <option value='<?php echo $oEtape->getOrdreEtape(); ?>'><?php echo $oEtape->getOrdreEtape(); ?></option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonModEtape"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="buttonModEtape" name="buttonModEtape" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>
			<?php } ?>
			</fieldset>
		</form>
		<script>afficherChoix('Etape');</script>
	<?php
	}//fin de la fonction Modifier_Etape
	
	public static function Modifier_Groupe($oGroupe)
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Modifier un groupe</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomModGroupe">Veuillez cliquer sur le nom du groupe a modifier<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  
				  	  <?php if($oGroupe->getIdGroupe()==0){ ?>
					    <select id="Groupe_liste" name="vchnomgroupe" class="form-control" data-operation="Rechercher">					     
					    	<?php 
						      	$aGroupes = Groupe::Rechercher_Groupes();
								foreach ($aGroupes as $key => $value) {
								  echo "<option value='".$value['idgroupe']."'>".$value['vchnomgroupe']."</option>";
								}
							 ?>
						</select>
					  <?php }else{ ?>
					  	<input type="hidden"  name="idGroupes" class="form-control" value="<?php echo $oGroupe->getIdGroupe(); ?>">
					  	<input type="text" id="Groupe_liste" name="vchnomgroupe" class="form-control" value="<?php echo $oGroupe->getNomGroupe(); ?>">
					  <?php } ?>
				  
				  </div>
				</div>
			
			<?php if($oGroupe->getIdGroupe()!=0){ //si aucun groupe n'est choisi alors le reste du formulaire n'apparait pas ?>
				<!-- Select Multiple -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idProgrammeModGroupe">Id Programme</label>
				  <div class="col-md-6">
				    <select id="idProgrammeModGroupe" name="idProgrammeModGroupe" class="form-control">
				      <option value='<?php echo $oGroupe->getIdProgramme()?>'><?php echo Programme::Rechercher_Programmes($oGroupe->getIdProgramme())[0]['vchnomprogramme'] ; ?></option>
				    	<?php 
					     	$aProgrammes = Programme::Rechercher_Programmes();
							foreach ($aProgrammes as $key => $value) {
							  	echo "<option value='".$value['idprogramme']."'>".$value['vchnomprogramme']."</option>";
							}
						 ?>		
				    </select>
				  </div>
				</div>
				
				<!-- Select Multiple -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idMembreModGroupe">Id Membre</label>
				  <div class="col-md-6">
				    <select id="idMembreModGroupe" name="idMembreModGroupe" class="form-control">
				      <option value='<?php echo $oGroupe->getIdMembre()?>'><?php echo Membre::Rechercher_Membres($oGroupe->getIdMembre())[0]['vchprenommembre']." ".Membre::Rechercher_Membres($oGroupe->getIdMembre())[0]['vchnommembre'] ; ?></option>
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
				  <label class="col-md-4 control-label" for="buttonModGroupe"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="buttonModGroupe" name="buttonModGroupe" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>
			<?php } ?>			
			</fieldset>
		</form>
		<script>afficherChoix('Groupe');</script>
	<?php
	}//fin de la fonction Modifier_Groupe
	
	public static function Modifier_Lien($oLien)
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Modifier un lien</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomModLien">Veuillez choisir le nom du lien à modifier<span class="red"> *</span></label>  
				  <div class="col-md-6">
				   
				   <?php if($oLien->getIdLien()==0){ ?>
					    <select id="Lien_liste" name="vchnomlien" class="form-control" data-operation="Rechercher">					     
					    	<?php 
						      	$aLiens = Lien::Rechercher_Liens();
								foreach ($aLiens as $key => $value) {
								  echo "<option value='".$value['idlien']."'>".$value['vchnomlien']." (".$value['urllien'].")</option>";
								}
							?>
						</select>
					  <?php }else{ ?>
					  	<input type="hidden"  name="idlien" class="form-control" value="<?php echo $oLien->getIdLien(); ?>">
					  	<input type="text" id="Lien_liste" name="vchnomlien" class="form-control" value="<?php echo $oLien->getNomLien(); ?>">
					  <?php } ?>
					  	  
				  </div>
				</div>
				
			<?php if($oLien->getIdLien()!=0){ ?>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomModUrl">Url<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="nomModUrl" name="nomModUrl" type="text" placeholder="" class="form-control input-md" value='<?php echo $oLien->getUrlLien() ; ?>'>
				    
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonModLien"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="buttonModLien" name="buttonModLien" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>	
			<?php } ?>	
			</fieldset>
		</form>
		<script>afficherChoix('Lien');</script>
	<?php
	}//fin de la fonction Modifier_Lien
	
	public static function Modifier_Logiciel($oLogiciel)
    {
     ?>
		<form class="form-horizontal">
			<fieldset>

				<!-- Form Name -->
				<legend>Modifier un logiciel</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomModLogiciel">Veuillez sélectionner le nom du logiciel à modifier<span class="red"> *</span></label>  
				  <div class="col-md-6">
					  
					  <?php if($oLogiciel->getIdLogiciel()==0){ ?>
					    <select id="Logiciel_liste" name="vchnomlogiciel" class="form-control" data-operation="Rechercher">					     
					    	<?php 
						      	$aLogiciels = Logiciel::Rechercher_Logiciels();
								foreach ($aLogiciels as $key => $value) {
								  echo "<option value='".$value['idlogiciel']."'>".$value['vchnomlogiciel']."</option>";
								}
							?>
						</select>
					  <?php }else{ ?>
					  	<input type="hidden"  name="idlogiciel" class="form-control" value="<?php echo $oLogiciel->getIdLogiciel(); ?>">
					  	<input type="text" id="Lien_liste" name="vchnomlogiciel" class="form-control" value="<?php echo $oLogiciel->getNomLogiciel(); ?>">
					  <?php } ?>
					  	  
				  </div>
				</div>
				
			<?php if($oLogiciel->getIdLogiciel()!=0){ ?>
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="categorieModLogiciel">Catégorie<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="categorieModLogiciel" name="categorieModLogiciel" class="form-control">
				  	  <option value='<?php echo $oLogiciel->getEnumCategorie()?>'><?php echo $oLogiciel->getEnumCategorie(); ?></option>
				      <option value="Bureautique">Bureautique</option>
				      <option value="Programmation">Programmation</option>
				      <option value="Création">Création</option>
				      <option value="Vidéo/Son">Vidéo/Son</option>
				      <option value="Web">Web</option>
				      <option value="Base de données">Base de données</option>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonModLogiciel"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="buttonModLogiciel" name="buttonModLogiciel" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>
			<?php } ?>
			</fieldset>
		</form>
	<script>afficherChoix('Logiciel');</script>
	<?php
	}//fin de la fonction Modifier_Logiciel
	
	public static function Modifier_Membre($oMembre)
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Modifier un membre</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomModMembre">Choisissez le membre que vous voulez modifier<span class="red"> *</span></label>  
				  <div class="col-md-6">
					  <?php if($oMembre->getIdMembre()==0){ ?>
					    <select id="Membre_liste" name="vchnommembre" class="form-control" data-operation="Rechercher">					     
					    	<?php 
						      	$aMembres = Membre::Rechercher_Membres();
								foreach ($aMembres as $key => $value) {
								  echo "<option value='".$value['idmembre']."'>".$value['vchprenommembre']." ".$value['vchnommembre']."</option>";
								}
							?>
						</select>
					  <?php }else{ ?>
					  	<input type="hidden"  name="idlogiciel" class="form-control" value="<?php echo $oMembre->getIdMembre(); ?>">
					  	<input type="text" id="vchprenomMembre" name="vchprenomlogiciel" class="form-control" value="<?php echo $oMembre->getPrenomMembre(); ?>">
					  <?php } ?>	    
				  </div>
				</div>
				
			<?php if($oMembre->getIdMembre()!=0){ ?>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="prenomModMembre">Prenom<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="nomModMembre" name="vchnommembre" type="text" placeholder="" class="form-control input-md" value="<?php echo $oMembre->getNomMembre(); ?>">		    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="titreModMembre">Titre<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="titreModMembre" name="vchtitremembre" type="text" placeholder="" class="form-control input-md" value="<?php echo $oMembre->getTitreMembre(); ?>">    
				  </div>
				</div>
				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="descriptionModMembre">Description</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="descriptionModMembre" name="descriptionModMembre"><?php echo $oMembre->getTxtDescripMembre(); ?></textarea>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="urlModMembre">Url photo<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="urlModMembre" name="urlModMembre" type="text" placeholder="" class="form-control input-md" value="<?php echo $oMembre->getUrlPhotoMembre(); ?>">   
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="courrielModMembre">Courriel<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="courrielModMembre" name="courrielModMembre" type="text" placeholder="exemple@exemple.com" class="form-control input-md" value="<?php echo $oMembre->getCourrielMembre(); ?>">  
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="telModMembre">Téléphone<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  <input id="telModMembre" name="telModMembre" type="text" placeholder="" class="form-control input-md" value="<?php echo $oMembre->getTelMembre(); ?>"> 
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonModMembre"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="buttonModMembre" name="buttonModMembre" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>
			<?php } ?>
			</fieldset>
		</form>
		<script>afficherChoix('Membre');</script>

	<?php
	}//fin de la fonction Modifier_Membre
	
	public static function Modifier_Programme($oProgramme)
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				
				<!-- Form Name -->
				<legend>Modifier un programme</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomModProgramme">Choisissez le nom du programme à modifier<span class="red"> *</span></label>  
				  <div class="col-md-6">
					  
					  <?php if($oProgramme->getIdProgramme()==0){ ?>
					    <select id="Programme_liste" name="vchnomprogramme" class="form-control" data-operation="Rechercher">					     
					    	<?php 
						      	$aProgrammes = Programme::Rechercher_Programmes();
								foreach ($aProgrammes as $key => $value) {
								  echo "<option value='".$value['idprogramme']."'>".$value['vchnomprogramme']."</option>";
								}
							?>
						</select>
					  <?php }else{ ?>
					  	<input type="hidden"  name="idlogiciel" class="form-control" value="<?php echo $oProgramme->getIdProgramme(); ?>">
					  	<input type="text" id="vchnomprogramme" name="vchnomprogramme" class="form-control" value="<?php echo $oProgramme->getNomProgramme(); ?>">
					  <?php } ?>		
				  
				  </div>
				</div>
				
			<?php if($oProgramme->getIdProgramme()!=0){ ?>
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="numeroModProgramme">Numéro du programme<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  	<input id="numeroModProgramme" name="numeroModProgramme" type="text" placeholder="" class="form-control input-md" value="<?php echo $oProgramme->getNoProgramme(); ?>">		    
				  </div>
				</div>
				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="descriptionModProgramme">description du programme</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="descriptionModProgramme" name="descriptionModProgramme"><?php echo $oProgramme->getTxtDescripProgramme(); ?></textarea>
				  </div>
				</div>
				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="descriptionModProgramme">description du programme</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="txtdescriptionlgprogramme" name="txtdescriptionlgprogramme"><?php echo $oProgramme->getTxtDescripLProgramme(); ?></textarea>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="dateModProgramme">Fin du programme</label>  
				  <div class="col-md-6">
				  <input id="dateModProgramme" name="dateModProgramme" type="text" placeholder="Date de la fin du programme" class="form-control input-md" value="<?php echo $oProgramme->getDateFinProgramme(); ?>">
				  </div>
				</div>
				
				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="enumModProgramme">Formation</label>
				  <div class="col-md-4"> 
				    <label class="radio-inline" for="enumModProgramme-0">
				      <input class="sansStyle"  type="radio" name="enumModProgramme" id="enumModProgramme-0" value="FC" <?php if($oProgramme->getEnumFormaProgramme()=="FC"){echo "checked";} ?>>
				      FC
				    </label> 
				    <label class="radio-inline" for="enumModProgramme-1">
				      <input  class="sansStyle" type="radio" name="enumModProgramme" id="enumModProgramme-1" value="Rég." <?php if($oProgramme->getEnumFormaProgramme()=="R&eacute;g."){echo "checked";} ?>>
				      Rég
				    </label> 
				    <label class="radio-inline sansStyle" for="enumModProgramme-2">
				      <input type="radio" name="enumModProgramme" id="enumModProgramme-2" value="FC/Rég." <?php if($oProgramme->getEnumFormaProgramme()=="FC/R&eacute;g."){echo "checked";} ?>>
				      FC/Rég
				    </label>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="domaineModProgramme">Domaine<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="domaineModProgramme" name="domaineModProgramme" class="form-control">
				      <option value="<?php echo $oProgramme->getEnumDomaineProgramme(); ?>"><?php echo $oProgramme->getEnumDomaineProgramme(); ?></option>
				      <option value="Multimédia/Web">Multimédia/Web</option>
				      <option value="Informatique">Informatique</option>
				      <option value="TGE">TGE</option>
				      <option value="Bureautique">Bureautique</option>
				    </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="IdLienModDoc">Id Lien</label>
				  <div class="col-md-6">
				    <select id="IdLienModDoc" name="IdLienModDoc" class="form-control">
				      <option value='<?php echo $oProgramme->getIdLien()?>'><?php echo Lien::Rechercher_Liens($oProgramme->getIdLien())[0]['vchnomlien']."(".Lien::Rechercher_Liens($oProgramme->getIdLien())[0]['urllien'].")" ; ?></option>
				      <?php 
					      	$aLiens = Lien::Rechercher_Liens();
							foreach ($aLiens as $key => $value) {
							  echo "<option value='".$value['idlien']."'>".$value['vchnomlien']."  ".$value['urllien']."</option>";
							}
					  ?>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="control-group">
				  <label class="control-label" for="buttonModProgramme"></label>
				  <div class="droiteBouton col-md-10">
				    <button disabled id="buttonModProgramme" name="buttonModProgramme" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>
				
				
			<?php } ?>
			</fieldset>
		</form>
	<script>afficherChoix('Programme');</script>
	<?php
	}//fin de la fonction Modifier_Programme
	
	public static function Modifier_Ressource()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
		
				<!-- Form Name -->
				<legend>Modifier une ressource</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="nomModRessource">Nom de la ressource<span class="red"> *</span></label>  
				  <div class="col-md-6">
					  <select id="ressource_liste" name="vchnomressource" class="form-control" >
					     <?php 
					      	$aRessources = Ressource::Rechercher_Ressources();
							foreach ($aRessources as $key => $value) {
							  	echo "<option value='".$value['idressource']."'>".$value['vchnomressource']."</option>";
							}
						 ?>	
					  </select>		
				  </div>
				</div>
				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="descriptionModRessource">Description</label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="descriptionModRessource" name="descriptionModRessource"></textarea>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="urlModRessource">Url du media</label>  
				  <div class="col-md-6">
				 	 <input id="urlModRessource" name="urlModRessource" type="text" placeholder="" class="form-control input-md">
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idEtapeModRessource">Id de l'étape<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="idEtapeModRessource" name="idEtapeModRessource" class="form-control">
				      <option value="1">datalist</option>
				      <option value="2">datalist2</option>
				    </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idLienModRessource">Id du lien</label>
				  <div class="col-md-6">
				    <select id="idLienModRessource" name="idLienModRessource" class="form-control">
				      <option value="1">datalist</option>
				      <option value="2">datalist2</option>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonModRessource"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonModRessource" name="buttonModRessource" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>
			</fieldset>
		</form>
	<script>afficherChoix('Ressource');</script>
	<?php
	}//fin de la fonction Modifier_Ressource
	
	public static function Modifier_Stage()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				<!-- Form Name -->
				<legend>Modifier un stage</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="descriptionModStage">Description du stage<span class="red"> *</span></label>  
				  <div class="col-md-6">
					  <select id="stage_liste" name="txtdescripstage" class="form-control" >
					     <?php 
					      	$aStages = Stage::Rechercher_Stages();
							foreach ($aStages as $key => $value) {
							  	echo "<option value='".$value['idstage']."'>".$value['txtdescripstage']."</option>";
							}
						 ?>	
					   </select>			    
				   </div>
				</div>
				
				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="remunererModStage">Stage rémunéré<span class="red"> *</span></label>
				  <div class="col-md-4"> 
				    <label class="radio-inline" for="remunererModStage-0">
				      <input class="sansStyle" type="radio " name="remunererModStage" id="remunererModStage-0" value="1" checked="checked">
				      oui
				    </label> 
				    <label class="radio-inline" for="remunererModStage-1">
				      <input class="sansStyle" type="radio" name="remunererModStage" id="remunererModStage-1" value="2">
				      non
				    </label>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="dateDebutModStage">Date de début de stage</label>  
				  <div class="col-md-6">
				 	 <input id="dateDebutModStage" name="dateDebutModStage" type="text" placeholder="" class="form-control input-md">				    
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="dateFinModStage">Date de la fin du stage</label>  
				  <div class="col-md-6">
				  	<input id="dateFinModStage" name="dateFinModStage" type="text" placeholder="" class="form-control input-md">			    
				  </div>
				</div>
				
				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="dureeModStage">Durée du stage</label>
				  <div class="col-md-4"> 
				    <label class="radio-inline" for="dureeModStage-0">
				      <input class="sansStyle" type="radio" name="dureeModStage" id="dureeModStage-0" value="1" checked="checked">
				      1
				    </label> 
				    <label class="radio-inline" for="dureeModStage-1">
				      <input class="sansStyle" type="radio" name="dureeModStage" id="dureeModStage-1" value="2">
				      2
				    </label> 
				    <label class="radio-inline" for="dureeModStage-2">
				      <input class="sansStyle" type="radio" name="dureeModStage" id="dureeModStage-2" value="3" checked="checked">
				      3
				    </label>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idGroupeModStage">Id du Groupe<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="idGroupeModStage" name="idGroupeModStage" class="form-control">
				      <option value="1">data-list1</option>
				      <option value="2">data-list2</option>
				    </select>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="idLienModStage">Id du lien</label>
				  <div class="col-md-6">
				    <select id="idLienModStage" name="idLienModStage" class="form-control">
				      <option value="1">datalist-1</option>
				      <option value="2">datalist-2</option>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonModStage"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonModStage" name="buttonModStage" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>
			</fieldset>
		</form>

	<?php
	}//fin de la fonction Modifier_Stage
	
	public static function Modifier_Texte()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>				
				<!-- Form Name -->
				<legend>Modifier un texte</legend>
				
				<!-- Text input-->
				<div class="form-group ">
				  <label class="col-md-4 control-label" for="titreModTexte">Titre<span class="red"> *</span></label>  
				  <div class="col-md-6">	
					 <select id="texte_liste" name="vchtitretexte" class="form-control" >
					     <?php 
					      	$aTextes = Texte::Rechercher_Textes();
							foreach ($aTextes as $key => $value) {
							  	echo "<option value='".$value['idtexte']."'>".$value['vchtitretexte']."</option>";
							}
						 ?>	
					  </select>	    
				  </div>
				</div>
				
				<!-- Textarea -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="contenuModTexte">Contenu<span class="red"> *</span></label>
				  <div class="col-md-4">                     
				    <textarea class="form-control" id="contenuModTexte" name="contenuModTexte"></textarea>
				  </div>
				</div>
				
				<!-- Multiple Radios (inline) -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="typeModTexte">Type de texte</label>
				  <div class="col-md-4"> 
				    <label class="radio-inline" for="typeModTexte-0">
				      <input class="sansStyle" name="typeModTexte" id="typeModTexte-0" value="1" checked="checked" type="radio">
				      groupe
				    </label> 
				    <label class="radio-inline" for="typeModTexte-1">
				      <input class="sansStyle" name="typeModTexte" id="typeModTexte-1" value="2" type="radio">
				      utile
				    </label>
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="IdGroupeModTexte">Id groupe</label>
				  <div class="col-md-6">
				    <select id="IdGroupeModTexte" name="IdGroupeModTexte" class="form-control">
				      <option value="1">-NULL-</option>
				      <option value="2">datalist</option>
				      <option value="3">datalist2</option>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonModTexte"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonModTexte" name="buttonModTexte" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>
			</fieldset>
		</form>

	<?php
	}//fin de la fonction Modifier_Texte
	
	public static function Modifier_Utilisateur()
    {
     ?>
		<form class="form-horizontal">
			<fieldset>
				<!-- Form Name -->
				<legend>Modifier un utilisateur</legend>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="loginModUser">Identifiant de l'utilisateur<span class="red"> *</span></label>  
				  <div class="col-md-6">
					 <select id="utilisateur_liste" name="vchloginuser" class="form-control" >
					     <?php 
					      	$aUtilisateurs = Utilisateur::Rechercher_Utilisateurs();
							foreach ($aUtilisateurs as $key => $value) {
							  	echo "<option value='".$value['iduser']."'>".$value['vchloginuser']."</option>";
							}
						 ?>	
					  </select>	   
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="passwordModUser">Mot de Passe<span class="red"> *</span></label>  
				  <div class="col-md-6">
				  	<input id="passwordModUser" name="passwordModUser" placeholder="" class="form-control input-md" type="text">
				  </div>
				</div>
				
				<!-- Select Basic -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="IdGroupeModUser">Id groupe<span class="red"> *</span></label>
				  <div class="col-md-6">
				    <select id="IdGroupeModUser" name="IdGroupeModUser" class="form-control">
				      <option value="1">data-list1</option>
				      <option value="2">data-list2</option>
				    </select>
				  </div>
				</div>
				
				<!-- Button -->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="buttonModUser"></label>
				  <div class="droiteBouton col-md-10">
				    <button id="buttonModUser " name="buttonModUser" class="btn-lg btn-primary"><h5 class="enligne2"><span class="glyphicon glyphicon-repeat"></span></h5> Modifier</button>
				  </div>
				</div>
			</fieldset>
		</form>

	<?php
	}//fin de la fonction Modifier_User
}
?>
