<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use App\Models\penduduk;
use App\Models\suku;
use App\Models\agama;


class ProfilController extends Controller
{
    //
    public function index(){
        // return view('kabupaten/profil');
        $profile = profile::all();
        $penduduk = penduduk::all();
        $suku = suku::all();
        $agama = agama::all();
        return view('kabupaten/profil',['profile' => $profile ,'penduduk' => $penduduk , 'suku' => $suku , 'agama' => $agama]);
        // foreach (profile::all() as $profile) {
        //     echo $profile->nama.' ';
        // }
        
    }
}

