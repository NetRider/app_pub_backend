@extends('welcome')

@section('title', 'Welcome to Monthy's webservice')

@section('content')

    <h2>Monthy's webservice</h2><br/>
        <div class="row">
            <div class="col-md-4">
            <button class="btn btn-default" onclick="location.href='/listCategorie';">Gestione Categorie</button>
            <button class="btn btn-default" onclick="location.href='/listPiatti';">Gestione Piatti</button>
            <button class="btn btn-default" onclick="location.href='/listEventi';">Gestione Eventi</button>
        </div>
@endsection
