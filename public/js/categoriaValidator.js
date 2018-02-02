$(document).ready(function () {
    $("#categoriaform").validate({

        errorClass: "my-error-class",

        rules: {
            // simple rule, converted to {required:true}
            nome: "required",
            // compound rule
            descrizione: "required",

            immagine: "required"
        },

        messages: {
            nome: "Inserisci un nome",

            descrizione: "Inserisci una descrizione",

            immagine: "Inserisci una immagine"
        }
    });

	$('.categoriaModifier').on('click touchstart', function(button) {
		var idCategoria;

		if(button.toElement == null) {
			idCategoria = button.currentTarget.id;
		}else {
			idCategoria = button.toElement.id;
		}
		location.href='/editCategoria/' + idCategoria;
   });

   $('.categoriaDelete').on('click touchstart', function(button) {
	   var idCategoria;

	   if(button.toElement == null) {
		   idCategoria = button.currentTarget.id;
	   }else {
		   idCategoria = button.toElement.id;
	   }
	   location.href='/destroyCategoria' + idCategoria;
	 });

});
