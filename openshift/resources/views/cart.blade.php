@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <div class="panel panel-default">
	                <div class="panel-heading">Shopping Cart</div>
	                <div class="panel-body">

						{!! Form::open(['url'=>'cart/checkout']) !!}

							<div class="row" style="margin-top:5px">
				                    <div class="col-xs-12">
				                        <table class="table">
				                            <thead>
												@if(count($products) == 0)
						                                    
										            <tr>
										                <td colspan="4">
										                    Cart is empty. I want buy something :(
										                </td>
										            </tr>
												@else
													<tr>				
														<th></th>				                        	
								                        <th class="name">Name</th>
								                        <th class="desc">Price</th>

								                        <th class="price">Pic</th>


								                    </tr>
									
							
													@foreach($products as $product)
														<tr>
									                        <td class="select">
									                        	{!! Form::radio('productId',$product['product_id']) !!}
									                        </td>
									                        <td class="name">{{ $product['product_name'] }}</td>
									                        <td class="price">{{ $product['price'] }}</td>
									                        <td class="picture path"><img src="{{ $product['picture_path'] }}"></td>
				                                        	
									                    </tr>
													@endforeach
														<tr>
															<td colspan="4" style="text-align: right;">Total Price :${{$total}}

															
																{!! Form::submit('Check Out',['name'=>'action','class'=>'btn btn-primary']) !!}
															</td>
														</tr>
													{!! Form::submit('Delete',['name'=>'action','class'=>'btn btn-primary']) !!}

												@endif

				                            </thead>
				                        </table>
				                    </div>
				            </div>

						
						{!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>


	</div>

@endsection