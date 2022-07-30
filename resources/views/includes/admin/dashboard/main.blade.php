<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Blank Page &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href={{ url('backend/stisla/dist/assets/modules/bootstrap/css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ url('backend/stisla/dist/assets/modules/fontawesome/css/all.min.css') }}>

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href={{ url('backend/stisla/dist/assets/css/style.css') }}>
    <link rel="stylesheet" href={{ url('backend/stisla/dist/assets/css/components.css') }}>
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href={{ url('/css/trix.css') }}>
    <script type="text/javascript" src={{ url('/js/trix.js') }}></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }

    </style>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            @include('includes.admin.dashboard.navbar')
            @include('includes.admin.dashboard.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('container')
                </section>
            </div>
            @include('includes.admin.dashboard.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src={{ url('backend/stisla/dist/assets/modules/jquery.min.js') }}></script>
    <script src={{ url('backend/stisla/dist/assets/modules/popper.js') }}></script>
    <script src={{ url('backend/stisla/dist/assets/modules/tooltip.js') }}></script>
    <script src={{ url('backend/stisla/dist/assets/modules/bootstrap/js/bootstrap.min.js') }}></script>
    <script src={{ url('backend/stisla/dist/assets/modules/nicescroll/jquery.nicescroll.min.js') }}></script>
    <script src={{ url('backend/stisla/dist/assets/modules/moment.min.js') }}></script>
    <script src={{ url('backend/stisla/dist/assets/js/stisla.js') }}></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src={{ url('backend/stisla/dist/assets/js/scripts.js') }}></script>
    <script src={{ url('backend/stisla/dist/assets/js/custom.js') }}></script>
</body>

</html>
