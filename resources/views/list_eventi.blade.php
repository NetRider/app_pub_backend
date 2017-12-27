@extends('welcome')

@section('title', 'Lista Eventi')

@section('content')
	<h2 style="color: white;">Lista degli eventi</h2><br/>
	<div class="row">
		<div class="col-md-12" style="text-align: left;">
			<button class="btn btn-primary" onclick="location.href='/';"><span class="glyphicon glyphicon-home"></span> Torna alla home</button>
			<button class="btn btn-success" style="margin-left: 2px;" onclick="location.href='/formEvento';"><span class="glyphicon glyphicon-plus"></span> Aggiungi Evento</button>
		</div>
	</div>
	<hr>
	<table  class="table table-striped">
		<thead>
		<tr>
			<th scope="col">Titolo</th>
			<th scope="col" class="hidden-sm hidden-xs">Descrizione</th>
			<th scope="col">Data</th>
			<th scope="col" class="hidden-sm hidden-xs">Ora inizio</th>
			<th scope="col" class="hidden-sm hidden-xs">Ora fine</th>
			<th scope="col" class="hidden-sm hidden-xs">Immagine</th>
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
			@php
				$desc=null;
                // return with no change if string is shorter than $limit
                if(strlen($e->descrizione) <= 50)
                {
                  $desc = $e->descrizione;
                }
                else
                  {
                      $desc = substr($e->descrizione, 0, 50) . "...";
                  }

			@endphp
			<td class="hidden-sm hidden-xs">{{$desc}}</td>
			<td>{{$d}}</td>
			<td class="hidden-sm hidden-xs">{{$oi}}</td>
			<td class="hidden-sm hidden-xs">{{$of}}</td>
			<td class="hidden-sm hidden-xs"><img class="clip" src="{{Storage::url($e->immagine)}}" alt="Image not found" height="50" width="auto"></td>
			<td><button class="btn btn-default" onclick="location.href='/editEvento/{{$e->id}}';"><span class="glyphicon glyphicon-edit"></span> Modifica</button>
				<button class="btn btn-danger" onclick="location.href='/destroyEvento/{{$e->id}}';"><span class="glyphicon glyphicon-trash"></span> Elimina</button>
			</td>
		</tr>
	@endforeach
		</tbody>
	</table>
@endsection
