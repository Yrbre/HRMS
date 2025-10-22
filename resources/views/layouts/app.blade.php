<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>HRMS @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('hrms/assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('hrms/assets/img/apple-touch-icon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')">

    <!-- ======= Style ======= -->
    @include('layouts.style')
    @livewireStyles

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('layouts.navbar')

    <!-- ======= Sidebar ======= -->
    @include('layouts.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>@yield('menu')</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    @include('layouts.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Script ======= -->
    @include('layouts.script')
    @livewireScripts
    @stack('scripts')
</body>

</html>