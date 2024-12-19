<!DO CTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        {{-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> --}}
        <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css" />
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        {{-- icon link --}}
        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-chubby/css/uicons-solid-chubby.css'>
        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-straight/css/uicons-solid-straight.css'>
        <link rel='stylesheet'
            href='https://cdn-uicons.flaticon.com/2.6.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
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
    @include('sweetalert::alert')
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
            <div class="container-fluid py-5">
                <h3 class="py-4">Your List</h3>
                <div class="d-flex flex-column  py-5 px-4 shadow-sm rounded-2">
                    <div class="mb-3">
                        <select id="priority-filter" class="btn btn-primary" aria-label=".form-select-lg example">
                            <option value="all" selected>View All</option>
                            <option value="notimportant">Not Important</option>
                            <option value="important">Important</option>
                            <option value="veryimportant">Very Important</option>
                        </select>
                    </div>
                    <table id="tabel-data" class="table table-hover " width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name List</th>
                                <th>Description</th>
                                <th>Date create</th>
                                <th>Maturity date</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $key => $item)
                                <tr>
                                    <td>
                                        <p class="opacity-5">{{ $key + 1 }}</p>
                                    </td>
                                    <td>
                                        <p class="opacity-5">{{ $item->name }}</p>
                                    </td>
                                    <td>
                                        <p class="opacity-5">{{ $item->description }}</p>
                                    </td>
                                    <td>
                                        <p class="opacity-5">{{ $item->date }}</p>
                                    </td>
                                    <td>
                                        <p class="opacity-5">{{ $item->duedate }}</p>
                                    </td>
                                    <td>
                                        @if ($item->priority == 'veryimportant')
                                            <p class="bg-danger fw-bold rounded-2 text-center text-white py-1">Very Important</p>
                                        @elseif ($item->priority == 'important')
                                            <p class="bg-warning fw-bold rounded-2 text-center py-1">Quite Important</p>
                                        @else
                                            <p class="bg-primary fw-bold rounded-2 text-center text-white py-1">Not Important</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->status == 'unfinished')
                                            <p class=" text-center text-danger fw-bold">unfinished</p>
                                        @else
                                            <p class=" text-center text-success fw-bold">finished</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/update/{{ $item->id }}" class="text-decoration-none text-dark">
                                            <i class="fi fi-sc-pencil opacity-5 fs-5 me-2"></i>
                                        </a>
                                        <a href="/delete/{{ $item->id }}" class="text-decoration-none text-dark">
                                            <i class="fi fi-rr-trash opacity-5 fs-5 me-2"></i>
                                        </a>
                                        @if ($item->status == 'unfinished')
                                            <a href="/list-done/{{ $item->id }}"
                                                class="text-decoration-none text-dark">
                                                <i class="fi fi-br-check opacity-5 fs-5"></i>
                                            </a>
                                        @else
                                            <a href="/list-done/{{ $item->id }}"
                                                class="text-decoration-none text-success">
                                                <i class="fi fi-br-check opacity-5 fs-5"></i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#tabel-data').DataTable();

            $('#priority-filter').on('change', function() {
                var selectedPriority = $(this).val();

                table.column(5).search('');

                if (selectedPriority === 'notimportant') {
                    table.column(5).search('Not ').draw();
                } else if (selectedPriority === 'important') {
                    table.column(5).search('Quite').draw();
                } else if (selectedPriority === 'veryimportant') {
                    table.column(5).search('Very').draw();
                } else {
                    table.search('').columns().search('').draw();
                }
            });
        });
    </script>

    </html>
