<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/userpage.css">
</head>
<body>
    <div class="userpage">
            <h1 class="heading ">Create New User</h1>
            <form class="inputForm" method="POST" action="/store">
                @csrf
                <div class="mb-5">
                    <label><b>UserName:</b></label>
                    <input type="text" name="name" class="form-control" required="true" autocomplete="off">
                </div>
                <div class="mb-5">
                    <label><b>Address:</b></label>
                    <input type="text" name="address" class="form-control" required="true" autocomplete="off">
                </div>
                <div class="mb-5">
                    <label><b>Email:</b></label>
                    <input type="email" name="email" class="form-control" required="true" autocomplete="off">
                </div>
            <div class="mb-5">
                <label><b>Contact no:</b></label>
                <input type="number" name="contact" class="form-control" autocomplete="off">
            </div>
            <input type="submit" name="insert" value="Add User" required="true" class="btn btn-primary" autocomplete="off">
            
        </form>
        <div class="showUsers">
            <a href="{{ url('showUsers') }}" class="btn btn-xs btn-info pull-right">Show Users</a>
        </div>
    </div>
</body>
</html>