<?php

namespace App\Http\Controllers;

use App\Schedario;
use Illuminate\Http\Request;

class SchedarioController extends Controller
{
    //Ritorna il JSON per le api;
    public function getSchedari()
    {
        return Schedario::all();
    }

    public function getSchedarioVersion()
    {
        return Schedario::find(1);
    }
}
