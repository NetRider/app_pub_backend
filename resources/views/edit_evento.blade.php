@extends('welcome')

@section('title', 'Inserisci Evento')

@section('content')
<div class="container">
    <h2 class="white">Modifica evento</h2><br/>
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-danger" onclick="location.href='/listEventi';"><span class="glyphicon glyphicon-remove"></span> Annulla</button>
        </div>
    </div>
    <hr>
    <form method="post" action='/updateEvento' enctype="multipart/form-data" id="eventoform">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" name="id" value="{{$evento->id}}">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="titolo" class="white">Titolo evento:</label>
                <input type="text" class="form-control" name="titolo" value="{{$evento->titolo}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="descrizione" class="white">Descrizione:</label>
                <textarea class="form-control" rows="5" name="descrizione">{{$evento->descrizione}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class='col-md-4'></div>
            <div class="form-group col-md-4">
                <label for="datainizio" class="white">Data:</label>
                <div class='input-group' id="datetimepicker1">
                    <input type='text' class="form-control" id="dataev" name="data1" value="{{$evento->data}}"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-md-4'></div>
            <div class="form-group col-md-4">
                <label for="datafine" class="white">Ora Inizio:</label>
                <div class='input-group' id="datetimepicker2">
                    <input type='text' class="form-control" id="inizioev" name="inizio1" value="{{$evento->ora_inizio}}"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-md-4'></div>
            <div class="form-group col-md-4">
                <label for="datafine" class="white">Ora Fine:</label>
                <div class='input-group' id="datetimepicker3">
                    <input type='text' class="form-control" id="fineev" name="fine1" value="{{$evento->ora_fine}}"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="immagine" class="white">Immagine:</label>
                <input type="file" name="immagine" class="white">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" id="a" style="margin-left:38px">Modifica Evento</button>
            </div>
        </div>

        <input type="hidden" id="data" name="data">
        <input type="hidden" id="orainizio" name="orainizio">
        <input type="hidden" id="orafine" name="orafine">
    </form>
</div>
