<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Codescandy">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M8S4MT3EYG');
    </script>


    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="admin/images/favicon/favicon.ico">


    <!-- Libs CSS -->
    <link href="{{ asset('admin/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">



    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/theme.min.css') }}">
    <title>Analytics | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">
        @include('admin.layouts.header')
        <!-- navbar vertical -->

        <!-- Sidebar -->
@include('admin.layouts.navbar')



       @yield('content')

    </main>




    <!-- Libs JS -->
    <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/dist/simplebar.min.js') }}"></script>




    <!-- Theme JS -->
    <script src="{{ asset('admin/js/theme.min.js') }}"></script>
    <!-- jsvectormap -->
    <script src="{{ asset('admin/libs/jsvectormap/dist/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('admin/libs/jsvectormap/dist/maps/world.js') }}"></script>
    <script src="{{ asset('admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/js/vendors/chart.js') }}"></script>





</body>

</html>
