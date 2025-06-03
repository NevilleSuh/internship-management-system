<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Complaint Management</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('asset/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <style>
        .navbar-custom {
            background-color: #f8f9fa;
            /* Light background color */
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            font-size: 25px;
            color: #343a40;
            /* Dark text color */
        }

        .navbar-custom .navbar-brand:hover,
        .navbar-custom .nav-link:hover {
            color: #007bff;
            /* Blue color on hover */
        }
    </style>
</head>

<body>

    @include('admin.includes.notification')

    @if(session('message'))
        <script>
            showNotification("{{ session('message') }}", "success");
        </script>
    @endif

    @if(session('error'))
        <script>
            showNotification("{{ session('error') }}", "error");
        </script>
    @endif

    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        {{-- <a class="navbar-brand" href="#">Brand Name</a> --}}
        <a href="index.html" class="brand-link">
            <img src="{{asset('asset/img/logo.png')}}" alt="DSMS Logo" width="120"
                style="margin-top:-20px;margin-bottom: -30px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('show.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('show.complain') }}">Complain</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('student.logout') }}">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <!-- Bootstrap JS and dependencies -->
    <!-- jQuery -->
    <script src="{{asset('asset/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/adminlte.js')}}"></script>
    <!-- jQuery -->
    <script src="{{asset('asset/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('asset/js/adminlte.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('asset/tables/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('asset/tables/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('asset/tables/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('asset/tables/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
</body>

</html>