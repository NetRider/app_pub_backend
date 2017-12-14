<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function editMenu($id)
    {
        $menu = Menu::find($id);
        return view('edit_menu', compact('menu'));
    }

    public function getForm()
    {
        return view('insert_menu');
    }

    //Ritorna il JSON per le api;
    public function getMenu()
    {
		$menu = Menu::find(1);
		$menuArray = [];
		foreach ($menu->categorie as $categoria) {
			foreach ($categoria->piatti as $piatto) {
				$piatto->immagine = Storage::url($piatto->immagine);
			}
			array_push($menuArray, $categoria);
		}

		return response()->json($menuArray);
    }

    //aggiorna l'elemento
    public function updateMenu(Request $request)
    {
        $menu = Menu::find($request->id);
        $menu->nome= $request->nome;
        $menu->save();
        return redirect('/listMenu');

    }

    //cancella l'elemento
    public function destroyMenu($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/listMenu');
    }


    //inserisce un elemento nel DB
    public function insertMenu(Request $request)
    {
        $menu = new Menu;
        $menu->nome = $request->nome;
        $menu->save();
        return redirect('/listMenu');
    }

    //mostra tutti gli elementi
    public function listMenu()
    {
        return view('list_menu', ['menu' => Menu::all()]);
    }

}
