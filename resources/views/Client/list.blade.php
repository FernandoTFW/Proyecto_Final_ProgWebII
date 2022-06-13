@extends("templates.main")
@section("title", "Client List")
@section("script")
<script>
    var app = angular.module('ClientListModule', [])
    app.controller('ClientListController', ($scope, $http) => {
        angular.element(document).ready(function() {
            $http.get('/clients').then((result) => {
                $scope.clients = result.data
            })
        })
        $scope.deleteClient = (id) => {
            $http.delete(`/clients/${id}`).then((result) => {
                $http.get('/clients').then((result) => {
                $scope.clients = result.data
            })
            })
        }
    })
</script>
@stop
@section("content")
<div ng-app="ClientListModule" ng-controller="ClientListController">
    <table class="table table-dark">
        <thead>
            <tr>
                <th>
                    Business name
                </th>
                <th>
                    Nit
                </th>
                <th>
                    
                </th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="client in clients">
                <td>
                    @{{ client.bussinessName }}
                </td>
                <td>
                    @{{ client.nit }}
                </td>
                <td>
                    <button type="button" ng-click="deleteClient(client.id)" class="btn btn-primary">Delete</button>
                    <a href="@{{ '/clients/editclient/' + client.id }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/clients/newclient" class="btn btn-dark">New Client</a>
</div>
@stop