$(document).ready(function () {

    //controlla dimensioni
    $.validator.addMethod("dimFile", function (val, element) {

        var size = element.files[0].size;
        if (size > 3100000)// checks the file more than 3 MB
        {
            return false;
        } else {
            return true;
        }

    }, "max 3 MB");

    // metodo per validare immagini
    $.validator.addMethod("accept", function(value, element, param) {
        // Split mime on commas in case we have multiple types we can accept
        var typeParam = typeof param === "string" ? param.replace(/\s/g, "").replace(/,/g, "|") : "image/*",
            optionalValue = this.optional(element),
            i, file;

        // Element is optional
        if (optionalValue) {
            return optionalValue;
        }

        if ($(element).attr("type") === "file") {
            // If we are using a wildcard, make it regex friendly
            typeParam = typeParam.replace(/\*/g, ".*");

            // Check if the element has a FileList before checking each file
            if (element.files && element.files.length) {
                for (i = 0; i < element.files.length; i++) {
                    file = element.files[i];

                    // Grab the mimetype from the loaded file, verify it matches
                    if (!file.type.match(new RegExp( "\\.?(" + typeParam + ")$", "i"))) {
                        return false;
                    }
                }
            }
        }

        // Either return true because we've validated each file, or because the
        // browser does not support element.files and the FileList feature
        return true;
    }, $.validator.format("Puoi caricare solo immagini"));

    $("#categoriaform").validate({

        highlight : function(element) {

            $(element).closest('.form-group')
                .addClass('has-error');
        },

        unhighlight : function(element) {

            $(element).closest('.form-group')
                .removeClass('has-error');
        },

        errorElement : 'span',

        errorClass : 'help-block',

        errorPlacement : function(error,
                                  element) {

            if (element.parent('.input-group').length) {

                error.insertAfter(element
                    .parent());

            } else {

                error.insertAfter(element);

            }

        },

        rules: {
            // simple rule, converted to {required:true}
            nome: "required",
            // compound rule
            descrizione: "required",

            'immagine':{
                required: true,
                accept: "image/*",
                dimFile:true
            },

            'immagineEdit':{
                accept: "image/*",
                dimFile:true
            }
        },

        messages: {
            nome: "Inserisci un nome",

            descrizione: "Inserisci una descrizione",

            'immagine':{
                required: "Inserisci un immagine",
            },
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
