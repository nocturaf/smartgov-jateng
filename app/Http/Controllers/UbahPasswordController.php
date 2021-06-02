<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UbahPasswordController extends Controller
{
    //
    public function index(){
        return view('kabupaten/ubah-password', ['pages'=>'ubahpassword']);
    }
}
