<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body>
    <main class="container bg-info shadow-lg text-primary mx-auto mt-5">
        <div>
            <h1 class="text-center pt-5 pb-5">Update Data</h1>
            <form method="POST" action="/update/{{ $users->id }}">
                @csrf
                <div class="mb-4">
                    <label><b>UserName:</b></label>
                    <input type="text" name="name" class="form-control" required="true" value={{$users->user_name }}>
                </div>
                <div class="mb-4">
                    <label><b>Address:</b></label>
                    <input type="text" name="address" required="true" class="form-control"
                    value={{$users->user_address }}
                    >
                </div>
                <div class="mb-4">
                    <label><b>Email:</b></label>
                    <input type="email" name="email" required="true" class="form-control"
                    value={{$users->user_email }}
                    >
                </div>
                <div class="mb-4">
                    <label><b>Contact no:</b></label>
                    <input type="number" name="contact" required="true" class="form-control"
                    value={{$users->user_contact }}
                    >
                </div>
                <input type="submit" name="Update" value="Update" class="btn btn-success mt-3 " onclick= 'return confirm("Do you want to update?")'>
                <div >
                    <a href="{{ url('showUsers') }}" class="btn btn-xs btn-warning pull-right mt-3 mb-3">Return Back</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>