//modification numero de tel
			$("#bouton_m_numero_de_tel").on('click',function ()  {
				var numero_de_tel = $("#numero_de_tel").val();

if (numero_de_tel == "")
    {
         $("#titre_erreur_modification").css("color", "red").html("Erreur!");
        $("#erreur_modification").html("veuillez remplir le champ");
                    $("#modal_erreur_modification").modal('show');
    }
else {
					$.ajax({
						type: "post",
						url: "traitement_mon_profil.php",
						data: {
							'numero_de_tel': numero_de_tel,
},
success: function (data){
						if (data != "success") {
								$("#erreur_modification").html(data);
                                  $("#titre_erreur_modification").css("color", "red").html("Erreur!");
                                 $("#modal_erreur_modification").modal('show');
} else {
                $("#erreur_modification").html("Modification réussite");
                $("#titre_erreur_modification").css("color", "green").html("Success!");
                                 $("#modal_erreur_modification").modal('show');

}
                        
}
});
    }
});

//modification email
			$("#bouton_m_email").on('click',function ()  {
				var email = $("#email").val();

if (email == "")
    {
         $("#titre_erreur_modification").css("color", "red").html("Erreur!");
        $("#erreur_modification").html("veuillez remplir le champ");
                    $("#modal_erreur_modification").modal('show');
    }
else {
					$.ajax({
						type: "post",
						url: "traitement_mon_profil.php",
						data: {
							'email': email,
},
success: function (data){
						if (data != "success") {
								$("#erreur_modification").html(data);
                                  $("#titre_erreur_modification").css("color", "red").html("Erreur!");
                                 $("#modal_erreur_modification").modal('show');
} else {
                $("#erreur_modification").html("Modification réussite");
                $("#titre_erreur_modification").css("color", "green").html("Success!");
                                 $("#modal_erreur_modification").modal('show');

}
                        
}
});
    }
});


//modification wilaya et commune
			$("#bouton_m_wilaya").on('click',function ()  {
				var wilaya = $("#wilaya").val();
				var commune = $("#commune").val();

if (wilaya == "" || commune == "" )
    {
         $("#titre_erreur_modification").css("color", "red").html("Erreur!");
        $("#erreur_modification").html("veuillez Selectionner la wilaya et la commune");
                    $("#modal_erreur_modification").modal('show');
    }
else {
					$.ajax({
						type: "post",
						url: "traitement_mon_profil.php",
						data: {
							'wilaya': wilaya,
							'commune': commune,
},
success: function (data){
						if (data != "success") {
								$("#erreur_modification").html(data);
                                  $("#titre_erreur_modification").css("color", "red").html("Erreur!");
                                 $("#modal_erreur_modification").modal('show');
} else {
                $("#erreur_modification").html("Modification réussite");
                $("#titre_erreur_modification").css("color", "green").html("Success!");
                                 $("#modal_erreur_modification").modal('show');

}
                        
}
});
    }
});


//modification journée(s) de repos
			$("#bouton_m_repos").on('click',function ()  {
                 	var repos1 = $('.reposs input:checked').size();
					var repos = []
				$('.reposs input:checked').each(function () {
					repos.push($(this).val());
				});

if (repos1 == 0)
    {
         $("#titre_erreur_modification").css("color", "red").html("Erreur!");
        $("#erreur_modification").html("veuillez remplir le champ");
                    $("#modal_erreur_modification").modal('show'); 
    }
                else{

					$.ajax({
						type: "post",
						url: "traitement_mon_profil.php",
						data: {
							'repos': repos,
							'repos1': repos1,
},
success: function (data){
						if (data == "success1") {
								$("#erreur_modification").html("Modification réussite (vous n'avez aucune journée de repos)");
                                  $("#titre_erreur_modification").css("color", "green").html("success!");
                                 $("#modal_erreur_modification").modal('show');
} else {
                $("#erreur_modification").html("Modification réussite");
                $("#titre_erreur_modification").css("color", "green").html("Success!");
                                 $("#modal_erreur_modification").modal('show');

}
                        
}
});
 } 
});



