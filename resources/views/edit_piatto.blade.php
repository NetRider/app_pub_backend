@extends('welcome')

@section('title', 'Modifica piatto')

@section('content')
    <h2>Modifica piatto</h2><br/>
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-danger" onclick="location.href='/listPiatti';"><span class="glyphicon glyphicon-remove"></span> Annulla</button>
        </div>
    </div>
    <hr>
    <form method="post" action='/updatePiatto' enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" name="id" value="{{$piatto->id}}">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="nome">Nome piatto:</label>
                <input type="text" class="form-control" name="nome" value="{{$piatto->nome}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="descrizione">Descrizione:</label>
                <textarea class="form-control" rows="5" name="descrizione" value="{{$piatto->descrizione}}"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="descrizione">Prezzo:</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="prezzo" value="{{$piatto->prezzo}}">
                    <div class="input-group-addon">
                        €
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="menu_id">Categoria:</label>
                <select name="categoria_id">
                    @foreach ($categorie as $c)
                        <option value="{{$c->id}}">{{$c->nome}}</option>
                    @endforeach
                </select>
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
                <button type="submit" class="btn btn-success" style="margin-left:38px">Modifica Piatto</button>
            </div>
        </div>
    </form>
@endsection
