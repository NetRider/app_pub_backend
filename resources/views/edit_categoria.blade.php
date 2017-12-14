<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modifica categoria </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Modifica categoria</h2><br/>
    <form method="post" action='/updateCategoria' enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" class="form-control" name="id" value="{{$categoria->id}}">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="nome">Nome Categoria:</label>
                <input type="text" class="form-control" name="nome" value="{{$categoria->nome}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="descrizione">Descrizione:</label>
                <input type="text" class="form-control" name="descrizione" value="{{$categoria->descrizione}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="menu_id">Menu:</label>
                <select name="menu_id">
                    @foreach ($menus as $m)
                        <option value="{{$m->id}}">{{$m->nome}}</option>
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
                <button type="submit" class="btn btn-success" style="margin-left:38px">Modifica Categoria</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>