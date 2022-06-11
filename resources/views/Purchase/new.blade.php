@extends("templates.main")
@section("title", "New product")
@section("script")
<script>
    var app = angular.module('PurchaseNewModule', [])
    app.controller('PurchaseNewController', ($scope, $http) => {
        $scope.purchase = {}
        $scope.client = {}
        $scope.purchaseDetail ={}
        $scope.postPurchase = () => {
            $http.post('/purchase', $scope.product).then((result) => {
                
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
            <input type="text" ng-model="client.businessName" class="form-control">
        </div>
        <div>
            Client Nit:
            <input type="text" ng-model="client.nit" class="form-control">
        </div>
        <div>
            Product quantity:
            <input type="text" ng-model="purchase.productPrice" class="form-control">
        </div>
        <div>
            Product price:
            <input type="text" ng-model="purchase.productPrice" class="form-control">
        </div>
        <div>
            Date:
            <input type="date" ng-model="purchase.stock" class="form-control">
        </div>
        <div>
            <button type="button" ng-click="postPurchase()" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop