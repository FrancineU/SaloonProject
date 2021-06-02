<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller {
    public function allEmployees () {
        $employees = Employee::get();
        return view('Employees', [
            'employees' => $employees
        ]);
    }

    public function addNew (){
        return view('employee');
    }

    public function saveNew (REQUEST $request) {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->location = $request->location;
        $employee->account_number = $request->account_number;
        $employee->services = $request->services;
        $employee->save();
        return redirect('employees');
    }

    public function update ($id) {
        $employee = Employee::find($id);
        return view('employee', [
            'salon' => $employee,
        ]);
    }

    public function saveUpdate (REQUEST $request, $id) {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->location=$request->location;
        $employee->services=$request->services;
        $employee->save();
        return redirect('/employees');
    }

    public function delete ($id) {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employees');
    }
}
