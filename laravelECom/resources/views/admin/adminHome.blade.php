@extends('layouts.adminLayout')

@section('content')

	<div class="container">
		<div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <div class="panel panel-default">
	                <div class="panel-heading">Product List</div>
	                <div class="panel-body">

						{!! Form::open(['url'=>'admin/main']) !!}

							<div class="row" style="margin-top:5px">
				                    <div class="col-xs-12 table-responsive">
				                        <table class="table">
				                            <thead>
												@if(count($products) == 0)
						                                    
										            <tr>
										                <td colspan="4">
										                    Product List is empty. :(
										                </td>
										            </tr>
												@else
													<tr>
								                        <td class="select">
								                        	
								                        </td>
								                        <th class="name">Name</td>
								                        <th class="desc">Desc</td>
								                        <th class="detail">Detail</td>
								                        <th class="price">Price</td>
								                        <th class="categoryId">CID</td>
								                        <th class="availablity">Avai</td>
								                        <th class="picture path">PicP</td>

								                    </tr>
									
							
													@foreach($products as $product)
														<tr>
									                        <td class="select">
									                        	{!! Form::radio('productId',$product['product_id']) !!}
									                        </td>
									                        <td class="name">{{ $product['product_name'] }}</td>
									                        <td class="desc">{{ $product['product_desc'] }}</td>
									                        <td class="detail">{{ $product['product_detail'] }}</td>
									                        <td class="price">{{ $product['price'] }}</td>
									                        <td class="categoryId">{{ $product['category_id'] }}</td>
									                        <td class="availablity">{{ $product['product_available'] }}</td>
									                        <td class="picture path">{{ $product['picture_path'] }}</td>

									                    </tr>

													@endforeach


													<tr>
				                                        <th colspan="4">
				                                        	{!! Form::submit('Edit',['name'=>'action','class'=>'btn btn-primary']) !!}
				                                        	{!! Form::submit('Delete',['name'=>'action','class'=>'btn btn-primary']) !!}
				                                        </th>
				                                    </tr>

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