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
        <h1 class="text-center">Create New User</h1>
        <form method="POST" action="/store">
            @csrf
            <div class="mb-3">
                <label><b>UserName:</b></label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label><b>Address:</b></label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="mb-3">
                <label><b>Contact no:</b></label>
                <input type="number" name="contact" class="form-control">
            </div>
            <input type="submit" name="insert" value="Add User" class="btn btn-primary">
        </form>
    </div>
</body>
</html>