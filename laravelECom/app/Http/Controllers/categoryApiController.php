<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Http\Requests;

class categoryApiController extends Controller
{
    public function index(){
    	return Category::all();
    	//return Response::json(Category::all());
    }
}
