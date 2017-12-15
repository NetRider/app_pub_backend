<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Monthy's webservice </title>
    	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	</head>
	<body>
		<div class="container">
      		<h2>Lista delle categorie</h2><br/>
			@foreach ($categorie as $categoria)
    			<div class="row">
					<div class="col-md-4">
						<span>{{$categoria->nome}}<span>
					</div>
					<div class="col-md-4">
						<span>{{$categoria->descrizione}}<span>
					</div>
					<div class="col-md-4">
						<img src="{{Storage::url($categoria->immagine)}}" alt="Image not found">
					</div>
					<button class="btn btn-default" onclick="location.href='/editCategoria/{{$categoria->id}}';">Modifica</button>
					<button class="btn btn-danger" onclick="location.href='/destroyCategoria/{{$categoria->id}}';">Elimina</button>
				</div>
			@endforeach
		</div>
    </div>
  </body>
</html>
