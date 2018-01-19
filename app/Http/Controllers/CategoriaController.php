<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Categoria;
use App\Menu;

class CategoriaController extends Controller
{
	//Ritorna il JSON per le api;
    public function getCategorie()
	{
		return Categoria::orderBy('order', 'asc')->get();
	}

	//popola la view di edit
    public function editCategoria($id)
    {
        $categoria = Categoria::find($id);

        return view('edit_categoria', compact('categoria'));
    }

    //aggiorna l'elemento
    public function updateCategoria(Request $request)
    {
        $path = null;

        if($request->hasFile('immagineEdit'))
        {
            $path = Storage::putFile('', $request->file('immagineEdit'));
        }

        $categoria = Categoria::find($request->id);
        $categoria->nome= $request->nome;
        $categoria->descrizione= $request->descrizione;

		if($path != null)
		{
			Storage::delete($categoria->immagine);
			$categoria->immagine = $path;
		}

		$this->updateMenuVersion();

        $categoria->menu_id= $request->menu_id;
        $categoria->save();
        return redirect('/listCategorie');

    }

    //cancella l'elemento
    public function destroyCategoria($id)
    {
        $categoria = Categoria::find($id);
		Storage::delete($categoria->immagine);
        $categoria->delete();

		$this->updateMenuVersion();

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
			$path = Storage::putFile('', $request->file('immagine'));
		}

		$categoria = new Categoria;
		$categoria->nome = $request->nome;
		$categoria->immagine = $path;
		$categoria->descrizione = $request->descrizione;
		$categoria->menu_id = $request->menu_id;

		$categoria->order = Categoria::all()->count() + 1;

		$categoria->save();

		$this->updateMenuVersion();

        return redirect('/listCategorie');
	}

	//mostra tutti gli elementi
	public function listCategorie()
	{
		return view('list_categorie', ['categorie' => Categoria::orderBy('order', 'asc')->get()]);
	}

	private function updateMenuVersion()
	{
		$menu = Menu::find(1);
		$menu->version = $menu->version + 1;
		$menu->update();
	}

    //aggiorna l'ordine
    public function sortCategorie(Request $items)
    {
        $arr=json_decode($items['data']);
        foreach ($arr as $it) {
            $piatto = Categoria::find($it->id);
            $piatto->order = $it->order;
            $piatto->save();
        }

        $this->updateMenuVersion();
    }
}
