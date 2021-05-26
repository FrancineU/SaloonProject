<div class="col-12 bg-success">
    @if (Request::is(['home']))
    <h5 class="text-white my-4 float-start">Home</h5>
    @elseif (Request::is(['saloons','saloons/*']))
    <h5 class="text-white my-4 float-start">Saloons</h5>
    @elseif (Request::is(['employees','employees/*']))
    <h5 class="text-white my-4 float-start">Employees</h5>
    @elseif (Request::is(['appointments','appointments/*']))
    <h5 class="text-white my-4 float-start">Appointments</h5>
    @endif

    <div class="text-white float-end m-3">
        @if (Request::is(['saloons']))
        <a href="/saloons/add" class="btn btn-outline-light">Add New Saloon</a>
        @elseif (Request::is(['saloons/add']))
        <a href="/saloons" class="btn btn-outline-light">Go Back</a>

        @elseif (Request::is(['employees']))
        <a href="/employees/add" class="btn btn-outline-light">Add New Employee</a>
        @elseif (Request::is(['employees/add']))
        <a href="/employees" class="btn btn-outline-light">Go Back</a>

        @elseif (Request::is(['appointments/*']))
        <a href="/appointments" class="btn btn-outline-light">Go Back</a>
        @endif
    </div>
</div>
