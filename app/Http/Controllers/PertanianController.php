<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanianController extends Controller
{
    //
    public function iku(){
        return view('pertanian/iku', ['pages'=>'ikuPertanian']);
    }
    public function dataPendukung(){
        return view('pertanian/data-pendukung',['pages'=>'dataPendukungPertanian']);
    }
}
