$(function(){
    $("#form-register").validate({
        rules: {
            nom : {
                required : true,
            },
            prenom: {
                required : true,
            }
        },
        messages: {
            nom: {
                required: "Entrez un nom s'il vous plait"
            },
            email: {
                required: "Entrez un email s'il vous plait"
            },
            prenom: {
                required: "Entrez un prenom s'il vous plait"
            },
            date: {
                required: "Entrez une date s'il vous plait"
            },
            temps: {
                required: "Entrez le temps s'il vous plait"
            },
            telephone: {
                required: "Entrez un numero de telephone s'il vous plait"
            },
            adresse1: {
                required: "l'adresse est obligatoire"
            },
           
           
        }
    });
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        // enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back',
            next : '<i class="zmdi zmdi-arrow-right"></i>',
            finish : '<i class="zmdi zmdi-arrow-right"></i>',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            var date = $('#date').val();
            var temps = $('#temps').val();
            var nom = $('#nom').val();
            var prenom = $('#prenom').val();
            
            var telephone = $('#telephone').val();
            var email = $('#email').val();

            var adresse1 = $('#adresse1').val();
            var adresse2 = $('#adresse2').val();
            var pays = $('#pays').val();
            var ville = $('#ville').val();
            var code_postal = $('#code_postal').val();

            var ID_commande = $('#ID_commande').val();
            var poids = $('#poids').val();
            var paiment = $('#paiment').val();
            var prix = $('#prix').val();
            var description = $('#description').val();

            $('#date-val').text(date);
            $('#temps-val').text(temps);
            $('#nom-val').text(nom);
            $('#prenom-val').text(prenom);
            $('#telephone-val').text(telephone);
            $('#email-val').text(email);
            $('#adresse1-val').text(adresse1);
            $('#adresse2-val').text(adresse2);
            $('#pays-val').text(pays);
            $('#ville-val').text(ville);
            $('#code_postal-val').text(code_postal);




            $('#ID_commande-val').text(ID_commande);
            $('#poids-val').text(poids);
            $('#paiment-val').text(paiment);
            $('#prix-val').text(prix);
            $('#description-val').text(description);

            $("#form-register").validate().settings.ignore = ":disabled,:hidden";
            return $("#form-register").valid();
        }
    });
});
