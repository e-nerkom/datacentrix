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
        <!-- Register Page Start -->
        <div class="m-account-w" data-bg-img="/admin/assets/img/account/wrapper-bg.jpg">
            <div class="m-account">
                <div class="row no-gutters flex-row-reverse">
                    <div class="col-md-6">
                        <!-- Register Content Start -->
                        <div class="m-account--content-w" data-bg-img="/admin/assets/img/account/content-bg.jpg">
                            <div class="m-account--content">
                                <h2 class="h2">Have an account?</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="login.html" class="btn btn-rounded">Login Now</a>
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>

                    <div class="col-md-6">
                        <!-- Register Form Start -->
                        <div class="m-account--form-w">
                            <div class="m-account--form">
                                <!-- Logo Start -->
                                <div class="logo">
                                    <img src="/admin/assets/img/logo.png" alt="">
                                </div>
                                <!-- Logo End -->

                                <form action="/admin/register" method="post">
                                    @csrf
                                    <label class="m-account--title">Buat Akun Baru</label>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-user"></i>
                                            </div>

                                            <input type="text" name="name" placeholder="Nama anda" class="form-control" autocomplete="off" value="{{ old('name') }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-envelope"></i>
                                            </div>

                                            <input type="email" name="email" placeholder="Email anda" class="form-control" autocomplete="off" value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>

                                            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key"></i>
                                            </div>

                                            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="m-account--actions">
                                        <button type="submit" class="btn btn-block btn-rounded btn-info">Register</button>
                                    </div>

                                    <div class="m-account--footer">
                                        <p>&copy; 2021 Datacentrix</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Register Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Page End -->
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
