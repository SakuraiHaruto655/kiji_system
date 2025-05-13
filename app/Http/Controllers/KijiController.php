<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kiji;
use Illuminate\Support\Facades\Auth;

class KijiController extends Controller
{
    public function show(){
        $kiji = Kiji::all();
        return view('home',['kijis' => $kiji]);
    }

    public function add(Request $request){
        $user = Auth::user();
        $kiji = new Kiji;
        $kiji->user_id = $user->id;
        $kiji->title = $request->input('title');
        $kiji->body = $request->input('body');
        $kiji->save();

        return redirect()->route('show');
    }

    public function delete(Request $request){
        $kiji = Kiji::find($request->id);
        $kiji->delete();

        return redirect()->route('show');
    }

    public function detail(Request $request){
        $kiji = Kiji::find($request->id); 

        return view('kiji.detail',['kiji' => $kiji]);
    }

    public function edit(Request $request){
        $kiji = Kiji::find($request->id);

        return view('kiji.edit',compact('kiji'));
    }

    public function update(Request $request){
        $kiji = Kiji::find($request->id);
        $kiji->title = $request->input('title');
        $kiji->body = $request->input('body');
        $kiji->save();
        
        return redirect()->route('complete_edit', ['id' => $kiji->id,'mode' => $request->input('mode')]);
    }

    public function complete(Request $request){
        $kiji = Kiji::find($request->id);
        if($kiji){
            $mode = $request->input('mode');
        }else{
            echo '$kijiが存在しません。';
            exit;
        }
        if ($mode === 'rev') {
            return view('kiji.complete_edit', ['kiji' => $kiji,'mode'=>$mode]);
        } elseif ($mode === 'add') {
            return view('kiji.complete_add', ['kiji' => $kiji]);
        } else {
            return view('kiji.complete_default', ['kiji' => $kiji]);
        }
    }
}