<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return response()->json (["users"=> $data]);
    }
    public function putUser(Request $request){
        $data = $request->validate([
            'id' => 'required|numeric',
            'value' => 'required'
        ]);
       // dd($data);
        User::where('id', $data['id'])->update(['name'=>$data['value']]);
        return response()->json($request->all());
    }
}
