<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>haitype</title>
</head>
<body>
    <h1>HairType Information<h1>
     @if(isset( $updatingValues ))
<form action ="/hairtype/{{ $updatingValues->id }}/update" method="post">
  @csrf
 <input type="text" name="name" value="{{$updatingValues->name}}"  required/>
 <input type="text" name="size" value="{{$updatingValues->size}}"  required/>
 <button type="submit">update</button>
</form>

@else
    <form action="/hairtype" method="post" >
    @csrf
  <label for="Name"> Name:</label>
  <input type="text" name="name" required/><br>
  <label for="size">Size:</label>
  <input type="text" name="size" required/><br>
  <button type ="submit"> Save </button>
</form>
@endif

<table  >
  <thead>
     <th>ID</th>
  
    <th>Size</th>
     <th> Name</th>
    <th> Action</th>

  </thead>

  <tbody>
    @foreach($hairtypeValues as $item)
      <tr>
          <td>{{$item->id}}<td>
          <td>{{$item->name}}<td>
          <td>{{$item->size}}<td>
          <td>
          <a href=" /hairtype/{{ $item->id}}/update">Update</a>
          <a href="/hairtype/{{ $item->id}}/delete">Delete</a>
          </td>
      </tr>
    @endforeach
 </tbody>
</table>
</body>
</html>