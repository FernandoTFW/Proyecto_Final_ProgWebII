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
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="client in clients">
                <td>
                    @{{ client.businessName }}
                </td>
                <td>
                    @{{ client.nit }}
                </td>
                <td>
                    <button type="button" ng-click="deleteClient(client.id)" class="btn btn-primary">Delete</button>
                    <a href="@{{ '/products/editproduct/' + client.id }}" class="btn btn-primary">Edit</a>
                    <a href="@{{ '/purchases/newpurchase/' + client.id }}" class="btn btn-success">Buy</a>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/newClient" class="btn btn-dark">New Client</a>
</div>

@stop