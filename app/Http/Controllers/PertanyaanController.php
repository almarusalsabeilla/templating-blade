<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PertanyaanModel;
use App\JawabanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = PertanyaanModel::get();
        return view ('tabelpertanyaan', compact ('pertanyaan'));
    }
    public function create(){
        return view('formpertanyaan');
    }
    public function store(Request $Request){
        $pertanyaan = new PertanyaanModel;

        $data = $request->all();
        $pertanyaan->konteks = $data['konteks'];
        $pertanyaan->tanya = $data['tanya'];
        $pertanyaan->save();
        return redirect('/pertanyaan');
    }
    public function edit($id){
        $getPertanyaan = PertanyaanModel::find($id);
        $getPertanyaan = json_decode(json_encode($getPertanyaan));
        return view('editpertanyaan',compact('getPertanyaan'));
    }
    public function update($id,Request $request){
        $getPertanyaan = PertanyaanModel::where('id',$id)->update($request-except('_token','_method'));
        return redirect('/pertanyaan');
    }
    public function detroy($id){
        PertanyaanModel::where('id',$id)->delete();
        JawabanModel::where('pertanyaan_id')->delete();

        return redirect()->back();
    }
}

    
