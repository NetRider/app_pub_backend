@extends('welcome')

@section('title', 'Lista categorie')

@section('content')
	<h2>Lista delle categorie</h2><br/>
	@foreach ($categorie as $categoria)
		<div class="row">
			<div class="col-md-2">
				<span>{{$categoria->nome}}<span>
			</div>
			<div class="col-md-2">
				<span>{{$categoria->descrizione}}<span>
			</div>
			<div class="col-md-4">
				<img src="{{Storage::url($categoria->immagine)}}" alt="Image not found" height="150" width="300">
			</div>
			<div class="col-md-2">
				<button class="btn btn-default" onclick="location.href='/editCategoria/{{$categoria->id}}';">Modifica</button>
			</div>
			<div class="col-md-2">
				<button class="btn btn-danger" onclick="location.href='/destroyCategoria/{{$categoria->id}}';">Elimina</button>
			</div>
		</div>
		<hr>
	@endforeach
	<button class="btn btn-succes" onclick="location.href='/formCategoria';">Aggiungi Categoria</button>
@endsection
