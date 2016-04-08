<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

class productApiController extends Controller
{
    public function index(){
    	return Product::all();
    	//return Response::json(Category::all());
    }
}
