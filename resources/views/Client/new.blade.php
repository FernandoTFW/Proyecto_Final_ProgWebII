@extends("templates.main")
@section("title", "New client")
@section("script")
<script>
    var app = angular.module('ClientNewModule', [])
    app.controller('ClientNewController', ($scope, $http) => {
        $scope.client = {}
        $scope.postClient = () => {
            $http.post('/clients', $scope.client).then((result) => {
                window.location.href = '/listclients'
            })
        }
    })
</script>
@stop
@section("content")
<div ng-app="ClientNewModule" ng-controller="ClientNewController">
    <form>
        <div>
            Business name:
            <input type="text" ng-model="client.businessName" class="form-control">
        </div>
        <div>
            Nit:
            <input type="text" ng-model="client.nit" class="form-control">
        </div>
        <div>
            <button type="button" ng-click="postClient()" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop