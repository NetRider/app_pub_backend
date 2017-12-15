<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Monthy's webservice  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Lista dei piatti</h2><br/>
    @foreach ($piatti as $p)
        <div class="row">

            <div class="col-md-4">
						<span>{{$p->nome}}-{{$p->id}}<span>
            </div>
            <div class="col-md-4">
						<span>{{$p->descrizione}}<span>
            </div>
            <div class="col-md-4">
						<span>{{$p->categoria_id}}<span>
            </div>
            <div class="col-md-4">
                <img src="{{Storage::url($p->immagine)}}" alt="Image not found">
            </div>
            <button class="btn btn-default" onclick="location.href='/editPiatto/{{$p->id}}';">Modifica</button>
            <button class="btn btn-danger" onclick="location.href='/destroyPiatto/{{$p->id}}';">Elimina</button>
        </div>
    @endforeach
</div>
</body>
</html>