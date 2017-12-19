@extends('welcome')

@section('title', 'Lista Piatti')

@section('content')
	<h2 style="color: white;">Lista dei piatti</h2><br/>
	<div class="row">
		<div class="col-md-2">
			<button class="btn btn-primary" onclick="location.href='/';"><span class="glyphicon glyphicon-home"></span> Torna alla home</button>
		</div>
		<div class="col-md-offset-8 col-md-2">
			<button class="btn btn-success" onclick="location.href='/formPiatto';"><span class="glyphicon glyphicon-plus"></span> Aggiungi Piatto</button>
		</div>
	</div>
	<hr>
	<table  class="table table-striped">
		<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">Descrizione</th>
			<th scope="col">Prezzo</th>
			<th scope="col">Categoria</th>
			<th scope="col">Immagine</th>
			<th scope="col"></th>
		</tr>
		</thead>
		<tbody>
	@foreach ($piatti as $p)
		<tr>
			<td>{{$p->nome}}</td>
			<td>{{$p->descrizione}}</td>
			<td>{{$p->prezzo}}€</td>
			<td>{{$p->categoria_id}}</td>
			<td><img class="clip" src="{{Storage::url($p->immagine)}}" alt="Image not found" height="50px" width="auto"></td>
			<td><button class="btn btn-default" onclick="location.href='/editPiatto/{{$p->id}}';"><span class="glyphicon glyphicon-edit"></span> Modifica</button>
				<button class="btn btn-danger" onclick="location.href='/destroyPiatto/{{$p->id}}';"><span class="glyphicon glyphicon-trash"></span> Elimina</button>
			</td>
		</tr>
	@endforeach
@endsection
