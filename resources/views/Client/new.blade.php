@extends("templates.main")
@section("title", "New client")
@section("script")
<script>
    var app = angular.module('ClientNewModule', [])
    app.controller('ClientNewController', ($scope, $http) => {
        $scope.client = {}
        $scope.postClient = () => {
            $http.post('/clients', $scope.client).then((result) => {
                window.location.href = '/clients/listclients'
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
            <input type="text" ng-model="client.bussinessName" class="form-control">
        </div>
        <div>
            Nit:
            <input type="text" ng-model="client.nit" class="form-control">
        </div>
        <div>
            <button type="button" ng-click="postClient()" class="btn btn-primary">Submit</button>
            <a href="/clients/listclients" class="btn btn-primary">Go Back</a>
        </div>
    </form>
</div>
@stop