<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    @include('sweetalert::alert')
    <div class="container py-3 d-flex align-items-center justify-content-center" style="height: 100vh">
        <div class="shadow-sm px-4 py-3 rounded w-75">
            <h1 class="text-center fw-bold py-3">Register</h1>
            <form action="/register" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="name" class="form-label">Name :</label>
                        <input type="text" name="name" class="form-control" id="" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="name" class="form-label">Email :</label>
                        <input type="email" name="email" class="form-control" id="" required>
                    </div>
                    <div class="col-12 mb-4">
                        <label for="name" class="form-label">Password :</label>
                        <input type="password" name="password" class="form-control" id="" required>
                    </div>
                    <div class="col-12 text-center my-3">
                        <input type="submit" value="Create" class="btn btn-primary w-50">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</html>
