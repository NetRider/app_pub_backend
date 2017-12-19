@extends('welcome')

@section('title', 'Lista Eventi')

@section('content')
	<h2 style="color: white;">Lista degli eventi</h2><br/>
	<div class="row">
		<div class="col-md-2">
			<button class="btn btn-primary" onclick="location.href='/';"> <span class="glyphicon glyphicon-home"></span> Torna alla home</button>
		</div>
		<div class="col-md-offset-8 col-md-2">
			<button class="btn btn-success" onclick="location.href='/formEvento';"> <span class="glyphicon glyphicon-plus"></span> Aggiungi Evento</button>
		</div>
	</div>
	<hr>
	<table  class="table table-striped">
		<thead>
		<tr>
			<th scope="col">Titolo</th>
			<th scope="col">Descrizione</th>
			<th scope="col">Data</th>
			<th scope="col">Ora inizio</th>
			<th scope="col">Ora fine</th>
			<th scope="col">Immagine</th>
			<th scope="col"></th>
		</tr>
		</thead>
		<tbody>
	@foreach ($eventi as $e)
		@php
		$d = substr($e->data, 4, 7).substr($e->data, 19, 23);
		$oi = substr($e->ora_inizio, 10, 10);
		$of = substr($e->ora_fine, 10, 10);
		@endphp
		<tr>
			<td>{{$e->titolo}}</td>
			<td>{{$e->descrizione}}</td>
			<td>{{$d}}</td>
			<td>{{$oi}}</td>
			<td>{{$of}}</td>
			<td><img class="clip" src="{{Storage::url($e->immagine)}}" alt="Image not found" height="50" width="auto"></td>
			<td><button class="btn btn-default" onclick="location.href='/editEvento/{{$e->id}}';"><span class="glyphicon glyphicon-edit"></span> Modifica</button>
				<button class="btn btn-danger" onclick="location.href='/destroyEvento/{{$e->id}}';"><span class="glyphicon glyphicon-trash"></span> Elimina</button>
			</td>
		</tr>
	@endforeach
		</tbody>
	</table>
@endsection
