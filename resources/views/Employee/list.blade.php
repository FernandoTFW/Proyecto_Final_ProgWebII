@extends("templates.main")
@section("title", "Employee List")
@section("script")
<script>
    var app = angular.module('EmployeeListModule', [])
    app.controller('EmployeeListController', ($scope, $http) => {
        angular.element(document).ready(function() {
            $http.get('/employee').then((result) => {
                $scope.employee = result.data
            })
        })
        $scope.deleteEmployee = (id) => {
            $http.delete(`/employee/${id}`).then((result) => {
                $http.get('/employee').then((result) => {
                $scope.employee = result.data
            })
            })
        }
    })
</script>
@stop
@section("content")
<div ng-app="EmployeeListModule" ng-controller="EmployeeListController">
    <table class="table table-dark">
        <thead>
            <tr>
                <th>
                    First Name
                </th>
                <th>
                    Last Name
                </th>
                <th>
                    charge
                </th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="employee in employeee">
                <td>
                    @{{ employee.firstName }}}
                </td>
                <td>
                    @{{ employee.lastName }}}}
                </td>
                <td>
                    @{{ employee.charge }}
                </td>
                <td>
                    <button type="button" ng-click="deleteEmployee(employee.id)" class="btn btn-primary">Delete</button>
                    <a href="@{{ '/employee/editemployee/' + employee.id }}" class="btn btn-primary">Edit</a>
                </td>
                
            </tr>
        </tbody>
    </table>
    <a href="/employee/newemployee" class="btn btn-dark">New Employee</a>
</div>

@stop