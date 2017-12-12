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
        $piatto->categoria_id = $request->categoria_id;
        $piatto->save();
    }
}
