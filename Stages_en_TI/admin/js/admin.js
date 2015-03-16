$(document).ready(function(){
	lienClic ();
});

function afficherChoix(choix){
	
	$("select[name='vchnom"+choix.toLowerCase()+"']").on('click', 'option', function(){
		var value=$(this).val().split("_");//le premier index est le id pour la recherche et le deuxieme est le nom de la classe
		//console.log(value[0]);
		$.get("./ajax/controleurAjax.php?requeteForm=Modifier_"+choix+"&id="+value[0], function(data) {
			$(".afficherJS").html(" ");
			data !=""? $(".afficherJS").html(data): $(".afficherJS").html(" ");
		});
	});
}

function lienClic () {
	$(".afficherJS").hide();
	$('.total h4').click(function(){
		$(".afficherJS").show();
		$.get("./ajax/controleurAjax.php?requeteForm="+$(this).parent('div').data('operation')+"_"+$(this).data('type'), function(data) {
			$(".afficherJS").html(" ");
			data !=""? $(".afficherJS").html(data): $(".afficherJS").html(" ");
		});
	});
}

/*
function activerBouton(){//foncton déclarer pour activer bouton
        if(valide.titreAddDoc==true && valide.echeancierAddDoc==true && valide.typeAddDoc==true && valide.ponderationAddDoc==true && valide.IdGroupeAddDoc==true && valide.IdLienAddDoc==true ){//Si les 5 paramêtres son "TRUE"
            $("#buttonAddDoc").removeAttr('disabled'); //alors retire l'attribut "disable"du bouton
        }
    }
*/

/*function afficherListe(typeListe){
	console.log(typeListe);
	$("#"+typeListe+"_liste").keyup(function(){
		var motsIncomplet = $("#"+typeListe+"_liste").val();
		$.get("./ajax/controleurAjax.php?typeListe="+typeListe+"&motsIncomplet="+motsIncomplet, function(data) {//récupère les information du fichier php
			data !="" ? $("#"+typeListe+"liste").html(data): $("#"+typeListe+"liste").html("");
			data !="" ? console.log('recois'): console.log('rien');
		});
	});
}*/