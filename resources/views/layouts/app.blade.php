<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Font Awesome -->
    <link rel='stylesheet' href="{{ asset('css/fontawesome-free/css/all.css') }}">
    <link rel='stylesheet' href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel='stylesheet' href="{{ asset('css/adminlte.css') }}">
    <!-- overlayScrollbars -->
    <link rel='stylesheet' href="{{ asset('css/OverlayScrollbars.min.css') }}">
    @yield('style')
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    {{-- <x-jet-banner /> --}}

    <div class="min-h-screen bg-gray-100">
        {{-- @livewire('navigation-menu') --}}

        <!-- Page Heading -->
        {{-- <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header> --}}

        <!-- Page Content -->
      
        <main>
           
            <div class="wrapper" id="dashboard">
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Brand Logo -->
                    <a href="" class="brand-link">
                        {{-- <img src="dist/img/AdminLTELogo.png"
                            class="brand-image img-circle elevation-3" style="opacity: .8" /> --}}
                        <span class="brand-text font-weight-light">Admin Panel</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user panel (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2"  /> --}}
                            </div>
                            <div class="info">
                                <a href="#" class="d-block">Abanoub Talaat</a>
                            </div>
                        </div>

                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link ">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Control
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="/dashboard/about" class="nav-link ">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>About</p>
                                            </a>
                                        </li>
                                        {{-- _++++++++++++++++++++++++++++++++++++++++++ --}}
                                        <li class="nav nav-item">
                                            <a href="/dashboard/resume" class="nav-link ">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>resume</p>
                                            </a>
                                        </li>
                                        <li class="nav nav-item">
                                            <a href="/dashboard/works" class="nav-link ">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>works</p>
                                            </a>
                                        </li>
                                        <li class="nav nav-item">
                                            <a href="/dashboard/contact" class="nav-link ">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>contact messages</p>
                                            </a>
                                        </li>
                                        <li class="nav nav-item">
                                            <a href="/dashboard/image" class="nav-link ">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>image</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
                </aside>
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    @yield('action')
                    <div class="content-header">
                        <div class="container-fluid">
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content-header -->
                    <!-- Main content -->
                    @section('content')
                    <section class="content">
                        <div class="container-fluid">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>150</h3>

                                            <p>New Orders</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                                            <p>Bounce Rate</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3>44</h3>

                                            <p>User Registrations</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>65</h3>

                                            <p>Unique Visitors</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <a href="#" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                            <!-- Main row -->

                            <!-- /.row (main row) -->
                        </div><!-- /.container-fluid -->
                    </section>
                    @endsection

                  @yield('content')
                    <!-- /.content -->
                </div>
            </div>
            <!-- ./wrapper -->
          
            @yield('javascript')
            <!-- jQuery UI 1.11.4 -->
            <script src="{{ asset('js/jquery/jquery-ui.min.js') }}"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('js/adminlte.min.js') }}"></script>

        </main>
    </div>

</body>

</html>
