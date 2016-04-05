var app = angular.module('ecomApp',[],function($interpolateProvider){
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});

app.factory('httpRequestService',['$http',function($http){
	var httpRequestService = [];
	httpRequestService.save = function(callInData){
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
	httpRequestService.get = function(){
		return $http.get('/api/products');
	};
	return httpRequestService;
}])
.controller('productList',function($scope,$http,httpRequestService){
	httpRequestService.get()
		.success(function(data){
			$scope.test = data;
		});
});