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
}
