@extends('welcome')

@section('title', 'Lista categorie')

@section('content')
	<h2>Lista delle categorie</h2><br/>
	<div class="row">
		<div class="col-md-2">
			<button class="btn btn-primary" onclick="location.href='/';"><span class="glyphicon glyphicon-home"></span> Torna alla home</button>
		</div>
		<div class="col-md-offset-8 col-md-2">
			<button class="btn btn-success" onclick="location.href='/formCategoria';"><span class="glyphicon glyphicon-plus"></span> Aggiungi Categoria</button>
		</div>
	</div>
	<hr>
	@foreach ($categorie as $categoria)
		<div class="row">
			<div class="col-md-2">
				<span>{{$categoria->nome}}</span>
			</div>
			<div class="col-md-2">
				<span>{{$categoria->descrizione}}</span>
			</div>
			<div class="col-md-4">
				<img src="{{Storage::url($categoria->immagine)}}" alt="Image not found" height="150" width="300">
			</div>
			<div class="col-md-2">
				<button class="btn btn-default" onclick="location.href='/editCategoria/{{$categoria->id}}';"><span class="glyphicon glyphicon-edit"></span> Modifica</button>
			</div>
			<div class="col-md-2">
				<button class="btn btn-danger" onclick="location.href='/destroyCategoria/{{$categoria->id}}';"><span class="glyphicon glyphicon-trash"></span> Elimina</button>
			</div>
		</div>
		<hr>
	@endforeach
@endsection
