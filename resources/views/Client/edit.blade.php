@extends("templates.main")
@section("title", "Edit client")
@section("script")
<script>
    var app = angular.module('ClientEditModule', [])
    app.controller('ClientEditController', ($scope, $http) => {
        $scope.client = {}
        angular.element(document).ready(function() {
            let ids = window.location.href.split('/')
            let id = ids[ids.length - 1]

            $http.get(`/clients/${id}`).then((result) => {
                $scope.client = result.data
            })
        })

        $scope.putClient () => {
            $http.put('/clients', $scope.client).then((result) => {
                window.location.href = '/listclients'
            })
        }
    })
</script>
@stop
@section("content")
<div ng-app="ClientEditModule" ng-controller="ClientEditController">
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
            <button type="button" ng-click="putClient()" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@stop