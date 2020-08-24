<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
     <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
     <link rel="stylesheet" href="{{ asset('vendoe/les') }}">
     <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div  id="app">
        <div id="wrapper">

           <!----stert Navbar--->
            @include('layouts.sadbar')
           <!----stert emd--->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
              <!-- Topbar -->
               <!---stert navbar--->
               @include('layouts.navbar')
               <!---navbar end--->
              <!-- End of Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid">
                <!-- Content Row -->
                <div class="row">
                    @yield('content')

                </div>
                <router-view></router-view>

              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
              <div class="container my-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright © Your Website 2020</span>
                </div>
              </div>
            </footer>
            <!-- End of Footer -->

          </div>

     </div>
    </div>
</body>
</html>
