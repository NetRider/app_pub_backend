$(document).ready(function () {
    $('#datetimepicker1').datetimepicker({
        format: 'ddd MMM DD YYYY',
        locale: 'it'
    });
    $('#datetimepicker2').datetimepicker({
        format: 'HH:mm:ss',
        locale: 'it'
    });
    $('#datetimepicker3').datetimepicker({
        format: 'HH:mm:ss',
        locale: 'it'
    });
    $("#eventoform").validate({

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