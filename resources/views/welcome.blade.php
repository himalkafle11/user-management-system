<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link rel="stylesheet" href="css/welcome.css">
</head>
<body>
    <div class="container">
            <h1 class="heading">User Management System</h1>
            <div class="pages">
                <a class="loginBtn" href="{{ url('login') }}" class="btn btn-xs btn-info pull-right">Log into the system</a>
                <a class="loginBtn" href="{{ url('userpage') }}" class="btn btn-xs btn-info pull-right">Enter the system</a>
                <a class="registerBtn" href="{{ url('register') }}" >Register the user</a>
            </div>
    </div>
</body>
</html>