<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\adminUser;

class adminLoginController extends Controller
{
    public function index(){
    	return view('auth.adminLogin');
    }

    public function login(Request $request){
    	if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password,])){
    		return redirect('admin/main');
    	}
    	return redirect('admin')->withErrors(['email' => 'wrong info']);
    }

    public function logout(){
    	Auth::guard('admin')->logout();
    	return redirect('/');
    }
}
