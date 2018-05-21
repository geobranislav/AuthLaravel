<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class noviKontroler extends Controller
{
    public function conMetoda()
    {
        // echo "ovo je pozvano iz kontrolera";
        $niz = ['prvi','drugi','treci'];
        return view('noviFajl',compact('niz'));
    }
    
    public function conMetodaPar($b)
    {
        echo "ovo je pozvano iz kontrolera" . $b;
    }
}
