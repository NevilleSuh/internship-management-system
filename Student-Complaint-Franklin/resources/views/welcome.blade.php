<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Complaint-Management-System</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{ asset('asset/fontawesome/css/all.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('asset/css/adminlte.min.css') }}">
   </head>
   <body class="hold-transition login-page">

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
      <div class="login-box">
         <!-- /.login-logo -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
         <div class="card card-outline card-warning">
            <div class="card-header text-center">
               <a href="index.html" class="brand-link">
               <img src="{{asset('asset/img/logo.png')}}" alt="DSMS Logo" width="200">
               </a>
            </div>
            <div class="card-body" >
                <form action="{{ route('login.perform') }}" method="POST">

                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="matricule" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                            <select class="form-control" name="type">
                                <option value="student">student</option>
                                <option value="admin">admin</option>
                            </select>
                            <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-users"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 offset-3">
                            <button type="submit" class="btn btn-block btn-warning">Login</button>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ route('register.show') }}" class="text-center">Don't have an account as a student sign-up</a>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
      </div>
      <!-- /.login-box -->
   </body>
</html>