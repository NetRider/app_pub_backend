@extends('welcome')

@section('title', 'Lista Eventi')

@section('content')
	<h2>Lista degli eventi</h2><br/>
	<div class="row">
		<div class="col-md-2">
			<button class="btn btn-primary" onclick="location.href='/';"> <span class="glyphicon glyphicon-home"></span> Torna alla home</button>
		</div>
		<div class="col-md-offset-8 col-md-2">
			<button class="btn btn-success" onclick="location.href='/formEvento';"> <span class="glyphicon glyphicon-plus"></span> Aggiungi Evento</button>
		</div>
	</div>
	<hr>
	@foreach ($eventi as $e)
		<div class="row">
			<div class="col-md-3">
						<span>{{$e->titolo}}</span>
			</div>
			<div class="col-md-3">
						<span>{{$e->descrizione}}</span>
			</div>
			<div class="col-md-1">
						<span>{{$e->data_inizio}}</span>
			</div>
			<div class="col-md-1">
						<span>{{$e->data_fine}}</span>
			</div>
			<div class="col-md-2">
				<img src="{{Storage::url($e->immagine)}}" alt="Image not found" height="150" width="300">
			</div>
			<div class="col-md-2">
			<button class="btn btn-default" onclick="location.href='/editEvento/{{$e->id}}';"><span class="glyphicon glyphicon-edit"></span> Modifica</button>
			<button class="btn btn-danger" onclick="location.href='/destroyEvento/{{$e->id}}';"><span class="glyphicon glyphicon-trash"></span> Elimina</button>
			</div>
		</div>
	@endforeach
@endsection
