<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Monthy's webservice </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <script>
        $(document).ready(function(){
            var date_input=$('input[name="datainizio"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            var options={
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input.datepicker(options);
        })
    </script>
</head>
<body>
<div class="container">
    <h2>Modifica evento</h2><br/>
    <form method="post" action='/updateEvento' enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" name="id" value="{{$evento->id}}">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="titolo">Titolo evento:</label>
                <input type="text" class="form-control" name="titolo" value="{{$evento->titolo}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="descrizione">Descrizione:</label>
                <input type="text" class="form-control" name="descrizione" value="{{$evento->descrizione}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="datainizio">Data Inizio:</label>
                <label class="control-label" for="datainizio"></label>
                <input class="form-control" id="datainizio" name="datainizio" placeholder="MM/DD/YYY" type="text"/>
            </div>
                <input type="text" class="form-control" name="datainizio" value="{{$evento->data_inizio}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="datafine">Data Fine:</label>
                <input type="text" class="form-control" name="datafine" value="{{$evento->data_fine}}">
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
                <button type="submit" class="btn btn-success" style="margin-left:38px">Modifica Evento</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
