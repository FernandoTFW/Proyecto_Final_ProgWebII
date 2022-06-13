@extends("templates.main")
@section("title", "New Branch")
@section("script")
<script>
    var app = angular.module('BranchNewModule', [])
    app.controller('BranchNewController', ($scope, $http) => {
        $scope.branch = {}
        $scope.postBranch = () => {
            $http.post('/branchs', $scope.branch).then((result) => {
                window.location.href = '/branchs/listbranchs'
            })
        }
    })
</script>
@stop
@section("content")
<div ng-app="BranchNewModule" ng-controller="BranchNewController">
    <form>
        <div>
            Address:
            <input type="text" ng-model="branch.address" class="form-control">
        </div>
       
        <div>
            <button type="button" ng-click="postBranch()" class="btn btn-success">Submit</button>
            <a href="/branchs/listbranchs" class="btn btn-primary">Go Back</a>
        </div>
    </form>
</div>
@stop