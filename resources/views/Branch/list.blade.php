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
        $scope.deleteBranch = (id) => {
            $http.delete(`/branchs/${id}`).then((result) => {
                $http.get('/branchs').then((result) => {
                $scope.branchs = result.data
            })
            })
        }
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
                <th>
                    
                </th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="branch in branchs">
                <td>
                    @{{ branch.address }}
                </td>
                <td>
                    <button type="button" ng-click="deleteBranch(branch.id)" class="btn btn-primary">Delete</button>
                    <a href="@{{ '/branchs/editbranch/' + branch.id }}" class="btn btn-primary">Edit</a>
                </td>
                
            </tr>
        </tbody>
    </table>
    <a href="/branchs/newbranch" class="btn btn-dark">New Branch</a>
</div>

@stop