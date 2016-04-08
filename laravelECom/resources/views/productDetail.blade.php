@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
		<div class="col-sm-8 col-md-8">
            <div class="well">
            	{!! Form::open(['url'=>'cart']) !!}

				{!! Form::hidden('product_id',$product['product_id']) !!}
				
            	<img src="{{$product['picture_path']}}" class="img-rounded pull-xs-left">
        		<h2 class="text-muted">{{$product['product_name']}}</h2>
        		<p><span class="label label-default">POPULAR</span></p>
        		<ul>
        			<li>{{$product['product_desc']}}</li>
        			<li>{{$product['product_detail']}}</li>
        		</ul>          
        		<p>{{$product['product_detail']}}</p>
        		<hr>
        		<h3>${{$product['price']}}</h3>
        		<hr>

				{!! Form::submit('Add To Cart',['class'=>'btn btn-primary btn-lg btn-block','style'=>'margin-top: 10px']) !!}

        		{!! Form::close() !!}
        	</div>
        </div>
        
	</div>
</div>

@endsection