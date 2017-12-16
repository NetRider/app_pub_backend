<?php

namespace App\Http\Controllers;

use App\Piatto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PiattoController extends Controller
{

    public function getForm()
    {
        return view('insert_piatto');
    }

    public function getPiatti()
    {
        return Piatto::all();
    }

    public function getPiattiByCategoria($cat_id)
    {
        $piatti = Piatto::where('categoria_id', $cat_id)->get();
        return $piatti;
    }

    public function getPiattoById($piatto_id)
    {
        return Piatto::find($piatto_id);
    }

    public function insertPiatto(Request $request)
    {
        $path = Storage::putFile('', $request->file('immagine'));

        $piatto = new Piatto;

        $piatto->nome = $request->nome;
        $piatto->immagine = $path;
        $piatto->descrizione = $request->descrizione;
        $piatto->prezzo = $request->prezzo;
        $piatto->categoria_id = $request->categoria_id;
        $piatto->save();
        return redirect('/listPiatti');
    }

    //popola la view di edit
    public function editPiatto($id)
    {
        $piatto = Piatto::find($id);
        return view('edit_piatto', compact('piatto'));
    }

    //aggiorna l'elemento
    public function updatePiatto(Request $request)
    {
        $path = null;

        if($request->hasFile('immagine'))
        {
            $path = Storage::putFile('', $request->file('immagine'));
        }

        $piatto = Piatto::find($request->id);
        $piatto->nome= $request->nome;
        $piatto->descrizione= $request->descrizione;
        $piatto->immagine= $path;
        $piatto->prezzo = $request->prezzo;
        $piatto->categoria_id= $request->categoria_id;
        $piatto->save();
        return redirect('/listPiatti');

    }

    //cancella l'elemento
    public function destroyPiatto($id)
    {
        $piatto = Piatto::find($id);
        $piatto->delete();
        return redirect('/listPiatti');
    }

    //mostra tutti gli elementi
    public function listPiatti()
    {
        return view('list_piatti', ['piatti' => Piatto::all()]);
    }
}
