<div class="container" ng-controller="productList">
    Your order List is :
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <!-- product list  -->
            @foreach( $products as $product)
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <img src="{{$product['picture_path']}}" class="img-thumbnail pull-xs-left">
                    <h4 class="pull-right">{{$product['price']}}</h4>
                    <h4>{{$product["product_name"]}}</h4>
                </div>
            @endforeach
        </div>
    </div>
    Thanks for shopping with HappyBuy. We are more than happy to serve you. : )
</div>