<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunPenggunaController extends Controller
{
    //
    public function index(){
        return view('kabupaten/akun-pengguna', ['pages'=>'akunpengguna']);
    }
}
