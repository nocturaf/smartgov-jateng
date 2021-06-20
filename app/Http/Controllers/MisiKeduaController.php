<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisiKeduaController extends Controller
{
    //
    public function index(){
        return view('misiKedua/misiKeduaPage');
    }
}
