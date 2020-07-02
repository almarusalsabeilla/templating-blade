<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(Request $request){
        return view('register');
    }

    public function welcome_pos(Request $request){
        $data = $request->all();
        return view ('welcome',["data" => $data]);
    }
}
