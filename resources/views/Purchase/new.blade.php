@extends("templates.main")
@section("title", "New product")
@section("script")
<script>
    var app = angular.module('PurchaseNewModule', [])
    app.controller('PurchaseNewController', ($scope, $http) => {
        $scope.purchase = {}
        $scope.product = {}
        angular.element(document).ready(function() {
            let ids = window.location.href.split('/')
            let id = ids[ids.length - 1]

            $http.get(`/products/${id}`).then((result) => {
                $scope.product = result.data
            })
        })
        $scope.postPurchase = () => {
            $scope.purchase.productId = $scope.product.id
            $http.post('/purchases', $scope.purchase).then((result) => {
                window.location.href = '/index'
            })
            
        }
    })
</script>
@stop
@section("content")
<div ng-app="PurchaseNewModule" ng-controller="PurchaseNewController">
    <form>
        <div>
            Client name:
            <input type="text" ng-model="purchase.businessName" class="form-control">
        </div>
        <div>
            Client Nit:
            <input type="text" ng-model="purchase.nit" class="form-control">
        </div>
        <div>
            Product quantity:
            <input type="text" ng-model="purchase.quantity" class="form-control">
        </div>
        <div>
            Product price:
            <input type="text" ng-model="purchase.unitPrice" class="form-control">
        </div>
        <div>
            Date:
            <input type="date" ng-model="purchase.date" class="form-control">
        </div>
        <div>
            <button type="button" ng-click="postPurchase()" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop