@extends('layouts.adminLayout')

@section('content')

	<div class="container">
		<div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <div class="panel panel-default">
	                <div class="panel-heading">New Product Form</div>
	                <div class="panel-body">

						{!! Form::open(['url'=>'admin/new']) !!}
							<div class="row" style="margin-top:20px">
				                <div class="col-xs-12">
				                    <h4>New Product</h4>
				                </div>                
				            </div>

							<div class="row" style="margin-top:5px">
				                <div class="col-xs-2">
				                    {!! Form::label(null,'Product Name') !!}
				                </div>
				                <div class="col-xs-10">
				                    {!! Form::text('product_name',null,['size'=>100]) !!}
				                </div>
				            </div>

				            <div class="row" style="margin-top:10px">
				                <div class="col-xs-2">
				                    {!! Form::label(null,'Description') !!}
				                </div>
				                <div class="col-xs-10">
				                    {!! Form::text('product_desc',null,['size'=>100]) !!}
				                </div>
				            </div>

				            <div class="row" style="margin-top:10px">
				                <div class="col-xs-2">
				                    {!! Form::label(null,'Detail') !!}
				                </div>
				                <div class="col-xs-10">
				                    {!! Form::text('product_detail',null,['size'=>100]) !!}
				                </div>
				            </div>

				            <div class="row" style="margin-top:10px">
				                <div class="col-xs-2">
				                    {!! Form::label(null,'CategoryId') !!}
				                </div>
				                <div class="col-xs-10">
				                    {!! Form::number('category_id',null,['size'=>100]) !!}
				                </div>
				            </div>

				            <div class="row" style="margin-top:10px">
				                <div class="col-xs-2">
				                    {!! Form::label(null,'Product Price') !!}
				                </div>
				                <div class="col-xs-10">
									  <input type="float" name="price" value="">
				                </div>
				            </div>

				            <div class="row" style="margin-top:10px">
				                <div class="col-xs-2">
				                    {!! Form::label(null,'Picture Path') !!}
				                </div>
				                <div class="col-xs-10">
				                    {!! Form::text('picture_path',null,['size'=>100]) !!}
				                </div>
				            </div>


							 <div class="row" style="margin-top: 10px">
				                <div class="col-xs-2">
				                    {!! Form::label(null,'availablity') !!}
				                </div>
				                <div class="col-xs-10">
				                    <label class="c-input c-checkbox">
									  <input type="checkbox" name="product_available" value="1">
									  <span class="c-indicator"></span>
									  Check if this product is available
									</label>
									<th/>
				                </div>
				            </div>


							{!! Form::submit('Add',['name'=>'action','class'=>'btn btn-primary-outline btn-lg btn-block','style'=>'margin-top: 10px']) !!}

							@include('errors.validationError')
							<!-- this place should have error handler -->

						
						{!! Form::close() !!}

					</div>
				</div>
			</div>
		</div>


	</div>

@endsection