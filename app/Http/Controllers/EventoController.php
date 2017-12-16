<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EventoController extends Controller
{
    public function editEvento($id)
    {
        $evento = Evento::find($id);
        return view('edit_evento', compact('evento'));
    }

    public function getForm()
    {
        return view('insert_evento');
    }

    //Ritorna il JSON per le api;
    public function getEventoById($id)
    {
        $evento = Evento::find($id);

        return response()->json($evento);
    }

    //Ritorna il JSON per le api;
    public function getEventi()
    {
        return Evento::all();
    }

    //aggiorna l'elemento
    public function updateEvento(Request $request)
    {
        $evento = Evento::find($request->id);

        $path = null;

        if($request->hasFile('immagine'))
        {
            $path = Storage::putFile('', $request->file('immagine'));
        }

        $evento->titolo= $request->titolo;
        $evento->descrizione= $request->descrizione;
        $evento->data_inizio= $request->datainizio;
        $evento->data_fine= $request->datafine;

        if($path != null)
        {
            Storage::delete($evento->immagine);
            $evento->immagine = $path;
        }
        $evento->save();
        return redirect('/listEventi');

    }

    //cancella l'elemento
    public function destroyEvento($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect('/listEventi');
    }


    //inserisce un elemento nel DB
    public function insertEvento(Request $request)
    {
        $evento = new Evento;
        $evento->titolo= $request->titolo;
        $evento->descrizione= $request->descrizione;
        $evento->data_inizio= $request->datainizio;
        $evento->data_fine= $request->datafine;

        $path = null;

        if($request->hasFile('immagine'))
        {
            $path = Storage::putFile('', $request->file('immagine'));
        }

        $evento->immagine= $path;
        $evento->save();
        return redirect('/listEventi');
    }

    //mostra tutti gli elementi
    public function listEventi()
    {
        return view('list_eventi', ['eventi' => Evento::all()]);
    }

}
