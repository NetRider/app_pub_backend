@extends('welcome')

@section('title', 'Modifica Categoria')

@section('content')
    <h2 style="color: white;">Modifica categoria</h2><br/>
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-danger" onclick="location.href='/listCategorie';"><span class="glyphicon glyphicon-remove"></span> Annulla</button>
        </div>
    </div>
    <hr>
    <div class="container" style="background-color: white;">
    <form method="post" action='/updateCategoria' enctype="multipart/form-data" style="background-color: white; padding-top: 10px;" id="categoriaform">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" name="id" value="{{$categoria->id}}">
        <div class="row">
            <div class="form-group col-md-4 col-md-offset-3">
                <label for="nome">Nome Categoria:</label>
                <input type="text" class="form-control" name="nome" value="{{$categoria->nome}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-md-offset-3">
                <label for="descrizione">Descrizione:</label>
                <textarea class="form-control" rows="5" name="descrizione">{{$categoria->descrizione}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4 col-md-offset-3">
                <label for="menu_id">Menu:</label><br>
                <select name="menu_id" style="color: black">
                    @foreach ($menus as $m)
                        <option value="{{$m->id}}">{{$m->nome}}</option>
                    @endforeach
                </select>
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
                <button type="submit" class="btn btn-success" style="margin-left:38px">Modifica Categoria</button>
            </div>
        </div>
    </form>
    </div>
@endsection
