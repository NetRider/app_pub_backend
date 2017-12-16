@extends('welcome')

@section('title', 'Inserisci Menu')

@section('content')
	<h2>Inserisci un nuovo menù</h2>
	<div class="row">
		<div class="col-md-2">
			<button class="btn btn-danger" onclick="location.href='/listMenu';"><span class="glyphicon glyphicon-remove"></span> Annulla</button>
		</div>
	</div>
	<hr>
	<form method="post" action='/insertMenu'>
		{{ csrf_field() }}
		<div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				<label for="nome">Nome menù:</label>
				<input type="text" class="form-control" name="nome">
			</div>
		</div>
		<div class="row">
			<div class="col-md-5"></div>
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-success" style="margin-left:38px">Aggiungi Menù</button>
			</div>
		</div>
	</form>
@endsection
