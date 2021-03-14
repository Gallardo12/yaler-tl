<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }} - @yield('page-name')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  Essential META Tags -->
    <meta property="og:title"
        content="{{ config('app.name', 'Laravel') }} - @yield('page-name')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image-url')">
    <meta property="og:url" content="@yield('page-url')">
    <meta name="twitter:card" content="@yield('summary')">
    <!--  Non-Essential, But Recommended -->
    <meta property="og:site_name"
        content="{{ config('app.name', 'Laravel') }} - @yield('page-name')">
    <meta name="twitter:image:alt" content="@yield('page-name') - Background">

    <link rel="shortcut icon" type="image/x-icon" href="public/favicon.ico" />

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

</head>

<body>

    <header>
        <div class="navbar-fixed">
            <nav class="white" role="navigation">
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo"><img src="public/img/yaler-logo.png" width="150" height="auto"
                            style="padding: 10px 0!important" alt="YALER Logo"></a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger red-text darken-3"><i
                            class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a class="@yield('page-active')" href="/">Inicio</a></li>
                        <li><a class="@yield('page-active1')" href="/telecomunicaciones">Telecomunicaciones</a></li>
                        <li><a class="@yield('page-active2')" href="/mobiliario-para-oficina">Mobiliario</a></li>
                        <li><a class="@yield('page-active3')" href="/contacto">Contacto</a></li>
                    </ul>
                </div>
            </nav>

            <ul class="sidenav" id="mobile-demo">
                <div class="col s10 center-align valign-wrapper">
                    <a href="/">
                        <img src="public/img/yaler-logo.png" class="responsive-img" alt="YALER TL Logo">
                    </a>
                </div>
                <div class="divider"></div>
                <li><a class="@yield('page-active')" href="/">Inicio</a></li>
                <li><a class="@yield('page-active1')" href="/telecomunicaciones">Telecomunicaciones</a></li>
                <li><a class="@yield('page-active2')" href="/mobiliario-para-oficina">Mobliliario para Oficina</a></li>
                <li><a class="@yield('page-active3')" href="/contacto">Contacto</a></li>
            </ul>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="page-footer white">
        <!--div class="container">
            <div class="row valign-wrapper center-align">
                <div class="col s12">
                    <h5 class="white-text">YALER TL-Comunicaciones</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like
                        it's our full time job. Any amount would help support and continue development on this project
                        and is greatly appreciated.</p>
                    <img src="public/img/yaler-logo.png" class="responsive-img" alt="YALER TL Logo">
                </div-->
        <!--div class="col l3 s12">
                    <h5 class="red-text">Settings</h5>
                    <ul>
                        <li><a class="red-text" href="#!">Link 1</a></li>
                        <li><a class="red-text" href="#!">Link 2</a></li>
                        <li><a class="red-text" href="#!">Link 3</a></li>
                        <li><a class="red-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="red-text">Connect</h5>
                    <ul>
                        <li><a class="red-text" href="#!">Link 1</a></li>
                        <li><a class="red-text" href="#!">Link 2</a></li>
                        <li><a class="red-text" href="#!">Link 3</a></li>
                        <li><a class="red-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div-->
        <div class="footer-copyright red darken-3">
            <div class="container">
                Derechos reservados <a class="white-text" href="">YALER TL-Comunicaciones</a> 2021
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <!-- Compiled and minified JavaScript -->
    <script src="https://kit.fontawesome.com/dac6e561e6.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        M.AutoInit();

    </script>

</body>

</html>
