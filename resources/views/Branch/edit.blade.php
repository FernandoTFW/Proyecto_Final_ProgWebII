@extends("templates.main")
@section("title", "Edit Branch")
@section("script")
<script>
    var app = angular.module('BranchEditModule', [])
    app.controller('BranchEditController', ($scope, $http) => {
        $scope.branch = {}
        angular.element(document).ready(function() {
            let ids = window.location.href.split('/')
            let id = ids[ids.length - 1]

            $http.get(`/branchs/${id}`).then((result) => {
                $scope.branch = result.data
            })
        })

        $scope.putBranch () => {
            $http.put('/branchs', $scope.branch).then((result) => {
                window.location.href = '/listbranchs'
            })
        }
    })
</script>
@stop
@section("content")
<div ng-app="BranchEditModule" ng-controller="BranchEditController">
    <form>
        <div>
            Address:
            <input type="text" ng-model="branch.address" class="form-control">
        </div>
        
        <div>
            <button type="button" ng-click="putBranch()" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>

@stop