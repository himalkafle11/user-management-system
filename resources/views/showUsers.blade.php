<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Management System</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/showusers.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <table class="table table-bordered shadow text-center table-striped">
            <tr>
                <th>User-Id</th>
                <th>User-Name</th>
                <th>User-Address</th>
                <th>User-Email</th>
                <th>User-Contact</th>
                <th>Delete-User</th>
                <th>Update-User</th>
            </tr>
            @foreach ($users as $user )
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{$user->user_name }}</td>
                <td>{{$user->user_address }}</td>
                <td>{{$user->user_email }}</td>
                <td>{{$user->user_contact }}</td>
                <td><a href="/delete/{{ $user->id }}" class="btn btn-danger" onclick= 'return confirm("Delete the user?")'>Delete User</a></td>
                <td><a href="/edit/{{ $user->id }}" class="btn btn-success">Update User</a></td>
            </tr>
            @endforeach
        </table>
        <a href="{{ url('userpage') }}" class="btn btn-xs btn-info pull-right">Create New User</a>
        <a href="{{ url('/') }}" class="btn btn-xs btn-warning pull-right pl-3">LogOut of System</a>
</body>
</html>