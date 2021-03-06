@extends('layouts.app')

@section('page-active')
active
@endsection

@section('page-name')
Inicio
@endsection

@section('description')
Yaler TL-Comunicaciones SA DE CV, es una empresa con un alto nivel profesional en el desarrollo de redes para desempeños
Tecnológicos, Eléctricos y Sistemas de protección de energía
@endsection

@section('image-url')
public\img\yaler-logo.jpg
@endsection

@section('page-url')
http://yalertl.com/
@endsection

@section('summary')
Nuestro objetivo como empresa es llegar a ser líder en el mercado, brindando a nuestros clientes la facilidad de
encontrar distintas soluciones tanto en tema de mobiliario como de infraestructura tecnológica y de comunicaciones.
@endsection

@section('content')
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <br><br>
        <!--h1 class="header center teal-text text-lighten-2">Parallax Template</h1-->
        <div class="container valign-wrapper" style="height: auto">
            <div class="row">
                <div class="col s12">
                    <div class="center-align">
                        <img loading="lazy" class="responsive-img highlighted1" src="public/img/yaler-logo.png">
                        <br>
                    </div>
                    <div class="row center-align">
                        <h5 class="header col light s12">Yaler TL-Comunicaciones SA DE CV, es una empresa con un alto
                            nivel
                            profesional en el desarrollo de redes para desempeños Tecnológicos, Eléctricos y Sistemas
                            de protección de energía.</h5>
                    </div>
                    <div class="row center-align">
                        <a href="/contacto" id="download-button"
                            class="btn-large waves-effect waves-light red darken-3">CONTÁCTANOS</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <div class="parallax"><img loading="lazy" src="public/img/background1.jpg" alt="Unsplashed background img 1"></div>
</div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="icon-block">
                        <h2 class="center red-text text-darken-3"><i class="fas fa-satellite-dish"></i></h2>
                        <a href="/telecomunicaciones" class="red-text text-darken-3">
                            <h5 class="center">Telecomunicaciones</h5>
                        </a>
                        <p style="text-align: justify;">Nuestro objetivo como empresa es llegar a ser líder en el
                            mercado,
                            brindando a nuestros clientes la facilidad de encontrar distintas soluciones tanto en tema
                            de
                            mobiliario como de infraestructura tecnológica y de comunicaciones.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card medium">
                    <div class="icon-block">
                        <h2 class="center red-text text-darken-3"><i class="fas fa-wifi"></i></h2>
                        <a href="/telecomunicaciones" class="red-text text-darken-3">
                            <h5 class="center">Ingeniería y Asesoria en Redes</h5>
                        </a>
                        <p style="text-align: justify;">Contamos con ingenieros certificados en las marcas de renombre
                            como
                            Cisco, Fortigate, Samsung, TotalGround, Panduit, Leviton y con la infraestructura adecuada
                            para
                            la ejecución de los proyectos industriales y carreteros.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card medium">
                    <div class="icon-block">
                        <h2 class="center red-text text-darken-3"><i class="fas fa-chair"></i></h2>
                        <a href="/mobiliario-para-oficina" class="red-text text-darken-3">
                            <h5 class="center">Muebles para Oficina</h5>
                        </a>
                        <p style="text-align: justify;">Fabricantes de muebles para oficina y distribuidores
                            certificados en
                            Telefonía Samsung, Fortinet, TotalGround entre otros.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="container">
        <div class="row center">
            <h5 class="header col s12 light white-text">A lo largo del camino que hemos recorrido, gracias a
                su confianza, hemos
                realizado distintos trabajos de mobiliarios, telecomunicaciones y tecnología, siempre de la mano de
                nuestros ingenieros certificados, quienes se encuentran en constante capacitación para garantizar un
                trabajo de calidad. </h5>
        </div>
    </div>
    <div class="parallax"><img loading="lazy" src="public/img/background2.jpg" class="" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
    <div class="card-panel">
        <div class="row">
            <div class="col s12">
                <h3><i class="mdi-content-send red-text darken-3"></i></h3>
                <h4 class="center-align red-text text-darken-3">Distribuidores Certificados </h4>
                <div class="carousel">
                    <a class="carousel-item" target="_blank" href="https://www.fortinet.com/"><img loading="lazy"
                            src="public/img/distribuidores/distribuidores1.png"></a>
                    <a class="carousel-item" target="_blank" href="https://www.cisco.com/c/en/us/services/acquisitions/tandberg.html"><img loading="lazy"
                            src="public/img/distribuidores/distribuidores2.png"></a>
                    <a class="carousel-item" target="_blank" href="https://www.samsung.com/mx/"><img loading="lazy"
                            src="public/img/distribuidores/distribuidores3.png"></a>
                    <a class="carousel-item" target="_blank" href="https://www.cisco.com/"><img loading="lazy"
                            src="public/img/distribuidores/distribuidores4.png"></a>
                    <a class="carousel-item" target="_blank" href="https://www.totalground.com/"><img loading="lazy"
                            src="public/img/distribuidores/distribuidores5.png"></a>
                    <a class="carousel-item" target="_blank" href="https://www.panduit.com/"><img loading="lazy"
                            src="public/img/distribuidores/distribuidores6.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container valign-wrapper" style="height: auto">
            <div class="row">
                <div class="col s12">
                    <div class="center-align">
                        <img loading="lazy" class="responsive-img highlighted1" src="public/img/yaler-logo.png">
                    </div>
                    <!--div class="center-align">
                        <h5 class="header col light s12">Yaler TL-Comunicaciones SA DE CV, es una empresa con un alto
                            nivel
                            profesional en el desarrollo de redes para desempeños Tecnológicos, Eléctricos y Sistemas
                            de protección de energía.</h5>
                        <a href="/contacto" id="download-button"
                            class="btn-large waves-effect waves-light red darken-3">CONTÁCTANOS</a>
                    </div-->
                </div>
            </div>
        </div>
    </div>
    <div class="parallax"><img loading="lazy" src="public/img/background3.jpg" class="responsive-img" alt="Unsplashed background img 3"></div>
</div>
@endsection
