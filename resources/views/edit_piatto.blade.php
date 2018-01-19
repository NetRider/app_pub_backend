@extends('welcome')

@section('title', 'Modifica Piatto')

@section('content')
    <h2 style="color: white;">Modifica piatto</h2><br/>
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-danger" onclick="location.href='/listPiatti';"><span class="glyphicon glyphicon-remove"></span> Annulla</button>
        </div>
    </div>
    <hr>
    <div class="container" style="background-color: white;">
    <form method="post" action='/updatePiatto' enctype="multipart/form-data" style="background-color: white; padding-top: 10px;" id="piattoform">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" name="id" value="{{$piatto->id}}">
        <div class="row">
            <div class="form-group col-md-5 col-md-offset-1">
                <label for="nome">Nome piatto:</label>
                <input type="text" class="form-control" name="nome" value="{{$piatto->nome}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-5 col-md-offset-1">
                <label for="descrizione">Descrizione:</label>
                <textarea class="form-control" rows="5" name="descrizione">{{$piatto->descrizione}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-5 col-md-offset-1">
                <label for="descrizione">Prezzo:</label>
				<textarea class="form-control" rows="5" name="prezzo">{{$piatto->prezzo}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3 col-md-offset-1">
                <label for="menu_id">Categoria:</label><br>
                <select name="categoria_id" style="color: black">
                    @foreach ($categorie as $c)
                        @if($piatto->categoria_id == $c->id)
                            <option value="{{$c->id}}" selected>{{$c->nome}}</option>
                        @else
                            <option value="{{$c->id}}">{{$c->nome}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="aggiunte">Aggiunte:</label> <br>
				@if ($piatto->aggiunte)
					<input type="checkbox" name="aggiunte" value="true" checked> Disponibili
				@else
					<input type="checkbox" name="aggiunte" value="true"> Disponibili
				@endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-5 col-md-offset-1">
                <label for="immagineEdit">Immagine:</label><br>
                <img class="clip" src="{{Storage::url($piatto->immagine)}}" alt="Image not found" height="50px" width="auto">
                <input type="file" name="immagineEdit">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-md-offset-6">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Modifica Piatto</button>
            </div>
        </div>
    </form>
    </div>
@endsection
