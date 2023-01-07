<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords"
        content="Digital marketing agency, Digital marketing company, Digital marketing services, sass, software company">
    <meta name="description"
        content="Deski is a creative saas and software html template designed for saas and software Agency websites.">
    <meta property="og:site_name" content="deski">
    <meta property="og:url" content="https://heloshape.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Deski: creative saas and software html template">
    <meta name='og:image' content={{ asset('images/assets/ogg.png') }}>
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
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    {{-- <link rel="icon" type="image/png" sizes="56x56" href={{ asset('images/fav-icon/icon.png') }}> --}}
    <!-- Fonts -->
    {{-- <link rel="stylesheet" type="text/css" href="fonts/recoleta/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="fonts/gordita/stylesheet.css"> --}}

    @vite(['resources/assets/css/style.css', 'resources/assets/css/responsive.css', 'resources/assets/js/app.js', 'resources/assets/vendor/jquery.min.js', 'resources/assets/vendor/popper.js/popper.min.js', 'resources/assets/vendor/bootstrap/js/bootstrap.min.js', 'resources/assets/vendor/mega-menu/assets/js/custom.js', 'resources/assets/vendor/aos-next/dist/aos.js', 'resources/assets/vendor/jquery.appear.js', 'resources/assets/vendor/jquery.countTo.js', 'resources/assets/vendor/jquery.appear.js', 'resources/assets/vendor/slick/slick.min.js', 'resources/assets/vendor/fancybox/dist/jquery.fancybox.min.js', 'resources/assets/js/theme.js'])
</head>

<body data-spy="scroll" data-target="#one-page-nav" data-offset="120">
    <div class="main-page-wrapper font-gordita">
        <!-- Loading Transition -->
        <section>
            @include('layouts.loading')
        </section>

        <!-- Theme Main Menu   -->
        <div class="theme-main-menu sticky-menu theme-menu-five">
            @include('layouts.header')
        </div> <!-- /.theme-main-menu -->

        <!-- Main content   -->
        <main>
            {{ $slot }}
        </main>

        <!--Footer Style Seven-->
        <footer class="theme-footer-seven mt-120 md-mt-100">
            @include('layouts.footer')
            <!-- /.lg-container -->
        </footer> <!-- /.theme-footer-seven -->

        <!-- Scroll Top Button -->
        <button class="scroll-top">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </button>
    </div> <!-- /.main-page-wrapper -->

</body>

</html>
