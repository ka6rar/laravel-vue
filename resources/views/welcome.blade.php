<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
         <link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
         <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
         <link rel="stylesheet" href="{{ asset('vendoe/les') }}">
         <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
        <body>
        <div  id="app">

                <div id="wrapper">
                <!-- Sidebar -->
               <sadbar></sadbar>
                <!-- End of Sidebar -->
                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                  <!-- Main Content -->
                  <div id="content">

                    <!-- Topbar -->
                    <navbar></navbar>
                    <!-- End of Topbar -->
                    {{-- <navbar/> --}}
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                      <!-- Page Heading -->
                      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                      </div>

                      <!-- Content Row -->
                      <div class="row">
                          <router-view></router-view>
                      </div>

                      <!-- Content Row -->
                    </div>
                    <!-- /.container-fluid -->
                  </div>
                  <!-- End of Main Content -->

                  <!-- Footer -->
                  <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                      <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                      </div>
                    </div>
                  </footer>
                  <!-- End of Footer -->
                </div>
                <!-- End of Content Wrapper -->
              </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
