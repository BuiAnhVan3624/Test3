<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <!-- Custom fonts for this template -->
    <link href="{{ asset('import/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('import/assets/css/style.css') }}">
    <link href="{{ asset('import/assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Sidebar -->
        @include('layout.admin.sidebar')
        <!-- Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Header -->
                @include('layout.admin.header')
                <!-- Header -->

                <!-- Main -->
                @yield('main')
                <!-- Main -->
            </div>

            <!-- Footer -->
            @include('layout.admin.footer')
            <!-- Footer -->

        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('import/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('import/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('import/assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('import/assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('import/assets/js/cuong.js') }}"></script>
    @stack('scripts')
</body>

</html>