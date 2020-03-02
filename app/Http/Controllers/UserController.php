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

    public function getEmail(){
        $data = User::all();
        return response()->json (["users"=> $data]);
    }


    public function putEmail(Request $request){
        $data = $request->validate([
            'id' => 'required|numeric',
            'value' => 'required|email'
        ]);
        User::where('id', $data['id'])->update(['email'=>$data['value']]);
        return response()->json($request->all());
    }


    public function putRole(Request $request){
        $data = $request->validate([
            'id' => 'required|numeric',
            'value' => 'required|numeric'
        ]);
        User::where('id', $data['id'])->update(['role'=>$data['value']]);
        return response()->json($request->all());
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json('Der User wurde erfolgreich gelöscht');
    }
}
