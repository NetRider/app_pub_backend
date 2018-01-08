@extends('welcome')

@section('title', 'Inserisci Evento')

@section('content')
    <h2 class="white">Crea un nuovo evento</h2>
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-danger" onclick="location.href='/listEventi';"><span class="glyphicon glyphicon-remove"></span> Annulla</button>
        </div>
    </div>
    <hr>
    <div class="container" style="background-color: white;">
    <form method="post" action='/insertEvento' enctype="multipart/form-data" id="eventoform" style="background-color: white; padding-top: 10px;">
        {{ csrf_field() }}
        <div class="row">
            <div class="form-group col-md-4 col-md-offset-3">
                <label for="titolo">Titolo evento:</label>
                <input type="text" class="form-control" name="titolo">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-md-offset-3">
                <label for="descrizione">Descrizione:</label>
                <textarea class="form-control" rows="5" name="descrizione"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-md-offset-3">
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
            <div class="form-group col-md-4 col-md-offset-3">
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
            <div class="form-group col-md-4 col-md-offset-3">
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
            <div class="form-group col-md-4 col-md-offset-3">
                <label for="immagine">Immagine:</label>
                <input type="file" name="immagine">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-md-offset-6">
                <button type="submit" id="a" class="btn btn-success" style="margin-left:38px">Crea Evento</button>
            </div>
        </div>

        <input type="hidden" id="data" name="data">
        <input type="hidden" id="orainizio" name="orainizio">
        <input type="hidden" id="orafine" name="orafine">

    </form>
    </div>
@endsection
