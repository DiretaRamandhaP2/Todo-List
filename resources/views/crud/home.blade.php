<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-chubby/css/uicons-solid-chubby.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
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
                <a class="nav-link ps-4 text-white active" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ps-4 text-white" href="#">Logout</a>
            </li>
        </ul>
    </div>
    <div class=" py-4 px-2 " style=" margin-left: 250px;">
        <div class="container py-3 px-5">
            {{-- <div class="d-flex justify-content-center">
                <input type="search" name="search" class="form-control w-75 rounded-end rounded-3" id="">

            </div> --}}
            <div class="position-relative">


            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Create Your List</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form action="/create" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="name" class="col-form-label">Name List :</label>
                                    <input type="text" class="form-control" name="name" id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="col-form-label">Date :</label>
                                    <input type="date" class="form-control" name="date" id="date">
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="col-form-label">Priority :</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="priority" id="important"
                                            checked>
                                        <label class="form-check-label" for="important">
                                            Important
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="priority" id="Vimportant">
                                        <label class="form-check-label" for="Vimportant">
                                            Very Important
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Description :</label>
                                    <textarea class="form-control" name="description" id="message-text"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center py-5">
                <div class="d-flex ms-auto">
                    <select class="btn btn-primary " aria-label=".form-select-lg example">
                        <option selected>ALL</option>
                        <option value="1">Not Important</option>
                        <option value="2">Important</option>
                        <option value="3">Very Important</option>
                    </select>
                    <button type="button"
                        class="btn btn-primary rounded ms-3"
                        data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever=""><i
                            class="fi fi-br-plus"></i></button>
                </div>
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Name List</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Priority</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td>
                                <p class="opacity-5">1</p>
                            </td>
                            <td>
                                <p class="opacity-5">hasgdsgh</p>
                            </td>
                            <td>
                                <p class="opacity-5">dsfsdfssssdfsdfsdfsdfsdfsdfsdf</p>
                            </td>
                            <td>
                                <p class="opacity-5">18-12-2924</p>
                            </td>
                            <td>
                                <p class="bg-warning fw-bold text-center " style="">Important</p>
                            </td>
                            <td>
                                <p class="opacity-5 text-center">unfinished</p>
                            </td>
                            <td>
                                <i class="fi fi-sc-pencil opacity-5"></i>
                                <i class="fi fi-rr-trash opacity-5"></i>
                            </td>
                        </tr>
                    @endfor
                </table>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script>
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('date').value = today;
</script>

</html>
