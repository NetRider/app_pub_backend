@extends('welcome')

@section('title', 'Lista Eventi')

@section('content')
	<h2>Lista degli eventi</h2><br/>
	@foreach ($eventi as $e)
		<div class="row">
			<div class="col-md-3">
						<span>{{$e->titolo}}<span>
			</div>
			<div class="col-md-3">
						<span>{{$e->descrizione}}<span>
			</div>
			<div class="col-md-1">
						<span>{{$e->data_inizio}}<span>
			</div>
			<div class="col-md-1">
						<span>{{$e->data_fine}}<span>
			</div>
			<div class="col-md-2">
				<img src="{{Storage::url($e->immagine)}}" alt="Image not found">
			</div>
			<div class="col-md-2">
			<button class="btn btn-default" onclick="location.href='/editEvento/{{$e->id}}';">Modifica</button>
			<button class="btn btn-danger" onclick="location.href='/destroyEvento/{{$e->id}}';">Elimina</button>
			</div>
		</div>
	@endforeach
	<button class="btn btn-succes" onclick="location.href='/formEvento';">Aggiungi Evento</button>
@endsection
