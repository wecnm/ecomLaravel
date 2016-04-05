<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class productApiController extends Controller
{
    public function index(){
    	return Category::all();
    	//return Response::json(Category::all());
    }
}
