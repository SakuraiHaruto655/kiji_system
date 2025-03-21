<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kiji;
use Illuminate\Support\Facades\Auth;

class KijiController extends Controller
{
    public function show(){
        $kiji = Kiji::all();
        return view('kiji.index',['kijis' => $kiji]);
    }

    public function add($request){

        $user = Auth::user();
        $kiji = new Kiji;
        $kiji->user_id = $user->id;
        $kiji->title = $request->input('title');
        $kiji->body = $request->input('body');
        $kiji->save();

        return redirect()->to('/kiji');
    }
}
