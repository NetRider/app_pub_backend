@extends('welcome')

@section('title', 'Lista Categorie')

@section('content')
    <h2 style="color: white;">Lista delle categorie</h2><br/>
    <div class="row">
        <div class="col-md-12" style="text-align: left;">
            <button class="btn btn-primary" onclick="location.href='/';"><span class="glyphicon glyphicon-home"></span>
                Torna alla home
            </button>
            <button class="btn btn-success" style="margin-left: 2px;" onclick="location.href='/formCategoria';"><span
                        class="glyphicon glyphicon-plus"></span> Aggiungi Categoria
            </button>
        </div>
    </div>
    <hr>
	<div class="row">
		<div class="col-sm-11 col-xs-11 col-md-12">
		    <table class="table table-striped sortableC">
		        <thead>
		        <tr>
		            <th scope="col">Nome</th>
		            <th scope="col" class="hidden-sm hidden-xs">Descrizione</th>
		            <th scope="col" class="hidden-sm hidden-xs">Immagine</th>
		            <th scope="col"></th>
		        </tr>
		        </thead>
		        <tbody>
		        @foreach ($categorie as $categoria)
		            <tr id="{{$categoria->id}}">
		                <td>{{$categoria->nome}}</td>
		            @php
		              $desc=null;
		              // return with no change if string is shorter than $limit
		              if(strlen($categoria->descrizione) <= 70)
		              {
		                $desc = $categoria->descrizione;
		              }
		              else
		                {
		                    $desc = substr($categoria->descrizione, 0, 70) . "...";
		                }

		            @endphp
		                <td class="hidden-sm hidden-xs">{{$desc}}</td>
		                <td class="hidden-sm hidden-xs"><img class="clip" src="{{Storage::url($categoria->immagine)}}" alt="Image not found" height="50" width="auto"></td>

						<td>
		                    <button class="btn btn-default categoriaModifier" id="{{$categoria->id}}"><span class="glyphicon glyphicon-edit"></span> Modifica
		                    </button>
							@if ($categoria->nome != "Aggiunte")
		                    	<button class="btn btn-danger categoriaDelete" style="margin-left:15px;" id="{{$categoria->id}}"><span
		                                class="glyphicon glyphicon-trash"></span> Elimina
		                    	</button>
							@endif
		                </td>

		            </tr>
				@endforeach
			</tbody>
			</div>
		</div>
        <script>
            // Sortable rows
            $('.sortable').sortable({
                containerSelector: 'table',
                itemPath: '> tbody',
                itemSelector: 'tr',
                placeholder: '<tr class="placeholder"/>'
            });


        </script>
@endsection
