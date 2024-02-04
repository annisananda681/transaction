<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Dashboard - Transaksi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.css" />

        <style>
            .sidebar {
                width: 250px;
                position: fixed;
                height: 100vh; /* Set the sidebar to full height */
                overflow-y: auto; /* Add scrolling for the sidebar if needed */
            }

            .content {
                flex: 1;
                margin-left: 250px; /* Set the width of the sidebar */
                padding: 20px;
            }

            .nav-item a {
                letter-spacing: 1.5px;
            }

            .nav-item a:hover {
                background-color: #0984e3;
            }
        </style>
    </head>
    <body class="bg-light">
        <div class="d-flex">
            <div class="sidebar bg-primary">
                <ul class="nav flex-column mb-auto mt-3">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light text-center p-3 disabled">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light text-center p-3">Transaction</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light text-center p-3">User</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light text-center p-3">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="content mt-2">
                @yield('container')
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.js"></script>

        <script>
            let table = new DataTable('#dataTable');
        </script>

    </body>
</html>
