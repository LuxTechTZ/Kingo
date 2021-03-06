<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Kingo Coming Soon</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/kingo-favi.png" rel="icon">
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css?v.3" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center" style="height: 100vh">

    <div class="container d-flex flex-column align-items-center">

        <h1>Kingo Website</h1>
        <br><br>
        <!-- <div class="text-center">
          <h2>We are building a comprehensive database for collecting <br> and managing farmers' data from all over Tanzania.</h2>
        </div> -->
        <br>
        <div class="countdown d-flex justify-content-center" data-count="2021/5/06">
            <div>
                <h3>%d</h3>
                <h4>Days</h4>
            </div>
            <div>
                <h3>%h</h3>
                <h4>Hours</h4>
            </div>
            <div>
                <h3>%m</h3>
                <h4>Minutes</h4>
            </div>
            <div>
                <h3>%s</h3>
                <h4>Seconds</h4>
            </div>
        </div>

    </div>
</header><!-- End #header -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Kingo</span></strong>. All Rights Reserved.
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
            @endauth
        </div>
    </div>
</footer><!-- End #footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
