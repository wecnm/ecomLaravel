@extends('layouts.app')

@section('content')
<div class="container" ng-controller="productList">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <button type="button" class="list-group-item" ng-repeat="category in categories" ng-click="cateClick(category.category_id)"><% category.category_name %></button>
            </div>
            
        </div>
        <div class="col-md-8 col-md-offset-1">
            <!-- product list  -->
            <div class="row">
                <div class="col-sm-4 col-lg-4 col-md-4" ng-repeat="product in products">
                    
                    <img src="..." class="img-thumbnail" style="width:100%">
                    <h4 class="pull-right"><% product.price %></h4>
                    <h4><a href=""><% product.product_name %></a></h4>
                    <p><% product.product_desc %></p>
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
