<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
//        tempat menaruh logic
        return view('pages.index');
    }
}
