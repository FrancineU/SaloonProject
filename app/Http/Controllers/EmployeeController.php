<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller {
    public function allEmployees () {
        return view('allEmployees');
    }

    public function addNewEmployee () {
        return view('addNewEmployee');
    }
}
