<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BantenCode')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/dataTables.bootstrap4.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    @stack('head')
    
</head>
<body class="sb-nav-fixed bg-custom">



<!-- Navbar -->
@include('partials.navbar')
<!-- /.navbar -->

<div id="layoutSidenav">
    
     <!-- Sidebar Menu -->
     @include('partials.sidebar')
     <!-- /.sidebar-menu -->


    <div id="layoutSidenav_content">
        <main>
            @yield('content')
            
        </main>
        
        <!-- footer -->
        @include('partials.footer')
        <!-- footer -->
    </div>
</div>


<script src=" {{ asset('js/jquery-3.4.1.slim.min.js') }} "></script>
<script src=" {{ asset('js/jquery.dataTables.js') }} "></script>
<script src=" {{ asset('js/bootstrap.min.js') }} "></script>
<script src=" {{ asset('js/dataTables.bootstrap4.js') }} "></script>
<script src=" {{ asset('js/scripts.js') }} "></script>

<!-- Datatable plugin -->
@stack('scripts')


</body>
</html>

