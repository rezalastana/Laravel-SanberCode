<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('form');
    }

    public function welcome(Request $request){
        $nama_awal  = $request['awal'];
        $nama_akhir = $request['akhir'];

        return view ('welcome',compact('nama_awal','nama_akhir'));
    }
}
