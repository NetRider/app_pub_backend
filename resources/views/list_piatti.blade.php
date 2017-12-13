<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Lista delle categorie</h2><br/>
    @foreach ($piatti as $p)
        <div class="row">
            <div class="col-md-4">
						<span>{{$p->nome}}<span>
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
        </div>
    @endforeach
</div>
</body>
</html>