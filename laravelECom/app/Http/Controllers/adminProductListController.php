<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

class adminProductListController extends Controller
{
    public function main()
    {
    	$products = Product::all();
    	return view('admin.adminHome',compact('products'));
    }

    public function newProduct()
    {
 		$products = Product::all();
    	return view('admin.adminNew',compact('products'));   	
    }

    public function edit(Request $request)
    {
    	//dd($request->all());
    	if($request->action === 'Edit'){
    		$product = Product::where('product_id',$request->productId)->first()->toArray();
    		return view('admin.adminUpdate',compact('product'));
    	}elseif($request->action === 'Delete'){
    		Product::where('product_id',$request->productId)->delete();
    		return redirect('admin/main');
    	}
    }

    public function update(Request $request)
    {
    	Product::where('product_id',$request->productId)->update($request->except(['_token','action','productId']));
    	return redirect('admin/main');
    }

    public function create(Request $request)
    {
    	Product::create($request->except(['_token','action']));
    	return redirect('admin/main');
    }
}
