$(document).ready(function () {
    $("#piattoform").validate({

        errorClass: "my-error-class",

        rules: {
            // simple rule, converted to {required:true}
            nome: "required",
            // compound rule
            descrizione: "required",

            prezzo: {
                required: true,
                number: true
            },

            immagine: "required"
        },

        messages: {
            nome: "Inserisci un nome",

            descrizione: "Inserisci una descrizione",

            prezzo: {
                required: "Inserisci un prezzo",
                number: "Inserisci un numero"
            },

            immagine: "Inserisci una immagine"
        }
    });
});