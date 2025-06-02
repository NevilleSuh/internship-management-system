<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Internship-Management-System</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('asset/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">


</head>

<body class="hold-transition sidebar-mini layout-fixed">


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
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        <img src="{{asset('asset/img/avatar.png')}}" class="img-circle" alt="User Image" width="40"
                            style="margin-top: -8px;">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-light-primary">
            <!-- Brand Logo -->
            <a href="index.html" class="brand-link">
                <img src="{{asset('asset/img/logo.png')}}" alt="DSMS Logo" width="200"
                    style="margin-top:-30px;margin-bottom: -30px;">
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link">
                                <img src="{{asset('asset/img/dashboard.png')}}" width="30">
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">

                            <a href="#" class="nav-link">
                                <img src="../asset/img/report.png" width="30">
                                <p>
                                    Complaints
                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('ca.complain') }}" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>CA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('exam.complain') }}" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Exams</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('other.complain') }}" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Others</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- @if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->role === 'hod' ||
                        Auth::guard('admin')->user()->role === 'super') --}}
                        <li class="nav-item">
                            <a href="{{route('admin.institution')}}" class="nav-link">
                                <img src="{{asset('asset/img/department.png')}}" width="30">
                                <p>
                                    Institutions
                                </p>
                            </a>
                        </li>
                        {{-- @endif --}}

                        {{-- @if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->role === 'super') --}}
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="{{asset('asset/img/stakeholder.png')}}" width="30">
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                        {{-- @endif --}}

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="{{asset('asset/img/course.png')}}" width="30">
                                <p>
                                    Applications
                                </p>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a href="bad-words.html" class="nav-link">
                                <img src="../asset/img/bad-word.png" width="30">
                                <p>
                                    Bad Words
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="category.html" class="nav-link">
                                <img src="../asset/img/category.png" width="30">
                                <p>
                                    Concern Category
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.show.complain') }}" class="nav-link">
                                <img src="{{asset('asset/img/complaint.png')}}" width="30">
                                <p>
                                    Complaints
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="../asset/img/user.png" width="30">
                                <p>
                                    Users
                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="department-user.html" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Department</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="admin-user.html" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Admin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <img src="../asset/img/report.png" width="30">
                                <p>
                                    Complaint Reports
                                </p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="monthly-report.html" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Monthly</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="department-report.html" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Department</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="status-report.html" class="nav-link">
                                        <i class="nav-icon far fa-circle"></i>
                                        <p>Status</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">

            @yield('content')



        </div>
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