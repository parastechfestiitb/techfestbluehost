<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class DeveloperController extends Controller
{
    public function loginGet(){
        return view('developer.login');
    }
    public function loginPost(Request $req){
        if($req->password === 'L0R3M-DR34M@73CHF357') {
            session(['developer'=>true]);
            return redirect()->route('home');
        }
        else return abort(404);
    }
    public function logoutGet(){
        session()->forget('developer');
    }
}
