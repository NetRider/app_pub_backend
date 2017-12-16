<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Monthy's webservice </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Lista degli eventi</h2><br/>
    @foreach ($eventi as $e)
        <div class="row">
            <div class="col-md-4">
						<span>{{$e->titolo}}<span>
            </div>
            <div class="col-md-4">
						<span>{{$e->descrizione}}<span>
            </div>
            <div class="col-md-4">
                <img src="{{Storage::url($e->immagine)}}" alt="Image not found">
            </div>
            <button class="btn btn-default" onclick="location.href='/editEvento/{{$e->id}}';">Modifica</button>
            <button class="btn btn-danger" onclick="location.href='/destroyEvento/{{$e->id}}';">Elimina</button>
        </div>
    @endforeach
    <button class="btn btn-succes" onclick="location.href='/formEvento';">Aggiungi Evento</button>
</div>
</body>
</html>