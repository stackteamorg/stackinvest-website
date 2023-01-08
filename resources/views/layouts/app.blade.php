<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords"
        content="Digital marketing agency, Digital marketing company, Digital marketing services, sass, software company">
    <meta name="description"
        content="Deski is a creative saas and software html template designed for saas and software Agency websites.">
    <meta property="og:site_name" content="deski">
    <meta property="og:url" content="https://heloshape.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Deski: creative saas and software html template">
    <meta name='og:image' content='images/assets/ogg.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#2a2a2a">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#2a2a2a">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#2a2a2a">
    <title>Deski-Saas & Software HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/recoleta/stylesheet.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/gordita/stylesheet.css') }}">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <script src="vendor/html5shiv.js"></script>
   <script src="vendor/respond.js"></script>
  <![endif]-->
</head>

<body data-spy="scroll" data-target="#one-page-nav" data-offset="120">
    <div class="main-page-wrapper p0 font-gordita">
        <!-- ===================================================
    Loading Transition
   ==================================================== -->
        @include('layouts.loading');

        <!-- ===================================================
    Header
   ==================================================== -->
        @include('layouts.header');

        <main>
            {{ $slot }}
        </main>

        <!--
   =====================================================
    Footer Style Eight
   =====================================================
   -->
        @include('layouts.footer')


        <!-- Scroll Top Button -->
        <button class="scroll-top">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </button>

        <!-- Optional JavaScript _____________________________  -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- jQuery -->
        <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('assets/vendor/popper.js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- menu  -->
        <script src="{{ asset('assets/vendor/mega-menu/assets/js/custom.js') }}"></script>
        <!-- AOS js -->
        <script src="{{ asset('assets/vendor/aos-next/dist/aos.js') }}"></script>
        <!-- js count to -->
        <script src="{{ asset('assets/vendor/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.countTo.js') }}"></script>
        <!-- Slick Slider -->
        <script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
        <!-- Fancybox -->
        <script src="{{ asset('assets/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

        <!-- Theme js -->
        <script src="{{ asset('assets/js/theme.js') }}"></script>
    </div> <!-- /.main-page-wrapper -->
</body>

</html>