<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request){
        
        $request->session()->flush();



        Auth::logout();
        return view('login');
     }
}
