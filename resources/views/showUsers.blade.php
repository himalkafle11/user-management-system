<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-bordered shadow text-center table-striped">
            <tr>
                <th>UserId</th>
                <th>UserName</th>
                <th>UserAddress</th>
                <th>UserContact</th>
            </tr>
            @foreach ($users as $user )
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{$user->user_name }}</td>
                <td>{{$user->user_address }}</td>
                <td>{{$user->user_contact }}</td>
            </tr>
                
            @endforeach
        </table>
    </div>
</body>
</html>