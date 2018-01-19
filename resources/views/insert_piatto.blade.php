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
				    <div class="form-group col-md-5 col-md-offset-1">
				        <label for="nome">Nome piatto:</label>
				        <input type="text" class="form-control" name="nome">
				    </div>
				</div>
				<div class="row">
					<div class="form-group col-md-5 col-md-offset-1">
						<label for="prezzo">Prezzo:</label>
						<textarea class="form-control" rows="5" name="prezzo"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-5 col-md-offset-1">
						<label for="descrizione">Descrizione:</label>
						<textarea class="form-control" rows="5" name="descrizione"></textarea>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-2 col-md-offset-1">
				        <label for="menu_id">Categoria:</label><br>
				        <select name="categoria_id" style="color: black">
				            @foreach ($categorie as $c)
				                <option value="{{$c->id}}">{{$c->nome}}</option>
				            @endforeach
				        </select>
				    </div>
					<div class="form-group col-md-2">
						<label for="aggiunte">Aggiunte:</label> <br>
				        <input type="checkbox" name="aggiunte" value="true"> Disponibili
				    </div>
				</div>
				<div class="row">
					<div class="form-group col-md-4 col-md-offset-1">
				        <label for="immagine">Immagine:</label>
				        <input type="file" name="immagine">
				    </div>
				</div>
				<br>
				<div class="row">
					<div class="form-group col-md-6 col-md-offset-1">
						<label>Area Notifica Applicazione</label>
						<br>
						<span>Riempire questi campi solo se si vuole notificare
							agli utenti dell'applicazione la disponibilita di un nuovo
							piatto.
						</span>
				    </div>
				</div>
				<div class="row">
					<div class="form-group col-md-2 col-md-offset-1">
				        <label for="titolo">Titolo notifica:</label>
						<input type="text" class="form-control" name="titolo_notifica">
					</div>
					<div class="form-group col-md-3">
				        <label for="descrizione">Descrizione notifica:</label>
				        <input type="text" class="form-control" name="descrizione_notifica">
				    </div>
				</div>
				<div class="row">
					<div class="form-group col-md-2 col-md-offset-8">
				        <button type="submit" class="btn btn-success" style="margin-left:38px">Aggiungi Piatto</button>
				    </div>
				</div>
			</form>
	</div>
@endsection
