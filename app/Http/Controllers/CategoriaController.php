<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Categoria;

class CategoriaController extends Controller
{
    public function getCategorie()
	{
		return Categoria::all();
	}

	public function getForm()
	{
		return view('insert_categoria');
	}

	public function insertCategoria(Request $request)
	{
		$path = null;

		if($request->hasFile('immagine'))
		{
			$path = Storage::putFile('/public', $request->file('immagine'));
		}

		$categoria = new Categoria;
		$categoria->nome = $request->nome;
		$categoria->immagine = $path;
		$categoria->descrizione = $request->descrizione;
		$categoria->menu_id = $request->menu_id;
		$categoria->save();
	}
}
