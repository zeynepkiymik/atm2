<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function cikis() {
        return view('cikis');
    }
    public function postcikis (Request $request){
        return redirect()->route('index');   
    }


}


/*public function paraCek() {
    return view('paracek');
}
public function postParaCek(Request $request) {
     
    
    $yeniBakiye = Session::get('bakiye') -  $request->cekilen_para;
 
    $request->session()->put('bakiye', $yeniBakiye);

    return redirect()->route('girissayfasi');
}