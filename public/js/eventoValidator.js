$(document).ready(function () {
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

            immagine: "required"
        },

        messages: {
            titolo: "Inserisci un titolo",

            descrizione: "Inserisci una descrizione",

            data1: "Inserisci una data",

            inizio1: "Inserisci un'ora di inizio",

            fine1: "Inserisci un'ora di fine",

            immagine: "Inserisci una immagine"
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