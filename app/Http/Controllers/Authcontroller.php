<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function cikis() {
        return view('cikis');
    }
}

