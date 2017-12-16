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
    <script type="text/javascript" src="{{ URL::asset('datetimepicker/js/bootstrap-datetimepicker.min.js')}}"
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
    <form method="post" action='/insertEvento' enctype="multipart/form-data">
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
                <input type="text" class="form-control" name="descrizione">
            </div>
        </div>
        <div class="row">
            <div class='col-md-4'></div>
            <div class="form-group col-md-4">
                <label for="datainizio">Data Inizio:</label>
                <div class='input-group' id="datetimepicker1">
                    <input type='text' class="form-control" name="datainizio" id="datetimepicker3"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-md-4'></div>
            <div class="form-group col-md-4">
                <label for="datafine">Data Fine:</label>
                <div class='input-group' id="datetimepicker2">
                    <input type='text' class="form-control" name="datafine"/>
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
                <button type="submit" class="btn btn-success" style="margin-left:38px">Crea Evento</button>
            </div>
        </div>
    </form>
    <input type="hidden" id="q">
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datetimepicker1').datetimepicker({
            format: 'ddd MMM DD HH:mm:ss YYYY',
            locale: 'it'
        });
        $('#datetimepicker2').datetimepicker({
            format: 'ddd MMM DD HH:mm:ss YYYY',
            locale: 'it'
        });
    });
    $( "#datetimepicker3" ).change(function() {
        $( "#q" ).val($('#datetimepicker1').data("DateTimePicker").date());
    });
</script>
</body>
</html>
