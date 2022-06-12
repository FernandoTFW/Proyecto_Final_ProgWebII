@extends("templates.main")
@section("title", "Branch List")
@section("script")
<script>
    var app = angular.module('BranchListModule', [])
    app.controller('BranchListController', ($scope, $http) => {
        angular.element(document).ready(function() {
            $http.get('/branchs').then((result) => {
                $scope.branchs = result.data
            })
        })
    })
</script>
@stop
@section("content")
<div ng-app="BranchListModule" ng-controller="BranchListController">
    <table class="table table-dark">
        <thead>
            <tr>
                <th>
                    Address
                </th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="branch in branchs">
                <td>
                    @{{ branch.address }}
                </td>
                
            </tr>
        </tbody>
    </table>
</div>
@stop