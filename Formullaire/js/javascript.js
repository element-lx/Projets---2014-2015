/*
//Auteurs: Francois Tremblay, David Julien
//Programmation Client Serveur
//Formulaire avec jQuery
//02 Fev 2015
***************************************/


$(document).ready(function(){
	$("input[name='ville']").keyup(function(){
		var ville = $("#ville").val();// Variable qui récupère le nom de la ville
		var pays = $("input[name='pays']:checked").val();// Variable qui récupère le nom du pays
		$.get("setUsers.php?ville="+ville+"&pays="+pays+"&fonction=trouverVille", function(data) {//récupère les information du fichier php
			data !="" ? $("#villeListe").html(data): $("#villeListe").html(" ");// Affiche le nom de la ville si la ville existante ou sinon Affiche rien.
		});
	});
	// Déclaration de variable qui est un tableau 
	var valide={nom:false,
	            prenom:false,
	            naissance:false,
	            email:false,
	            ville:false,
	            pays:true,
	           };
	
	
	$("input[name='nom']").keyup(function(){
	    /^[a-zA-Z\ \']+$/.test($("input[name='nom']").val())? valide.nom = true : valide.nom = false;//vérification du nom avec l'expression régulière
	    valide.nom==true? $("#iconNom").html("<img src='./images/crochet.png' class='imgSize'>"): $("#iconNom").html("<img src='./images/x.png' class='imgSize'>");//Si la validation est true alors affiche l'icone crochet sinon affiche l'icone X
	    valide.dataNom=$("input[name='nom']").val();//Récupération de la valeur soumise par le formulaire
	     activerBouton(); // Appel la fonction qui active le bouton
	});
	
	$("input[name='prenom']").keyup(function(){
		/^[a-zA-Z\ \']+$/.test($("input[name='prenom']").val())? valide.prenom = true: valide.prenom = false;//vérification du prénom avec l'expression régulière
        valide.prenom==true? $("#iconPrenom").html("<img src='./images/crochet.png' class='imgSize'>"): $("#iconPrenom").html("<img src='./images/x.png' class='imgSize'>");//Si la validation est true alors affiche l'icone crochet sinon affiche l'icone X
	    valide.dataPrenom=$("input[name='prenom']").val();//Récupération de la valeur soumise par le formulaire
	     activerBouton(); // Appel la fonction qui active le bouton
	});
	
	/*utilisé si le navigateur ne supporte pas l'input date comme firefox*/
	$("input[name='dateNaissance']").keyup(function(){
        /^(\d{4})([\/|-])(\d{2})([\/|-])(\d{2})$/.test($("input[name='dateNaissance']").val())&& isMajeure($("input[name='dateNaissance']").val())? valide.naissance = true: valide.naissance = false;//vérification de la date avec l'expression régulière
        valide.naissance==true? $("#iconNaissance").html("<img src='./images/crochet.png' class='imgSize'>"): $("#iconNaissance").html("<img src='./images/x.png' class='imgSize'>");//Si la validation est true alors affiche l'icone crochet sinon affiche l'icone X
	    valide.dataNaissance=$("input[name='dateNaissance']").val();//Récupération de la valeur soumise par le formulaire
	    activerBouton(); // Appel la fonction qui active le bouton
	});
	
	/*utilisé si le navigateur supporte l'input date comme chrome*/
	$("input[name='dateNaissance']").change(function(){
        /^(\d{4})([\/|-])(\d{2})([\/|-])(\d{2})$/.test($("input[name='dateNaissance']").val())&& isMajeure($("input[name='dateNaissance']").val())? valide.naissance = true: valide.naissance = false;//vérification de la date avec l'expression régulière
        valide.naissance==true? $("#iconNaissance").html("<img src='./images/crochet.png' class='imgSize'>"): $("#iconNaissance").html("<img src='./images/x.png' class='imgSize'>");//Si la validation est true alors affiche l'icone crochet sinon affiche l'icone X
         valide.dataNaissance=$("input[name='dateNaissance']").val();//Récupération de la valeur soumise par le formulaire
        activerBouton();// Appel la fonction qui active le bouton
    });
	
	$("input[name='email']").keyup(function(){
		 /^[a-zA-Z0-9_\.\-]+\@([a-zA-Z0-9\-]+\.)+[a-zA-Z0-9]{2,15}$/.test($("input[name='email']").val())? valide.email = true: valide.email = false;//vérification du Courriel avec l'expression régulière
        valide.email==true? $("#iconEmail").html("<img src='./images/crochet.png' class='imgSize'>"): $("#iconEmail").html("<img src='./images/x.png' class='imgSize'>");//Si la validation est true alors affiche l'icone crochet sinon affiche l'icone X
	    valide.dataEmail=$("input[name='email']").val();//Récupération de la valeur soumise par le formulaire
	    activerBouton();// Appel la fonction qui active le bouton
	});
	
	$("#ville").keyup(function(){//evenement si le nom est entré au clavier
		/^[a-zA-Z\ \']+$/.test($("#ville").val())? valide.ville = true: valide.ville = false;//vérification de la ville avec l'expression régulière
        valide.ville==true? $("#iconVille").html("<img src='./images/crochet.png' class='imgSize'>"): $("#iconVille").html("<img src='./images/x.png' class='imgSize'>");//Si la validation est true alors affiche l'icone crochet sinon affiche l'icone X
	    valide.dataVille=$("#ville").val();//Récupération de la valeur soumise par le formulaire
	    activerBouton();// Appel la fonction qui active le bouton
	});
	$("#ville").click(function(){//evenement si le nom est entré avecun clique de sourie dans la dataliste
		/^[a-zA-Z\ \']+$/.test($("#ville").val())? valide.ville = true: valide.ville = false;//vérification de la ville avec l'expression régulière
        valide.ville==true? $("#iconVille").html("<img src='./images/crochet.png' class='imgSize'>"): $("#iconVille").html("<img src='./images/x.png' class='imgSize'>");//Si la validation est true alors affiche l'icone crochet sinon affiche l'icone X
	    valide.dataVille=$('datalist option').val();//Récupération de la valeur soumise par le formulaire
	    activerBouton();// Appel la fonction qui active le bouton
	});
	
	$("input[name='pays']").click(function(){
		$("input[value='canada']:checked").val()=="canada"||$("input[value='usa']:checked").val()=="usa"? valide.pays=true: valide.pays = false;//
        valide.pays==true? $("#iconPays").html("<img src='./images/crochet.png' class='imgSize'>"): $("#iconPays").html("<img src='./images/x.png' class='imgSize'>");//Si la validation est true alors affiche l'icone crochet sinon affiche l'icone X
	    valide. dataPays=$("input[name='pays']:checked").val();//Récupération de la valeur soumise par le formulaire
	    activerBouton();// Appel la fonction qui active le bouton
	});
	
	
	
	
    $("#button").click(function(){ //Si la personne click sur le bouton
        $.get("setUsers.php?nom="+valide.dataNom+"&prenom="+valide.dataPrenom+"&dateNaisssance="+valide.dataNaissance+"&courriel="+valide.dataEmail+"&ville="+valide.dataVille+"&pays="+valide.dataPays+"&fonction=inscription", function(data) {//Envoies les informations du formulaire à la base de données.
            data !="" ? $("#bravo").html(data): $("#bravo").html(" ");//Affiche le message de félicitation..
        });
    });
    function isMajeure(anneeEntrer) {//Fonction qui verifie si l'usager à 18 ans
            var dob=anneeEntrer;//Récupération de l'âge de l'usager
            var year=Number(dob.substr(0,4));//Récupération dE l'année
            var month=Number(dob.substr(5,2))-1;//Récupération du mois
            var day=Number(dob.substr(8,2));//Récupération du jour
            var today=new Date();//Récupération de la date actuel
            var age=today.getFullYear()-year;// Calcul l'age avec la date d'aujourdh'ui - la date soumise par l'usager
            if(today.getMonth()<month || (today.getMonth()==month && today.getDate()<day)){
                age--;
            }
            if(parseInt(age)>=18){//Si l'age de l'usager est plus grand ou égale à 18 ans
                return true;
            }
            else{
                return false;
            }
     }
	 function activerBouton(){//foncton déclarer pour activer bouton
        if(valide.pays==true && valide.ville==true && valide.email==true && valide.naissance==true && valide.prenom==true && valide.nom==true){//Si les 5 paramêtres son "TRUE"
            $("#button").removeAttr('disabled'); //alors retire l'attribut "disable"du bouton
        }
    }
});


	            
	           
	            



