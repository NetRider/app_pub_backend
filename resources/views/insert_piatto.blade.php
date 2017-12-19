@extends('welcome')

@section('title', 'Inserisci Piatto')

@section('content')
	<h2 style="color: white;">Inserisci un nuovo piatto</h2><br/>
	<div class="row">
		<div class="col-md-2">
			<button class="btn btn-danger" onclick="location.href='/listPiatti';"><span class="glyphicon glyphicon-remove"></span> Annulla</button>
		</div>
	</div>
	<hr>
	<div class="container" style="background-color: white;">
      		<form method="post" action='/insertPiatto' enctype="multipart/form-data" style="background-color: white; padding-top: 10px;" id="piattoform">
				{{ csrf_field() }}
				<div class="row">
				    <div class="form-group col-md-4 col-md-offset-3">
				        <label for="nome">Nome piatto:</label>
				        <input type="text" class="form-control" name="nome">
				    </div>
				</div>
				<div class="row">
					<div class="form-group col-md-4 col-md-offset-3">
				        <label for="descrizione">Descrizione:</label>
						<textarea class="form-control" rows="5" name="descrizione"></textarea>
				    </div>
				</div>
				<div class="row">
					<div class="form-group col-md-4 col-md-offset-3">
						<label for="descrizione">Prezzo:</label>
						<div class="input-group">
							<input type="text" class="form-control" name="prezzo">
							<div class="input-group-addon">
								€
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4 col-md-offset-3">
				        <label for="menu_id">Categoria:</label><br>
				        <select name="categoria_id" style="color: black">
				            @foreach ($categorie as $c)
				                <option value="{{$c->id}}">{{$c->nome}}</option>
				            @endforeach
				        </select>
				    </div>
				</div>
				<div class="row">
					<div class="form-group col-md-4 col-md-offset-3">
				        <label for="immagine">Immagine:</label>
				        <input type="file" name="immagine">
				    </div>
				</div>
				<div class="row">
					<div class="form-group col-md-4 col-md-offset-6">
				        <button type="submit" class="btn btn-success" style="margin-left:38px">Aggiungi Piatto</button>
				    </div>
				</div>
			</form>
	</div>
@endsection
