@extends('layouts/app')
@section('content')
<div class="row py-4">
    <div class="col">
        <h2>Add New Saloon</h2>
        <hr>
        @if(isset($updatingValues))
            <form action="/saloon/{{$updatingValues->id}}/update" method="post">
                @csrf
                <input type="text" class="form-control" name="name" value="{{ $updatingValues->name }}" placeholder="Enter Saloon Name" required/>
                <input type="text" class="form-control" name="location" value="{{$updatingValues->location}}" placeholder="Enter location" required/>
                <input type="text" class="form-control" name="services" value="{{$updatingValues->services}}" placeholder="ENter services" required/>
                <button type="submit" class="btn btn-success">Update Saloon</button>
            </form>
        @else
            <form action="/saloon" method="post" class="form">
                @csrf
                <div class="form-group mt-2">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter saloon name" required />
                </div>
                <div class="form-group mt-2">
                    <label for="location">Location <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter saloon location" required />
                </div>
                <div class="form-group mt-2">
                    <label for="services">Services <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="services" name="services" placeholder="Compose saloon services" required></textarea>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success">Save Saloon</button>
                </div>
            </form>
        @endif
    </div>
</div>
@endsection
