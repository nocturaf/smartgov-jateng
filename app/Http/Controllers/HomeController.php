<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('kabupaten/kabHome', ['pages' => 'home']);
    }
}
