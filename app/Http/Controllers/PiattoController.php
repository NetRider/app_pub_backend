<?php

namespace App\Http\Controllers;

use App\Piatto;
use Illuminate\Http\Request;

class PiattoController extends Controller
{
    public function getPiatti()
    {
        return Piatto::all();
    }

    public function getPiattiByCategoria($cat_id)
    {
        return Piatto::where('categoria_id', $cat_id);
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
