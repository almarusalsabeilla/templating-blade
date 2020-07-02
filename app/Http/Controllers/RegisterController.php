<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view ('register');
    }

    public function form_post(Request $request){
        //dd($request->all());
        $nama = $request['name'];
        return "$name";
    }
   
    public function welcomesanber(){
        return view ('welcomesanber');
    }


    public function sapa(Request $request) {
        return "Halo";

    }
    
}