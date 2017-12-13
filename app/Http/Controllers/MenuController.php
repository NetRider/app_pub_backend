<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function editMenu()
    {
        return view('edit_menu');
    }

    public function formMenu()
    {
        return view('insert_menu');
    }
}
