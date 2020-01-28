
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Table</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form action="add.php" method="post" id="tableForm">
    <table border="1" style="border-collapse:collapse">
        <tr>
            <td>Id</td>
            <td>Full Name</td>
            <td>Uers Name</td>
            <td>Password</td>
            <td>Email Address</td>
            <td>Delete</td>
            <td>Update</td>
        </tr>

           @foreach($all as $users)
            <tr>
                    <td>{{$users->id}}</td>
                    <td>{{$users->fullname}}</td>
                    <td>{{$users->username}}</td>
                    <td>{{$users->email}}</td>
                    <td>{{$users->password}}</td>

                <td>
                    <a href='{{'deleteUser'."$users->id"}}'>
                        {{'delete'}}
                    </a>
                </td>

                <td>
                    <a href='{{'updateUser'}}?id={{$users->id}}'>
                        {{'update'}}
                    </a>
                </td>

            </tr>;

            @endforeach

        <tr>
            <td colspan="7">
            <input type="submit" name='add' value="ADD" id="tableInput">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
