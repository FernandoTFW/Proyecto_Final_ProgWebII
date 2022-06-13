@extends("templates.main")
@section("title", "Product List")
@section("script")
<script>
    var app = angular.module('ProductListModule', [])
    app.controller('ProductListController', ($scope, $http) => {
        angular.element(document).ready(function() {
            $http.get('/products').then((result) => {
                $scope.products = result.data
            })
        })
        $scope.deleteProduct = (id) => {
            $http.delete(`/products/${id}`).then((result) => {
                $http.get('/products').then((result) => {
                $scope.products = result.data
            })
            })
        }
    })
    
</script>
@stop
@section("content")
<div ng-app="ProductListModule" ng-controller="ProductListController">
    <table class="table table-dark">
        <thead>
            <tr>
                <th>
                    Product name
                </th>
                <th>
                    Product price
                </th>
                <th>
                    Stock
                </th>
                <th>
                    Net content
                </th>
                <th>
                    
                </th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="product in products">
                <td>
                    @{{ product.productName }}
                </td>
                <td>
                    @{{ product.productPrice }}
                </td>
                <td>
                    @{{ product.stock }}
                </td>
                <td>
                    @{{ product.netContent }}
                </td>
                <td>
                    <button type="button" ng-click="deleteProduct(product.id)" class="btn btn-primary">Delete</button>
                    <a href="@{{ '/products/editproduct/' + product.id }}" class="btn btn-primary">Edit</a>
                    <a href="@{{ '/purchases/newpurchase/' + product.id }}" class="btn btn-success">Buy</a>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/products/newproduct" class="btn btn-dark">New Product</a>
</div>
@stop