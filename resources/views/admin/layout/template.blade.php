<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Dashboard - DAdmin</title>
    
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/admin/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/admin/assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="/admin/assets/css/morris.min.css">
    <link rel="stylesheet" href="/admin/assets/css/select2.min.css">
    <link rel="stylesheet" href="/admin/assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="/admin/assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="/admin/assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="/admin/assets/css/dropzone.min.css">
    <link rel="stylesheet" href="/admin/assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="/admin/assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="/admin/assets/css/datatables.min.css">
    <link rel="stylesheet" href="/admin/assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="/admin/assets/css/style.css">

    <!-- Page Level Stylesheets -->

</head>
<body>

    <!-- Wrapper Start -->
    <div class="wrapper">
        
        @include('admin.layout.navbar')

        @include('admin.layout.sidebar')

        <!-- Main Container Start -->
        <main class="main--container">
            <!-- Page Header Start -->
            <section class="page--header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Page Title Start -->
                            <h2 class="page--title h5">{{ $title }}</h2>
                            <!-- Page Title End -->

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active"><span>{{ $title }}</span></li>
                            </ul>
                        </div>

                        
                    </div>
                </div>
            </section>
            <!-- Page Header End -->

            <!-- Main Content Start -->
            @yield('content')
            <!-- Main Content End -->

            <!-- Main Footer Start -->
            <footer class="main--footer main--footer-light">
                <p>Copyright &copy; <a href="#">Data Centrix Nusantara</a>. All Rights Reserved.</p>
            </footer>
            <!-- Main Footer End -->
        </main>
        <!-- Main Container End -->
    </div>
    <!-- Wrapper End -->

    <!-- Scripts -->
    <script src="/admin/assets/js/jquery.min.js"></script>
    <script src="/admin/assets/js/jquery-ui.min.js"></script>
    <script src="/admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/assets/js/perfect-scrollbar.min.js"></script>
    <script src="/admin/assets/js/jquery.sparkline.min.js"></script>
    <script src="/admin/assets/js/raphael.min.js"></script>
    <script src="/admin/assets/js/morris.min.js"></script>
    <script src="/admin/assets/js/select2.min.js"></script>
    <script src="/admin/assets/js/jquery-jvectormap.min.js"></script>
    <script src="/admin/assets/js/jquery-jvectormap-world-mill.min.js"></script>
    <script src="/admin/assets/js/horizontal-timeline.min.js"></script>
    <script src="/admin/assets/js/jquery.validate.min.js"></script>
    <script src="/admin/assets/js/jquery.steps.min.js"></script>
    <script src="/admin/assets/js/dropzone.min.js"></script>
    <script src="/admin/assets/js/ion.rangeSlider.min.js"></script>
    <script src="/admin/assets/js/datatables.min.js"></script>
    <script src="/admin/assets/js/main.js"></script>

    <!-- Page Level Scripts -->

</body>
</html>
