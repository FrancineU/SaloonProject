@extends('layouts/app')
@section('content')
<div class="row py-4">
    <div class="col">
        <h2>All Saloons</h2>
        <hr>
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Services</th>
                <th>Timestamps</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($saloons as $saloon)
                <tr>
                    <td>{{ $saloon->id }}</td>
                    <td>{{ $saloon->name }}</td>
                    <td>{{ $saloon->location }}</td>
                    <td>{{ $saloon->services }}</td>
                    <td>{{ $saloon->created_at }}</td>
                    <td>
                        <a href="/saloon/{{ $saloon->id }}/update" class="btn btn-primary">Update</a>
                        <a href="/saloon/{{ $saloon->id }}/delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
