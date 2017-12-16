@extends('welcome')

@section('title', 'Page Title')

@section('content')
<h2>Modifica menù</h2><br/>
<form method="post" action='/updateMenu'>
	{{ csrf_field() }}
	<input type="hidden" class="form-control" name="id" value="{{$menu->id}}">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="form-group col-md-4">
			<label for="nome">Nome menù:</label>
			<input type="text" class="form-control" name="nome" value="{{$menu->nome}}">
		</div>
	</div>
	<div class="row">
		<div class="col-md-5"></div>
		<div class="form-group col-md-4">
			<button type="submit" class="btn btn-success" style="margin-left:38px">Modifica Menù</button>
		</div>
	</div>
</form>
@endsection
