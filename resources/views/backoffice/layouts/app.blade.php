<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />

    <title>@yield('title', 'I-tech Telemedia')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('landing/images/favicon.png')}}" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link href="{{asset('backoffice/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('backoffice/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('backoffice/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="{{asset('backoffice/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backoffice/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('backoffice/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.x/css/materialdesignicons.min.css" rel="stylesheet">

    @stack('styles')

</head>


    <body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="" class="logo logo-light">
                                {{-- <span class="logo-sm">
                                    <img src="{{asset('backoffice/assets/images/logo-dark.png')}}" alt="" height="22">
                                </span> --}}
                                <span class="logo-lg">
                                    <img src="{{asset('landing/images/logo.png')}}" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('backoffice/assets/images/users/avatar-4.jpg')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{ Auth::user()->name }}</span>
                                <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="background:none; border:none; width:100%; text-align:left;">
                                        <i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i>
                                        <span class="align-middle">Log out</span>
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('landing/images/logo.png')}}" alt="" width="80%">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('landing/images/logo.png')}}" alt="" width="80%">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('landing/images/logo.png')}}" alt="" width="80%">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('landing/images/logo.png')}}" alt="" width="80%">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('dashboard')}}">
                                    <i class="uil-home-alt"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('setting')}}">
                                    <i class="uil-home-alt"></i>
                                    <span>Setting</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('artikel')}}">
                                    <i class="uil-home-alt"></i>
                                    <span>Berita</span>
                                </a>
                            </li>

                            {{-- <li>
                                <a href="{{ route('setting')}}">
                                    <i class="uil-home-alt"></i>
                                    <span>Carousel</span>
                                </a>
                            </li> --}}

                            <li>
                                <a href="{{ route('testimoni')}}">
                                    <i class="uil-home-alt"></i>
                                    <span>Testimoni</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        @yield('content')

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>© Copyrights 2025. All rights reserved.</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    <p class="developer_text">Design & developed by RF</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap JS (kalau belum ada) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        @stack('scripts')
        <!-- Required datatable js -->
        <script src="{{asset('backoffice/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('backoffice/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

        <!-- Responsive examples -->
        <script src="{{asset('backoffice/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('backoffice/assets/js/pages/datatables.init.js')}}"></script>

        <!-- JAVASCRIPT -->
        <script src="{{asset('backoffice/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>

        <script src="{{asset('backoffice/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('backoffice/assets/js/pages/dashboard.init.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('backoffice/assets/js/app.js')}}"></script>

    </body>
</html>
