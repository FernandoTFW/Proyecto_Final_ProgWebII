<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use DB;

class EmployeeController extends Controller
{
    public function getEmployees() {
        return Employee::all();
    }

    public function getEmployee($id) {
        return Employee::find($id);
    }

    public function listEmployees() {
        return view("Employee.list", ["employee" => Employee::all()]);
    }

    public function newEmployee() {
        return view("Employee.new");
    }

    public function postEmployee(Request $request) {
        Employee::create([
            "firstName" => $request->firstName,
            "lastName" => $request->lastName,
            "charge" => $request->charge
        ]);
        return ['result' => 'ok'];
    }

    public function editEmployee($id) {
        $employee = Employee::where(["id" => $id])->first();
        return view("Employee.edit", ["employee" => $employee]);
    }

    public function putEmployee(Request $request) {
        $employee = Employee::where(["id" => $request->id])->first();
        $employee->firstName = $request->firstName;
        $employee->lastName = $request->lastName;
        $employee->charge = $request->charge;
        $employee->update();
        return ['result' => 'ok'];
    }

    public function deleteEmployee(Request $request) {
        $employee = Employee::where(["id" => $request->id])->first();
        $employee->delete();
        return ['result' => 'ok'];
    }
}