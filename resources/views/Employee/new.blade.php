@extends("templates.main")
@section("title", "New Employee")
@section("script")
<script>
    var app = angular.module('EmployeeNewModule', [])
    app.controller('EmployeeNewController', ($scope, $http) => {
        $scope.employee = {}
        $scope.postEmployee = () => {
            $http.post('/employees', $scope.employee).then((result) => {
                window.location.href = '/employees/listemployee'
            })
        }
    })
</script>
@stop
@section("content")
<div ng-app="EmployeeNewModule" ng-controller="EmployeeNewController">
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
            <button type="button" ng-click="postEmployee()" class="btn btn-success">Submit</button>
            <a href="/employees/listemployees" class="btn btn-primary">Go Back</a>
        </div>
    </form>
</div>
@stop