@extends('welcome')

@section('title', 'Lista dei piatti')

@section('content')
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
	<button class="btn btn-succes" onclick="location.href='/formPiatto';">Aggiungi Piatto</button>
@endsection
