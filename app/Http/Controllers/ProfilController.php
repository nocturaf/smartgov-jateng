<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use App\Models\penduduk;

class ProfilController extends Controller
{
    //
    public function index(){
        // return view('kabupaten/profil');
        $profile = profile::all();
        $penduduk = penduduk::all();
        return view('kabupaten/profil',['profile' => $profile ,'penduduk' => $penduduk]);
        // foreach (profile::all() as $profile) {
        //     echo $profile->nama.' ';
        // }
        
    }
}

