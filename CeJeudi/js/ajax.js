
		$(document).ready(function () {


	



			$("#nom").keyup(function () {
				yassa_nom();
			});
			$("#prenom").keyup(function () {
				yassa_prenom();
			});

			$("#numero_de_tel").keyup(function () {
				yassa_tel();
			});
			$("#email").keyup(function () {
				email_amar();
			});
			$("#pass1").keyup(function () {
				if ($(this).val().length < 6) {
					$("#output_pass1").css("color", "red").html("trop court (6 caractères au minimum)");
					$("div.pass1").removeClass("has-success has-feedback");
					$("div.pass1").addClass("has-error has-feedback");

					$("#pass1").addClass("alert  alert-danger");

				} else if ($("#pass2").val() != "" && $("#pass2").val() != $("#pass1").val()) {
					$("#output_pass1").html("les deux mots de passe sont différents");
					$("#output_pass2").html("les deux mots de passe sont différents");


					$("#output_pass1").css("color", "red");
					$("div.pass1").removeClass("has-success has-feedback");
					$("div.pass1").addClass("has-error has-feedback");

					$("#pass1").removeClass("alert  alert-success");
					$("#pass1").addClass("alert  alert-danger");

					$("#output_pass2").css("color", "red");
					$("div.pass2").removeClass("has-success has-feedback");
					$("div.pass2").addClass("has-error has-feedback");

					$("#pass2").removeClass("alert  alert-success");
					$("#pass2").addClass("alert  alert-danger");



				} else {
					$("#output_pass1").empty();
					$("div.pass1").removeClass("has-error has-feedback");

					$("div.pass1").addClass("has-success has-feedback");

					$("#pass1").removeClass("alert  alert-danger");
					$("#pass1").addClass("alert  alert-success");
					$("#output_pass1").css("color", "green");


				}

			});
			$("#pass2").keyup(function () {

				yassa_password();

			});

			$("#nombre_visite").keyup(function () {
				yassa_nombre_visite();
			});





			//traitement formulaire d'inscription jsk
			$("#register_form").submit(function () {
				var statut = $("#statut");
				var nom = $("#nom").val();
				var prenom = $("#prenom").val();
				var genre1 = $('input:checked[name=genre]').size();
				var genre = $('input:checked[name=genre]').val();
				var numero_de_tel = $("#numero_de_tel").val();
				var email = $("#email").val();
				var date_de_naissance = $("#date_de_naissance").val();
				var pass1 = $("#pass1").val();
				var pass2 = $("#pass2").val();
				var specialite = $("#specialite").val();
				var wilaya = $("#wilaya").val();
				var commune = $("#commune").val();
				var repos1 = $('.reposs input:checked').size();
				var repos = []
				$('.reposs input:checked').each(function () {
					repos.push($(this).val());
				});


				var nombre_visite = $("#nombre_visite").val();
				var duree1 = $('input:checked[name=duree]').size();
				var duree = $('input:checked[name=duree]').val();
				var debut_de_travail = $("#debut_de_travail").val();
				var duree_repos = $("#duree_repos").val();
				var pause_midi = $("#pause_midi").val();

				if (nom == "" || prenom == "" || genre1 == 0 || numero_de_tel == "" || email == "" || date_de_naissance == "" || pass1 == "" || pass2 == "" || specialite == "" || wilaya == "" || commune == "" || nombre_visite == "" || duree1 == 0 || debut_de_travail == "" || duree_repos == "" || pause_midi == "") {
					statut.html("veuillez remplir tous les champs");
                    $("#myModal31").modal('show');
                    

				} else
				if (pass1 != pass2) {
					statut.html("Les deux mots de passe sont différents");
                     $("#myModal31").modal('show');

				} else {
					$.ajax({
						type: "post",
						url: "traitement.php",
						data: {
							'nom': nom,
							'prenom': prenom,
							'genre': genre,
							'numero_de_tel': numero_de_tel,
							'email': email,
							'date_de_naissance': date_de_naissance,
							'pass1': pass1,
							'pass2': pass2,
							'specialite': specialite,
							'wilaya': wilaya,
							'commune': commune,
							'nombre_visite': nombre_visite,
							'duree': duree,
							'repos': repos,
							'debut_de_travail': debut_de_travail,
							'duree_repos': duree_repos,
							'pause_midi': pause_midi,
						},
						beforeSend: function () {
							$("#bRegister").attr("value", " Traitement en cours...");
						},
						success: function (data){
							if (data != "register_success") {
								statut.html(data);
                                 $("#myModal31").modal('show');
								$("#bRegister").attr("value", " inscription");
								$("#bRegister").addClass("btn-success").css("colo", "white");
							} else {
									$('#infos').modal('show');
								$(':input','#register_form')
									.not(':button, :submit, :reset, :hidden')
									.val('')
									.removeAttr('checked')
									.removeAttr('selected')     
                                    .removeClass("alert  alert-danger")
                                    .removeClass("alert  alert-success");
                     $("#register_form div").removeClass("has-error has-feedback");
                     $("#register_form div").removeClass("has-success has-feedback");
                     $("#register_form small").empty();
									$("#bRegister").attr("value", " inscription");
							}

						}

					});



				}









			});
            
   /* traitement formulaire connexion docteur*/  
$("#formulaire_connexion").submit(function () {
   $.ajax({
				type: "post",
				url: "traitement2.php",
				data: {
					'email_connexion': $("#email_connexion").val(),
                    'password_connexion':$("#password_connexion").val(),
                    'bouton_connexion':$("#bouton_connexion").val()
             
                },
       success: function (data) {
					if (data != "success") {
                        	$("#erreur_connexion").show();
                        	$("#erreur_connexion").css("color", "red").html(data);
                    }
           else{$("#erreur_connexion").empty();
						$("#erreur_connexion").hide();
               document.location.href="http://127.0.0.1/wwww/Medecine/membre_docteur.php";}
       }
           
           
           
   });
    
});

		});




		function yassa_nom() {
			$.ajax({
				type: "post",
				url: "traitement.php",
				data: {
					'nom_check': $("#nom").val()
				},
				success: function (data) {
					if (data == "success") {
						$("#erreur_nom").empty();
						$("#erreur_nom").hide();
						$("div.nom").removeClass("has-error has-feedback");

						$("div.nom").addClass("has-success has-feedback");

						$("#nom").removeClass("alert  alert-danger");
						$("#nom").addClass("alert  alert-success");
						$("#erreur_nom").css("color", "green");
						return true;
					} else {

						$("#erreur_nom").show();
						$("div.nom").removeClass("has-success has-feedback");
						$("div.nom").addClass("has-error has-feedback");

						$("#erreur_nom").css("color", "red").html(data);
						$("#nom").removeClass("alert  alert-success");
						$("#nom").addClass("alert  alert-danger");


					}

				}

			});

		}




		function yassa_prenom() {
			$.ajax({
				type: "post",
				url: "traitement.php",
				data: {
					'prenom_check': $("#prenom").val()
				},
				success: function (data) {
					if (data == "success") {
						$("#erreur_prenom").empty();

						$("div.prenom").removeClass("has-error has-feedback");

						$("div.prenom").addClass("has-success has-feedback");

						$("#prenom").removeClass("alert  alert-danger");
						$("#prenom").addClass("alert  alert-success");
						$("#erreur_prenom").css("color", "green");
						return true;
					} else {
						$("div.prenom").removeClass("has-success has-feedback");
						$("div.prenom").addClass("has-error has-feedback");

						$("#erreur_prenom").css("color", "red").html(data);
						$("#prenom").removeClass("alert  alert-success");
						$("#prenom").addClass("alert  alert-danger");


					}

				}

			});

		}




		function yassa_tel() {
			$.ajax({
				type: "post",
				url: "traitement.php",
				data: {
					'numero_de_tel_check': $("#numero_de_tel").val()
				},
				success: function (data) {
					if (data == "success") {
						$("#erreur_numero_de_tel").empty();

						$("div.numero_de_tel").removeClass("has-error has-feedback");

						$("div.numero_de_tel").addClass("has-success has-feedback");

						$("#numero_de_tel").removeClass("alert  alert-danger");
						$("#numero_de_tel").addClass("alert  alert-success");
						$("#erreur_numero_de_tel").css("color", "green");
						return true;
					} else {
						$("div.numero_de_tel").removeClass("has-success has-feedback");
						$("div.numero_de_tel").addClass("has-error has-feedback");

						$("#erreur_numero_de_tel").css("color", "red").html(data);
						$("#numero_de_tel").removeClass("alert  alert-success");
						$("#numero_de_tel").addClass("alert  alert-danger");


					}

				}

			});

		}

		function email_amar() {
			$.ajax({
				type: "post",
				url: "traitement.php",
				data: {

					'email_check': $("#email").val()
				},
				success: function (data) {
					if (data == "success") {

						$("#output_email").empty();
						$("div.email").removeClass("has-error has-feedback");
						$("div.email").addClass("has-success has-feedback");
						$("#email").removeClass("alert  alert-danger");
						$("#email").addClass("alert  alert-success");
						$("#output_email").css("color", "green");
						return true;
					} else {

						$("div.email").removeClass("has-success has-feedback");
						$("div.email").addClass("has-error has-feedback");

						$("#output_email").css("color", "red").html(data);
						$("#email").removeClass("alert  alert-success");
						$("#email").addClass("alert  alert-danger");




					}


				}


			});
		}

		function yassa_password() {

			$.ajax({
				type: "post",
				url: "traitement.php",
				data: {
					'pass1_check': $("#pass1").val(),
					'pass2_check': $("#pass2").val()
				},
				success: function (data) {
					if (data == "success") {
						$("#output_pass2").empty();
						$("div.pass2").removeClass("has-error has-feedback");

						$("div.pass2").addClass("has-success has-feedback");

						$("#pass2").removeClass("alert  alert-danger");
						$("#pass2").addClass("alert  alert-success");
						$("#output_pass2").css("color", "green");




						$("#output_pass1").empty();
						$("div.pass1").removeClass("has-error has-feedback");

						$("div.pass1").addClass("has-success has-feedback");

						$("#pass1").removeClass("alert  alert-danger");
						$("#pass1").addClass("alert  alert-success");
						$("#output_pass1").css("color", "green");
					} else {

						$("#output_pass2").css("color", "red").html(data);

						$("#output_pass2").css("color", "red");

						$("div.pass2").removeClass("has-success has-feedback");
						$("div.pass2").addClass("has-error has-feedback");


						$("#pass2").removeClass("alert  alert-success");
						$("#pass2").addClass("alert  alert-danger");

					}


				}
			});
		}



		function yassa_nombre_visite() {
			$.ajax({
				type: "post",
				url: "traitement.php",
				data: {
					'nombre_visite_check': $("#nombre_visite").val()
				},
				success: function (data) {
					if (data == "success") {
						$("#erreur_nombre_visite").empty();
						$("div.nombre_visite").removeClass("has-error has-feedback");
						$("div.nombre_visite").addClass("has-success has-feedback");
						$("#nombre_visite").removeClass("alert  alert-danger");
						$("#nombre_visite").addClass("alert  alert-success");
						$("#erreur_nombre_visite").css("color", "green");
						return true;
					} else {
						$("#erreur_nombre_visite").empty();
						$("div.nombre_visite").removeClass("has-success has-feedback");
						$("div.nombre_visite").addClass("has-error has-feedback");
						$("#erreur_nombre_visite").css("color", "red").html(data);
						$("#nombre_visite").removeClass("alert  alert-success");
						$("#nombre_visite").addClass("alert  alert-danger");


					}

				}

			});

		}
