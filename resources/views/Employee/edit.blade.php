@extends("templates.main")
@section("title", "Edit Employee")
@section("script")
<script>
    var app = angular.module('EmployeeEditModule', [])
    app.controller('EmployeeEditController', ($scope, $http) => {
        $scope.employee = {}
        angular.element(document).ready(function() {
            let ids = window.location.href.split('/')
            let id = ids[ids.length - 1]

            $http.get(`/employees/${id}`).then((result) => {
                $scope.employee = result.data
            })
        })

        $scope.putEmployee = () => {
            $http.put('/employees', $scope.employee).then((result) => {
                window.location.href = '/employees/listemployees'
            })
        }
    })
</script>
@stop
@section("content")
<div ng-app="EmployeeEditModule" ng-controller="EmployeeEditController">
    <form>
        <div>
            First Name:
            <input type="text" ng-model="employee.firstName" class="form-control">
        </div>
        <div>
            Last Name:
            <input type="text" ng-model="employee.lastName" class="form-control">
        </div>
        <div>
            Charge:
            <input type="text" ng-model="employee.charge" class="form-control">
        </div>
        
        <div>
            <button type="button" ng-click="putEmployee()" class="btn btn-success">Submit</button>
            <a href="/employees/listemployees" class="btn btn-primary">Go Back</a>
        </div>
    </form>
</div>

@stop