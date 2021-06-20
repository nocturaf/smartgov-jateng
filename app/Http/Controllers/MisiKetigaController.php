<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisiKetigaController extends Controller
{
    //
    public function index(){
        return view('misiKetiga/misiKetigaPage');
    }
}