//modification la durée d'une visite
			$("#bouton_m_duree").on('click',function ()  {
             var duree1 = $('input:checked[name=duree]').size();
				var duree = $('input:checked[name=duree]').val();

if (duree1 == 0)
    {
         $("#titre_erreur_modification").css("color", "red").html("Erreur!");
        $("#erreur_modification").html("veuillez cocher une case");
                    $("#modal_erreur_modification").modal('show');
    }
else{
					$.ajax({
						type: "post",
						url: "traitement_mon_profil.php",
						data: {
							'duree': duree,
					
},
success: function (data){
						if (data != "success") {
								$("#erreur_modification").html(data);
                                  $("#titre_erreur_modification").css("color", "red").html("Erreur!");
                                 $("#modal_erreur_modification").modal('show');
} else {
                $("#erreur_modification").html("Modification réussite");
                $("#titre_erreur_modification").css("color", "green").html("Success!");
                                 $("#modal_erreur_modification").modal('show');

}
                        
}
});
    }
  
});

//modification nombre de visite par jour
			$("#bouton_m_nombre_visite").on('click',function ()  {
				var nombre_visite = $("#nombre_visite").val();

if (nombre_visite == "")
    {
         $("#titre_erreur_modification").css("color", "red").html("Erreur!");
        $("#erreur_modification").html("veuillez remplir le champ");
                    $("#modal_erreur_modification").modal('show');
    }
else {
					$.ajax({
						type: "post",
						url: "traitement_mon_profil.php",
						data: {
							'nombre_visite': nombre_visite,
},
success: function (data){
						if (data != "success") {
								$("#erreur_modification").html(data);
                                  $("#titre_erreur_modification").css("color", "red").html("Erreur!");
                                 $("#modal_erreur_modification").modal('show');
} else {
                $("#erreur_modification").html("Modification réussite");
                $("#titre_erreur_modification").css("color", "green").html("Success!");
                                 $("#modal_erreur_modification").modal('show');

}
                        
}
});
    }
});

//modification debut de travail
			$("#bouton_m_debut_de_travail").on('click',function ()  {
				var debut_de_travail = $("#debut_de_travail").val();

if (debut_de_travail == "")
    {
         $("#titre_erreur_modification").css("color", "red").html("Erreur!");
        $("#erreur_modification").html("veuillez remplir le champ");
                    $("#modal_erreur_modification").modal('show');
    }
else {
					$.ajax({
						type: "post",
						url: "traitement_mon_profil.php",
						data: {
							'debut_de_travail': debut_de_travail,
},
success: function (data){
						if (data != "success") {
								$("#erreur_modification").html(data);
                                  $("#titre_erreur_modification").css("color", "red").html("Erreur!");
                                 $("#modal_erreur_modification").modal('show');
} else {
                $("#erreur_modification").html("Modification réussite");
                $("#titre_erreur_modification").css("color", "green").html("Success!");
                                 $("#modal_erreur_modification").modal('show');

}
                        
}
});
    }
});


//modification duree de la pause
			$("#bouton_m_duree_repos").on('click',function ()  {
				var duree_repos = $("#duree_repos").val();

if (duree_repos == "")
    {
         $("#titre_erreur_modification").css("color", "red").html("Erreur!");
        $("#erreur_modification").html("veuillez remplir le champ");
                    $("#modal_erreur_modification").modal('show');
    }
else {
					$.ajax({
						type: "post",
						url: "traitement_mon_profil.php",
						data: {
							'duree_repos': duree_repos,
},
success: function (data){
						if (data != "success") {
								$("#erreur_modification").html(data);
                                  $("#titre_erreur_modification").css("color", "red").html("Erreur!");
                                 $("#modal_erreur_modification").modal('show');
} else {
                $("#erreur_modification").html("Modification réussite");
                $("#titre_erreur_modification").css("color", "green").html("Success!");
                                 $("#modal_erreur_modification").modal('show');

}
                        
}
});
    }
});



//modification du début de la pause midi
			$("#bouton_m_pause_midi").on('click',function ()  {
				var pause_midi = $("#pause_midi").val();

if (pause_midi == "")
    {
         $("#titre_erreur_modification").css("color", "red").html("Erreur!");
        $("#erreur_modification").html("veuillez remplir le champ");
                    $("#modal_erreur_modification").modal('show');
    }
else {
					$.ajax({
						type: "post",
						url: "traitement_mon_profil.php",
						data: {
							'pause_midi': pause_midi,
},
success: function (data){
						if (data != "success") {
								$("#erreur_modification").html(data);
                                  $("#titre_erreur_modification").css("color", "red").html("Erreur!");
                                 $("#modal_erreur_modification").modal('show');
} else {
                $("#erreur_modification").html("Modification réussite");
                $("#titre_erreur_modification").css("color", "green").html("Success!");
                                 $("#modal_erreur_modification").modal('show');

}
                        
}
});
    }
});


