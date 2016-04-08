var app = angular.module('ecomApp',[],function($interpolateProvider){
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

app.factory('httpRequestService',['$http',function($http){
	var httpRequestService = [];
	httpRequestService.saveCategories = function(callInData){
		var request = $http({
			'method':'POST',
			'data':callInData,
			'url':'api/categories',
			'headers':{
				'Content-Type':'application/json;charset=utf-8'
			}
		});
		return request;
	};
	httpRequestService.saveProducts = function(callInData){
		var request = $http({
			'method':'POST',
			'data':callInData,
			'url':'api/products',
			'headers':{
				'Content-Type':'application/json;charset=utf-8'
			}
		});
		return request;
	};
	httpRequestService.getCategories = function(){
		return $http.get('/api/categories');
	};
	httpRequestService.getProducts = function(){
		return $http.get('/api/products');
	};
	return httpRequestService;
}])
.controller('productList',function($scope,$http,httpRequestService){
	var productHolder = []
	httpRequestService.getCategories()
		.success(function(data){
			$scope.categories = data;
		});

	httpRequestService.getProducts()
		.success(function(data){
			productHolder = data;
			$scope.products = data;
		});
	$scope.cateClick = function(id){
		
		$scope.products = productHolder.filter(function(product){
			return product.category_id === id;
		});
	}
});