@extends('welcome')

@section('title', 'Lista Piatti')

@section('content')
	<h2 style="color: white;">Lista dei piatti</h2><br/>
	<div class="row">
		<div class="col-md-12" style="text-align: left;">
			<button class="btn btn-primary" onclick="location.href='/';"><span class="glyphicon glyphicon-home"></span> Torna alla home</button>
			<button class="btn btn-success" style="margin-left: 2px;" onclick="location.href='/formPiatto';"><span class="glyphicon glyphicon-plus"></span> Aggiungi Piatto</button>
			<div class="btn-group">
	  			<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    		Filtra per Categorie<span class="caret"></span>
	  			</button>
				<ul class="dropdown-menu">
					@foreach ($categorie as $c)
						<li><a href="/listPiattiByCategoria/{{$c->id}}">{{$c->nome}}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<hr>
	<table  class="table table-striped sortableP">
		<thead>
		<tr>
			<th scope="col" >Nome</th>
			<th scope="col" class="hidden-sm hidden-xs">Descrizione</th>
			<th scope="col">Prezzo</th>
			<th scope="col" class="hidden-sm hidden-xs">Categoria</th>
			<th scope="col" class="hidden-sm hidden-xs">Immagine</th>
			<th scope="col"></th>
		</tr>
		</thead>
		<tbody>
	@foreach ($piatti as $p)
		<tr id="{{$p->id}}">
			<td>{{$p->nome}}</td>
			@php
				$desc=null;
                // return with no change if string is shorter than $limit
                if(strlen($p->descrizione) <= 20)
                {
                  $desc = $p->descrizione;
                }
                else
                  {
                      $desc = substr($p->descrizione, 0, 20) . "...";
                  }

			@endphp
			<td class="hidden-sm hidden-xs">{{$desc}}</td>
			<td>{{$p->prezzo}}€</td>
			<td class="hidden-sm hidden-xs">{{$p->categoria->nome}}</td>
			<td class="hidden-sm hidden-xs"><img class="clip" src="{{Storage::url($p->immagine)}}" alt="Image not found" height="50px" width="auto"></td>
			<td><button class="btn btn-default" onclick="location.href='/editPiatto/{{$p->id}}';"><span class="glyphicon glyphicon-edit"></span> Modifica</button>
				<button class="btn btn-danger" onclick="location.href='/destroyPiatto/{{$p->id}}';"><span class="glyphicon glyphicon-trash"></span> Elimina</button>
			</td>
		</tr>
	@endforeach

@endsection
