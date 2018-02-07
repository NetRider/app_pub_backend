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

    var startdate = new Date();//today
    $('#datetimepicker1').datetimepicker({
        format: 'ddd MMM DD YYYY',
        locale: 'it',
        minDate : startdate
    });
    $('#datetimepicker2').datetimepicker({
        format: 'HH:mm:ss',
        locale: 'it',
        minDate : startdate
    });
    $('#datetimepicker3').datetimepicker({
        format: 'HH:mm:ss',
        locale: 'it',
        minDate : startdate
    });
    $("#eventoform").validate({

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
            titolo: "required",
            // compound rule
            descrizione: "required",

            data1: "required",

            inizio1: "required",

            fine1: "required",

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
            titolo: "Inserisci un titolo",

            descrizione: "Inserisci una descrizione",

            data1: "Inserisci una data",

            inizio1: "Inserisci un'ora di inizio",

            fine1: "Inserisci un'ora di fine",

            'immagine':{
                required: "Inserisci un immagine",
            },
        },
        submitHandler: function(form) {
            var data = [$('#dataev').val().slice(0, 10), ' 12:34:56', $('#dataev').val().slice(10)].join('');
            $( "#data" ).val(data);
            var orainizio = 'dom nov 12 '.concat($('#inizioev').val()).concat(' 2017');
            $( "#orainizio" ).val(orainizio);
            var orafine = 'dom nov 12 '.concat($('#fineev').val()).concat(' 2017');
            $( "#orafine" ).val(orafine);
            $(form).submit();
        }
    });
});