<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAIRSTYLE</title>
</head>
<body>
<h2>Hairstyle</h2>
=======
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>HAIRSTYLE</title>
    </head>
    <body>
        <h2>Hairstyle</h2>
>>>>>>> 11df908a19a1eba294aa9d3751849e6039d87c93
        @if(isset($updatingValues))
        <form action="/hairstyle/{{ $updatingValues->id }}/update" method="post">
            @csrf
            <input
                type="text"
                name="name"
                value="{{ $updatingValues->name }}"
                placeholder="Enter Hairstyle Name"
                required
            />
            <select name="saloon_id" required>
                @foreach ($saloons as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <button type="submit">Update Hairstyle</button>
        </form>
        @else
        <form action="/hairstyle" method="post">
            @csrf
            <input
                type="text"
                name="name"
                placeholder="Enter Hairstyle Name"
                required
            />
            <select name="saloon_id" required>
<<<<<<< HEAD
                @foreach ($saloonValues as $item)
=======
                @foreach ($saloons as $item)
>>>>>>> 11df908a19a1eba294aa9d3751849e6039d87c93
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <button type="submit">Save Hairstyle</button>
        </form>
        @endif
        <hr />

        <table border="1">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Saloon</th>
                <th>Timestamps</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($saloonValues as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ \App\Models\Saloon::find($item->saloon_id)->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="/saloon/{{ $item->id }}/update">Update</a> |
                        <a href="/saloon/{{ $item->id }}/delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
<<<<<<< HEAD
</body>
</html>
=======
    </body>
</html>
>>>>>>> 11df908a19a1eba294aa9d3751849e6039d87c93
