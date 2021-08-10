<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;


class AtmController extends Controller
{
    public function paraCek() {
        return view('paracek');
    }
    public function postParaCek(Request $request) {
         
        
        $yeniBakiye = Session::get('bakiye') -  $request->cekilen_para;
     
        $request->session()->put('bakiye', $yeniBakiye);

        return redirect()->route('girissayfasi');
    }

    public function paraEkle() {
        return view('paraekle');
    }

    public function postParaEkle(Request $request) {
             
        $yeniBakiye = Session::get('bakiye') +  $request->eklenen_para;
     
        $request->session()->put('bakiye', $yeniBakiye);

        return redirect()->route('girissayfasi');
    }

    public function sifremiUnuttum() {
        return view('sifremiUnuttum');
    }

    public function girisSayfasi(Request $request) {
        if ( !Session::has('bakiye'))
        $request->session()->put('bakiye', 10000);

        return view('girissayfasi');
    }
    public function index() {
        return view('atm');
    }
}

//AuthController