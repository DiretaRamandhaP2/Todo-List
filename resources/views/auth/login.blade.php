<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container" >
        <form action="/auth" method="post" class=" w-100 d-flex justify-content-center align-items-center" style="height: 100vh;">
            @csrf
            <div class="row shadow py-5 px-5 rounded w-50">
                <div class="col-12 py-4">
                    <h3 class="fw-bold text-center">LOGIN</h3>
                </div>
                <div class="col-12 py-2">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" id="" required>
                </div>
                <div class="col-12 py-2">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="" required>
                </div>
                <div class="col-12 pt-3 text-center">
                    <input type="submit" value="Login" class="btn btn-primary fw-bold w-50 rounded ">
                </div>
                <div class="col-12 text-center">
                    <a href="/register"><p>create an account?</p></a>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</html>
