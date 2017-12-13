<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Categoria;

class CategoriaController extends Controller
{
	//Ritorna il JSON per le api;
    public function getCategorie()
	{
		return Categoria::all();
	}

	//popola la view di edit
    public function editCategoria($id)
    {
        $categoria = Categoria::find($id);
        return view('edit_categoria', compact('categoria'));
    }

    //cancella l'elemento
    public function destroyCategoria($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect('/listCategorie');
    }

    //mostra la form per la creazione
	public function getForm()
	{
		return view('insert_categoria');
	}

	//inserisce un elemento nel DB
	public function insertCategoria(Request $request)
	{
		$path = null;

		if($request->hasFile('immagine'))
		{
			$path = Storage::putFile('categorie', $request->file('immagine'));
		}

		$categoria = new Categoria;
		$categoria->nome = $request->nome;
		$categoria->immagine = $path;
		$categoria->descrizione = $request->descrizione;
		$categoria->menu_id = $request->menu_id;
		$categoria->save();
        return redirect('/listCategorie');
	}

	//mostra tutti gli elementi
	public function listCategorie()
	{
		return view('list_categorie', ['categorie' => Categoria::all()]);
	}
}
