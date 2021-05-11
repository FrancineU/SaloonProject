<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALOON</title>
</head>
<body>
    <h2>Saloon</h2>
    @if(isset($updatingValues))
    <form action="/saloon/{{$updatingValues->id}}/update" method="post">
        @csrf
        <input type="text" name="name" value="{{ $updatingValues->name }}" placeholder="Enter Saloon Name" required />
        <button type="submit">Update Saloon</button>
    </form>
    @else
    <form action="/saloon" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Saloon Name" required />
        <button type="submit">Save Saloon</button>
    </form>
    @endif
    <hr>

    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Timestamps</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($saloonValues as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a href="/saloon/{{ $item->id }}/update">Update</a> |
                    <a href="/saloon/{{ $item->id }}/delete">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>