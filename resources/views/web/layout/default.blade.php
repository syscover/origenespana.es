<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <title>Origen España</title>

        <meta name="description" content="Origen España, Denominacion de Origen">
        <meta name="keywords" content="Origen, España, Denominacion, Origen">

        <link rel="shortcut icon" href="{{ asset('/images/theme/favicon.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('/images/theme/favicon.png') }}" type="image/x-icon">

        <!--Styles-->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @yield('head')

        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>

    <body>
        <!--Start pagewrapper-->
        <div class="page-wrapper">

            <!-- Start Preloader -->
            <div class="preloader"></div>
            <!-- End Preloader -->

            @include('web.shared.header')

            <main>
                @yield('content')
            </main>

            @include('web.shared.footer')

        </div>
        <!--End pagewrapper-->

        <!--Start Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-double-up"></span>
        </div>
        <!--End Scroll to top-->

        <!--Scripts-->
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ mix('js/all.js') }}"></script>

        @yield('scripts')
    </body>
</html>