<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class adminLoginController extends Controller
{
    public function index(){
    	return view('auth.adminLogin');
    }
}
