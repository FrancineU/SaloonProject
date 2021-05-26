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
                @foreach($saloonValues as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->location }}</td>
                    <td>{{ $item->services }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="/saloon/{{ $item->id }}/update" class="btn btn-primary">Update</a>
                        <a href="/saloon/{{ $item->id }}/delete" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
