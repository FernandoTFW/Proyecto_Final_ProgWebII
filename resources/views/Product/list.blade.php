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
            </tr>
        </tbody>
    </table>
    <a href="/newProduct" class="btn btn-dark">New Product</a>
</div>
@stop