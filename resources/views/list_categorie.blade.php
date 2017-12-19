@extends('welcome')

@section('title', 'Lista Categorie')

@section('content')
	<h2 style="color: white;">Lista delle categorie</h2><br/>
	<div class="row">
		<div class="col-md-2">
			<button class="btn btn-primary" onclick="location.href='/';"><span class="glyphicon glyphicon-home"></span> Torna alla home</button>
		</div>
		<div class="col-md-offset-8 col-md-2">
			<button class="btn btn-success" onclick="location.href='/formCategoria';"><span class="glyphicon glyphicon-plus"></span> Aggiungi Categoria</button>
		</div>
	</div>
	<hr>
	<table  class="table table-striped">
		<thead>
		<tr>
			<th scope="col">Nome</th>
			<th scope="col">Descrizione</th>
			<th scope="col">Immagine</th>
			<th scope="col"></th>
		</tr>
		</thead>
		<tbody>
	@foreach ($categorie as $categoria)
		<tr>
			<td>{{$categoria->nome}}</td>
			<td>{{$categoria->descrizione}}</td>
			<td><img class="clip" src="{{Storage::url($categoria->immagine)}}" alt="Image not found" height="50" width="auto"></td>
			<td><button class="btn btn-default" onclick="location.href='/editCategoria/{{$categoria->id}}';"><span class="glyphicon glyphicon-edit"></span> Modifica</button>
				<button class="btn btn-danger" onclick="location.href='/destroyCategoria/{{$categoria->id}}';"><span class="glyphicon glyphicon-trash"></span> Elimina</button>
			</td>
		</tr>
	@endforeach
@endsection
