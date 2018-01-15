<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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

		$categorie = collect($menu->categorie);

		$categorie->each(function ($categoria) {
			$categoria->immagine = asset(Storage::url($categoria->immagine));
			$piatti = collect($categoria->piatti);
			$piatti->each(function ($piatto) {
					$piatto->immagine = asset(Storage::url($piatto->immagine));
					if($piatto->aggiunte == 0)
						$piatto->aggiunte = false;
					else
						$piatto->aggiunte = true;
			});
		});

		$menuArray = ["menu" => $categorie];

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

	public function getMenuVersion()
	{
		$menu = Menu::find(1);
		return response()->json(["menu_version" => $menu->version]);
	}
}
