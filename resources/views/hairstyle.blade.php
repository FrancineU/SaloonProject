<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAIRSTYLE</title>
</head>
<body>
    <h2>Hairstyle</h2>
    <form action="/hairstyle" method="post">
        <input type="text" name="name" placeholder="Enter Hairstyle Name" required />
        <select name="cars" id="cars">
           <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
           <option value="audi">Audi</option>
        </select> 
        <button type="submit">Save Hairstyle</button>
    </form>
    <hr>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Saloon ID</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ordinaire</td>
                <td>Sarah's Saloon</td>
                <td>
                    <a href="#">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>