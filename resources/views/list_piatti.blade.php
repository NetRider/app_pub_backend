@extends('welcome')

@section('title', 'Lista dei piatti')

@section('content')
	<h2>Lista dei piatti</h2><br/>
	<div class="row">
		<div class="col-md-2">
			<button class="btn btn-primary" onclick="location.href='/';"><span class="glyphicon glyphicon-home"></span> Torna alla home</button>
		</div>
		<div class="col-md-offset-8 col-md-2">
			<button class="btn btn-success" onclick="location.href='/formPiatto';"><span class="glyphicon glyphicon-plus"></span> Aggiungi Piatto</button>
		</div>
	</div>
	<hr>
	@foreach ($piatti as $p)
		<div class="row">

			<div class="col-md-2">
						<span>{{$p->nome}}</span>
			</div>
			<div class="col-md-3">
						<span>{{$p->descrizione}}</span>
			</div>
			<div class="col-md-1">
						<span>{{$p->prezzo}}€</span>
			</div>
			<div class="col-md-1">
				<span>{{$p->categoria_id}}</span>
			</div>
			<div class="col-md-3">
				<img src="{{Storage::url($p->immagine)}}" alt="Image not found" height="150" width="300">
			</div>
			<div class="col-md-2">
			<button class="btn btn-default" onclick="location.href='/editPiatto/{{$p->id}}';"><span class="glyphicon glyphicon-edit"></span> Modifica</button>
			<button class="btn btn-danger" onclick="location.href='/destroyPiatto/{{$p->id}}';"><span class="glyphicon glyphicon-trash"></span> Elimina</button>
			</div>
		</div>
	@endforeach
@endsection
