@extends('welcome')

@section('title', 'Lista menu')

@section('content')
	<h2>Lista dei Menù</h2><br/>
	@foreach ($menu as $m)
		<div class="row">
			<div class="col-md-4">
				<span>{{$m->nome}}<span>
			</div>
			<div class="col-md-4">
				<img src="{{Storage::url($m->immagine)}}" alt="Image not found">
			</div>
			<button class="btn btn-default" onclick="location.href='/editMenu/{{$m->id}}';">Modifica</button>
			<button class="btn btn-danger" onclick="location.href='/destroyMenu/{{$m->id}}';">Elimina</button>
		</div>
	@endforeach
	<button class="btn btn-succes" onclick="location.href='/formMenu';">Aggiungi Menù</button>
@endsection
