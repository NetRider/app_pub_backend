$(document).ready(function () {
    $("#piattoform").validate({

        errorClass: "my-error-class",

        rules: {
            // simple rule, converted to {required:true}
            nome: "required",
            // compound rule
            descrizione: "required",

            prezzo: "required",

            immagine: "required"
        },

        messages: {
            nome: "Inserisci un nome",

            descrizione: "Inserisci una descrizione",

            prezzo: "Inserisci un prezzo",

            immagine: "Inserisci una immagine"
        }
    });

	$('.piattiModifier').on('click touchstart', function(button) {
		var idPiatto = button.toElement.id;
		location.href='/editPiatto/' + idPiatto;
   });
});
