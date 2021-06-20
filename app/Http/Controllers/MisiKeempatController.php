<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisiKeempatController extends Controller
{
    //
    public function index(){
        return view('misiKeempat/misiKeempatPage');
    }
}
