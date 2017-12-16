@extends('welcome')

@section('title', 'Lista menu')

@section('content')
	<h2>Lista degli Menù</h2><br/>
	<div class="row">
		<div class="col-md-2">
			<button class="btn btn-primary" onclick="location.href='/';"> <span class="glyphicon glyphicon-home"></span> Torna alla home</button>
		</div>
		<div class="col-md-offset-8 col-md-2">
			<button class="btn btn-success" onclick="location.href='/formMenu';"> <span class="glyphicon glyphicon-plus"></span> Aggiungi Menù</button>
		</div>
	</div>
	<hr>
	@foreach ($menu as $m)
		<div class="row">
			<div class="col-md-4">
				<span>{{$m->nome}}<span>
			</div>
			<div class="col-md-4">
				<img src="{{Storage::url($m->immagine)}}" alt="Image not found">
			</div>
			<button class="btn btn-default" onclick="location.href='/editMenu/{{$m->id}}';"><span class="glyphicon glyphicon-edit"></span> Modifica</button>
			<button class="btn btn-danger" onclick="location.href='/destroyMenu/{{$m->id}}';"><span class="glyphicon glyphicon-trash"></span> Elimina</button>
		</div>
	@endforeach
	<button class="btn btn-succes" onclick="location.href='/formMenu';">Aggiungi Menù</button>
@endsection
