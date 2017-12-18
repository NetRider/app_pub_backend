<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Monthy's webservice </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
    <script type="text/javascript" src="{{ URL::asset('js/jquery/jquery-1.8.3.min.js')}}" charset="UTF-8"></script>
    <script type="text/javascript" src="{{ URL::asset('moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('moment/locales/it.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('datetimepicker/js/bootstrap-datetimepicker.min.js')}}"
            charset="UTF-8"></script>
    <script type="text/javascript" src="{{ URL::asset('validator/dist/jquery.validate.js')}}"
            charset="UTF-8"></script>
</head>
<body>
<div class="container">
    <h2>Crea un nuovo evento</h2>
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-danger" onclick="location.href='/listEventi';"><span class="glyphicon glyphicon-remove"></span> Annulla</button>
        </div>
    </div>
    <hr>
    <form method="post" action='/insertEvento' enctype="multipart/form-data" id="eventoform">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="titolo">Titolo evento:</label>
                <input type="text" class="form-control" name="titolo">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="descrizione">Descrizione:</label>
                <textarea class="form-control" rows="5" name="descrizione"></textarea>
            </div>
        </div>
        <div class="row">
            <div class='col-md-4'></div>
            <div class="form-group col-md-4">
                <label for="datainizio">Data:</label>
                <div class='input-group' id="datetimepicker1">
                    <input type='text' class="form-control" id="dataev" name="data1"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-md-4'></div>
            <div class="form-group col-md-4">
                <label for="datafine">Ora Inizio:</label>
                <div class='input-group' id="datetimepicker2">
                    <input type='text' class="form-control" id="inizioev" name="inizio1"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-md-4'></div>
            <div class="form-group col-md-4">
                <label for="datafine">Ora Fine:</label>
                <div class='input-group' id="datetimepicker3">
                    <input type='text' class="form-control" id="fineev" name="fine1"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="immagine">Immagine:</label>
                <input type="file" name="immagine">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="form-group col-md-4">
                <button type="submit" id="a" class="btn btn-success" style="margin-left:38px">Crea Evento</button>
            </div>
        </div>

        <input type="hidden" id="data" name="data">
        <input type="hidden" id="orainizio" name="orainizio">
        <input type="hidden" id="orafine" name="orafine">

    </form>

</div>
<script type="text/javascript">
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

</script>
</body>
</html>
