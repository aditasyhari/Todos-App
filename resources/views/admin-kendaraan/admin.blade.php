<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('layout/about.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- sidebar -->
        @include('admin-kendaraan/sidebar')
        <!-- end sidebar -->

        <!-- Content -->
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm"></div>
                        <div class="col-sm">
                            <h1 class="m-0 text-dark text-center">@yield('heading')</h1>
                        </div>
                        <div class="col-sm">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('breadcrumb')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm"></div>
                        <div class="col-sm-8 mb-3">@yield('content')</div>
                        <div class="col-sm"></div>
                    </div>
                </div>
            </div>
            <!-- End Main content -->
        </div>
        <!-- End Content -->


        <!-- Footer -->
        @include('admin-kendaraan/footer')
        <!-- end footer -->
    </div>



    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
