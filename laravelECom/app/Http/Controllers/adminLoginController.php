<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class adminLoginController extends Controller
{
    public function index(){
    	return view('auth.adminLogin');
    }

    public function login(Request $request){
    	return $request;
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
