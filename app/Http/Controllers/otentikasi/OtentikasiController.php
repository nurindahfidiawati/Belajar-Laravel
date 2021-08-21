<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class OtentikasiController extends Controller
{
    //function login
    public function index(){
        return view('pages.login');
    }

    public function login(Request $request){
        // dd($request->all());
        $data = User::where('email',$request->email)->firstOrFail();
        if ($data){
            if(Hash::check($request->password,$data->password)){
                return redirect('/dashboard');
            }
        }
        return redirect('/')->with('message','Email atau Password salah!');

    }
}
