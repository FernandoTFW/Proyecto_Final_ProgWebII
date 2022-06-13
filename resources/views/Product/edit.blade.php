@extends("templates.main")
@section("title", "Edit product")
@section("script")
<script>
    var app = angular.module('ProductEditModule', [])
    app.controller('ProductEditController', ($scope, $http) => {
        $scope.product = {}
        angular.element(document).ready(function() {
            let ids = window.location.href.split('/')
            let id = ids[ids.length - 1]

            $http.get(`/products/${id}`).then((result) => {
                $scope.product = result.data
            })
        })

        $scope.putProduct = () => {
            $http.put('/products', $scope.product).then((result) => {
                window.location.href = '/products/listproducts'
            })
        }
    })
</script>
@stop
@section("content")
<div ng-app="ProductEditModule" ng-controller="ProductEditController">
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
            <button type="button" ng-click="putProduct()" class="btn btn-primary">Submit</button>
            <a href="/products/listproducts" class="btn btn-primary">Go Back</a>
        </div>
    </form>
</div>
@stop