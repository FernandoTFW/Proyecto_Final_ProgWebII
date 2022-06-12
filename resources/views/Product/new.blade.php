@extends("templates.main")
@section("title", "New product")
@section("script")
<script>
    var app = angular.module('ProductNewModule', [])
    app.controller('ProductNewController', ($scope, $http) => {
        $scope.product = {}
        $scope.postProduct = () => {
            $http.post('/products', $scope.product).then((result) => {
                window.location.href = '/list'
            })
        }
    })
</script>
@stop
@section("content")
<div ng-app="ProductNewModule" ng-controller="ProductNewController">
    <form>
        <div>
            Product name:
            <input type="text" ng-model="product.productName" class="form-control">
        </div>
        <div>
            Product price:
            <input type="text" ng-model="product.productPrice" class="form-control">
        </div>
        <div>
            Stock:
            <input type="text" ng-model="product.stock" class="form-control">
        </div>
        <div>
            Net content:
            <input type="text" ng-model="product.netContent" class="form-control">
        </div>
        <div>
            <button type="button" ng-click="postProduct()" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop