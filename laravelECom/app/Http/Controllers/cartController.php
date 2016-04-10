<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cart;

use App\Product;

use Mail;

use Auth;

class cartController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function index()
    {
    	$products = Cart::where('user_id',Auth::user()->id)->get()->toArray();
    	$total = Cart::where('user_id',Auth::user()->id)->sum('price');
    	return view('cart',['products' => $products, 'total' =>$total]);
    }

    public function create(Request $request)
    {	
    	$product = Product::where('product_id',$request->product_id)->first()->toArray();
    	Cart::create(['product_id' => $request->product_id,
    				  'user_id' => Auth::user()->id,
    				  'product_name' => $product['product_name'],
    				  'price' => $product['price'],
    				  'picture_path' => $product['picture_path'],
    	]);
    	return redirect ('/');
    }

    public function postHandler(Request $request)
    {
    	if($request->action === 'Delete'){
    		Cart::where('product_id',$request->productId)->delete();
    		return redirect('cart');
    	}elseif($request->action === 'Check Out'){
            $products = Cart::where('user_id',Auth::user()->id)->get()->toArray();
            Mail::send(['html'=>'order'],array('products'=>$products),function($message){
                $message->from('yyh.fanatic@gmail.com','HappyBuy');
                $message->to(Auth::user()->email,Auth::user()->name);
            });
    		Cart::where('user_id',Auth::user()->id)->delete();
    		return redirect('cart/checkout');
    	}
    }
}
