<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create list</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<style>
    body {
        overflow-x: hidden;
        /* Prevent horizontal scroll */
    }

    .sidebar {
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        background-color: #f8f9fa;
        padding-top: 20px;
    }

    .nav-item a {
        background: #212529;
    }

    .nav-item a:hover {
        background: rgb(70, 121, 183);
    }

    .opacity-5 {
        opacity: 0.6;
    }
</style>

<body>
    <div class="sidebar bg-dark">
        <h2 class="text-center text-white py-3 px-5">Todo Lists</h2>
        <ul class="navbar-nav flex-column ">
            <li class="nav-item">
                <i class="fi fi-ss-home"></i>
                <a class="nav-link ps-4 text-white active" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ps-4 text-white active" href="/create">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ps-4 text-white" href="/logout">Logout</a>
            </li>
        </ul>
    </div>
    <div class=" px-2 " style=" margin-left: 250px;">
        <div class="container py-3 d-flex align-items-center justify-content-center" style="height: 100vh">
            <div class="shadow-sm px-4 py-3 rounded w-75">
                <h1 class="text-center fw-bold py-3">Create list</h1>
                <form action="/create" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="name" class="form-label">Name list :</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Description :</label>
                            <input type="text" name="description" class="form-control" id="description">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="date" class="form-label">Date :</label>
                            <input type="date" name="date" class="form-control" id="date">
                            <script>
                                const today = new Date().toISOString().split('T')[0];
                                document.getElementById('date').value = today;
                            </script>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="duedate" class="form-label">Maturity date :</label>
                            <input type="date" name="duedate" class="form-control" id="duedate">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="" class="form-label">Priority :</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="notimportant" name="priority"
                                    id="priority1" checked>
                                <label class="form-check-label" for="priority1">
                                    Not Important
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="important" name="priority"
                                    id="priority2" >
                                <label class="form-check-label" for="priority2">
                                    Important
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="veryimportant" name="priority"
                                    id="priority3" >
                                <label class="form-check-label" for="priority3">
                                    Very Important
                                </label>
                            </div>
                        </div>
                        <div class="col-12 text-center my-3">
                            <input type="submit" value="Create" class="btn btn-primary w-50">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</html>
