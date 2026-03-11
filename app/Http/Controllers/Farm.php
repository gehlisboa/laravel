<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Farm extends Controller
{
    function farm(){
        return view ('pagina-farm');
    }
    
}