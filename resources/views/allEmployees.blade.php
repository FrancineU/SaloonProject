@extends('layouts/app')
@section('content')
<div class="row py-4">
    <div class="col">
        <h2>All Employees</h2>
        <hr>
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Saloon</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->saloon }}</td>
                    <td>
                        <a href="/employees/{{ $employee->id }}/update" class="btn btn-primary">Update</a>
                        <a href="/employees/{{ $employee->id }}/delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
