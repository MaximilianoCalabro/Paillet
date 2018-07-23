<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PAILLET</title>

  
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}">
    <!-- FancyBox -->
    <link rel="stylesheet" href="{{asset('plugins/fancybox/jquery.fancybox.min.css')}}">
      
    <!-- Stylesheets -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
      
    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    
    <!-- Slider -->
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
    <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                <figure>
                    <a href="index.html">
                        <img src="img/logo.png" alt="" width="130">
                    </a>
                </figure>
            </div>
      </div>
</section>
<!--Header Upper-->



<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    @foreach($inicio as $sli)
        @if ($loop->first)
        <div class="slider-item" style="background-image:url('{{url('/')}}/img/{{$sli->imagen}}')">
            @else
                <div class="slider-item" style="background-image: url('{{url('/')}}/img/{{$sli->imagen}}');">
        @endif
            <div class="container">
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>  
            </div>
        </div>
        @endforeach

</div>

<!--====  End of Page Slider  ====-->

<!-- Clinica/SV Section -->
<section class="team-section section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content">
                    <div class="team-members tab-pane fade in active row" id="doctor">
                        <div class="col-md-6 col-sm-6">
                            <div class="team-person text-center">
                                @foreach ($cv as $cvpri)
                                <h6>Dr. Juan Carlos Paillet</h6>
                                <a href="#openModal">
                                  <img src="{{url('/')}}/img/{{$cvpri->imagen}}" alt="team" class="foto2 img-responsive">
                                </a> 
                                @endforeach                               
                            </div>
                            <!-- Modal 1 -->
                            <div id="openModal" class="modalDialog">
                                <div>
                                    @foreach ($cv as $cvpri)
                                    <a href="#close" title="Close" class="close">X</a>
                                    <div>
                                        <img src="{{url('/')}}/img/{{$cvpri->imagen}}" class="foto">
                                        <h2 class="popTitulo">Dr. Juan Carlos Paillet</h2>
                                    </div>
                                    <div class="historia">
                                        <p>{{ $cvpri->texto }}</p>
                                    </div>
                                    @endforeach

                                    <h2>Antecedentes de cirugía en general.</h2>
                                    @foreach ($cv_lista as $cvlis)            
                                    <ul>
                                        <li>{{ $cvlis->texto }}</li>
                                    </ul>
                                    @endforeach
                                    
                                    <h2>Antecedentes de cirugía plástica</h2>
                                    @foreach ($cv_plastica as $cvplas)
                                    <ul>
                                        <li>{{ $cvplas->texto }}</li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                            <!-- END Modal 1 -->
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="team-person text-center">
                                <h6>Clínica</h6>
                                <a href="#openModal2">
                                    <img src="img/clinica.jpg" alt="team" class="foto2 img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</section>

<!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            
            <h3>{{ $cirugia[0] -> titulo}}</h3> 
            <p>{{ $cirugia[0] -> texto}}</p>
        </div>
        <div class="row items-container clearfix">
            @foreach ($cirugia_slider as $slid)
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="{{url('/')}}/img/{{$slid->imagen}}" alt="img" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="service.html">
                            <h6>{{ $slid->titulo }}</h6>
                        </a>
                        <p>{{ $slid->texto }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--End Service Section--> 

<!--Start about us area-->
<section class="service-tab-section section">
    <div class="outer-box clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                      <h3>Facial</h3>
                      <br>
                    </div>
                    <!-- Nav tabs -->
                    <div class="tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#dormitory"  data-toggle="tab">Lifting</a>
                            </li>
                            <li role="presentation">
                                <a href="#orthopedic" data-toggle="tab">Dermoabración</a>
                            </li>
                            <li role="presentation">
                                <a href="#sonogram" data-toggle="tab">Peelings</a>
                            </li>
                        </ul>
                    </div>
                    <!--Start single tab content-->
                    <div class="tab-content">
                        <div class="service-box tab-pane fade in active row" id="dormitory">
                            <div class="col-md-6">
                                <img class="img-responsive" src="img/service-one.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6"> <!-- Preguntas -->
                                <div class="contents">
                                    <div class="accordion-section">
                                        <div class="accordion-holder">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                ¿Qué es?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                                    Su efecto consiste en producir un bloqueo transitorio y reversible a nivel de la placa neuro-muscular, indicándole que se contraiga. Actúa fundamentalmente inhibiendo la acetilcolina, la cual es responsable de la contracción muscular y de la secreción del sudor entre otras.
                                                                    Las arrugas son el resultado de varios factores, por ejemplo la calidad cutánea y los movimientos musculares subyacentes.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                    Pre-operatorio
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                                La Toxina Botulínica tipo A - BOTOX® purificada, es producida en el extranjero. Para su correcta preservación, debe ser transportada a una temperatura constante (2 a 8 grados centígrados) desde su producción, lo que garantiza su eficacia a la hora de ser administrada. Es importante recordar que su efecto NO es definitivo, siendo el mismo de 4 a 6 meses.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        Procedimiento
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                                Para su aplicación, se requiere de una limpieza profunda del área a tratar y de material descartable estéril durante su preparación. NO requiere de anestesia, ya que su aplicación es casi indolora; así como tampoco requiere internación ya que es de uso ambulatorio. Puede producir leve dolor al tacto, en el área tratada, los dos primeros días post tratamiento; NO se han reportado complicaciones mayores ya que sus efectos son reversibles.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFour">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                                                        aria-controls="collapseFour">
                                                                    Post-operatorio
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body">
                                                                    Los cambios obtenidos son evidentes entre los 5 a 10 días posteriores a su aplicación. NO interfieren con las actividades cotidianas de cada individuo.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> <!-- Preguntas -->
                            <!-- Slider -->
                            <div class="col-md-12">
                              <h2 class="tit_slider">Antes y Después</h2>  
                              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img src="img/slider2-1.jpg" alt="Los Angeles" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="img/slider2-1.jpg" alt="Chicago" style="width:100%;">
                                  </div>
                                
                                  <div class="item">
                                    <img src="img/slider2-1.jpg" alt="New york" style="width:100%;">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                  <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                  <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                            <!-- EndSlider -->
                        </div>
                        <!--End single tab content-->

                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="orthopedic">
                            <div class="col-md-6">
                                <img class="img-responsive" src="img/service-two.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6"> <!-- Preguntas -->
                                <div class="contents">
                                    <div class="accordion-section">
                                        <div class="accordion-holder">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                ¿Qué es?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                                    Su efecto consiste en producir un bloqueo transitorio y reversible a nivel de la placa neuro-muscular, indicándole que se contraiga. Actúa fundamentalmente inhibiendo la acetilcolina, la cual es responsable de la contracción muscular y de la secreción del sudor entre otras.
                                                                    Las arrugas son el resultado de varios factores, por ejemplo la calidad cutánea y los movimientos musculares subyacentes.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                    Pre-operatorio
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                                La Toxina Botulínica tipo A - BOTOX® purificada, es producida en el extranjero. Para su correcta preservación, debe ser transportada a una temperatura constante (2 a 8 grados centígrados) desde su producción, lo que garantiza su eficacia a la hora de ser administrada. Es importante recordar que su efecto NO es definitivo, siendo el mismo de 4 a 6 meses.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        Procedimiento
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                                Para su aplicación, se requiere de una limpieza profunda del área a tratar y de material descartable estéril durante su preparación. NO requiere de anestesia, ya que su aplicación es casi indolora; así como tampoco requiere internación ya que es de uso ambulatorio. Puede producir leve dolor al tacto, en el área tratada, los dos primeros días post tratamiento; NO se han reportado complicaciones mayores ya que sus efectos son reversibles.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFour">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                                                        aria-controls="collapseFour">
                                                                    Post-operatorio
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body">
                                                                    Los cambios obtenidos son evidentes entre los 5 a 10 días posteriores a su aplicación. NO interfieren con las actividades cotidianas de cada individuo.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Preguntas -->
                            <!-- Slider -->
                            <div class="col-md-12">
                              <h2 class="tit_slider">Antes y Después</h2>  
                              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img src="img/slider2-1.jpg" alt="Los Angeles" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="img/slider2-1.jpg" alt="Chicago" style="width:100%;">
                                  </div>
                                
                                  <div class="item">
                                    <img src="img/slider2-1.jpg" alt="New york" style="width:100%;">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                  <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                  <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                            <!-- EndSlider -->
                        </div>
                        <!--End single tab content-->

                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="sonogram">
                            <div class="col-md-6">
                                <img class="img-responsive" src="img/service-three.jpg" alt="service-image">
                            </div>
                            <div class="col-md-6"> <!-- Preguntas -->
                                <div class="contents">
                                    <div class="accordion-section">
                                        <div class="accordion-holder">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                ¿Qué es?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                                    Su efecto consiste en producir un bloqueo transitorio y reversible a nivel de la placa neuro-muscular, indicándole que se contraiga. Actúa fundamentalmente inhibiendo la acetilcolina, la cual es responsable de la contracción muscular y de la secreción del sudor entre otras.
                                                                    Las arrugas son el resultado de varios factores, por ejemplo la calidad cutánea y los movimientos musculares subyacentes.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                    Pre-operatorio
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                                La Toxina Botulínica tipo A - BOTOX® purificada, es producida en el extranjero. Para su correcta preservación, debe ser transportada a una temperatura constante (2 a 8 grados centígrados) desde su producción, lo que garantiza su eficacia a la hora de ser administrada. Es importante recordar que su efecto NO es definitivo, siendo el mismo de 4 a 6 meses.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        Procedimiento
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                                Para su aplicación, se requiere de una limpieza profunda del área a tratar y de material descartable estéril durante su preparación. NO requiere de anestesia, ya que su aplicación es casi indolora; así como tampoco requiere internación ya que es de uso ambulatorio. Puede producir leve dolor al tacto, en el área tratada, los dos primeros días post tratamiento; NO se han reportado complicaciones mayores ya que sus efectos son reversibles.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFour">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                                                        aria-controls="collapseFour">
                                                                    Post-operatorio
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body">
                                                                    Los cambios obtenidos son evidentes entre los 5 a 10 días posteriores a su aplicación. NO interfieren con las actividades cotidianas de cada individuo.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Preguntas -->
                            <!-- Slider -->
                            <div class="col-md-12">
                              <h2 class="tit_slider">Antes y Después</h2>  
                              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                  <div class="item active">
                                    <img src="img/slider2-1.jpg" alt="Los Angeles" style="width:100%;">
                                  </div>

                                  <div class="item">
                                    <img src="img/slider2-1.jpg" alt="Chicago" style="width:100%;">
                                  </div>
                                
                                  <div class="item">
                                    <img src="img/slider2-1.jpg" alt="New york" style="width:100%;">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                  <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                  <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                            </div>
                            <!-- EndSlider -->
                        </div>
                        <!--End single tab content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End about us area-->

<!-- Contact Section -->
<section class="appoinment-section section" style="z-index: 1;">
    <div class="color1">
        <div class="color2">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area">
                    <div class="section-title text-center">
                        <h3><span>Saque su</span>
                            TURNO
                        </h3>
                    </div>
                    <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="Nombre" placeholder="Nombre" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Phone" placeholder="Teléfono" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="Correo" placeholder="Correo" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="Apellido" placeholder="Apellido" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="Ciudad" placeholder="Ciudad" required="">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="cirugia"></label>
                                        <select class="form-control" id="cirugia" name="cirugia">
                                            <option value="none" class="form-control">Cirugía que le interesa</option>
                                            <option value="Parpados" class="form-control">Parpados</option>
                                            <option value="Nariz" class="form-control">Nariz</option>
                                            <option value="Facial" class="form-control">Facial</option>
                                            <option value="Mamaria" class="form-control">Mamaria</option>
                                            <option value="Corporal" class="form-control">Corporal</option>
                                            <option value="Botox®" class="form-control">Botox®</option>
                                            <option value="Otros" class="form-control">Otros</option>
                                        </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input id="appt-time" type="time" name="appt-time">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <!-- <div class="form-group">
                                    <select name="subject">
                                        <option>Doctor</option>
                                        <option>Diagnostic</option>
                                        <option>Psychological</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="subject">
                                        <option>Departments</option>
                                        <option>Diagnostic</option>
                                        <option>Psychological</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" placeholder="Tu mensaje..." required=""></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn-style-one">ENVIAR</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>                        
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">

            </div>
        </div>                    
    </div>
</section>
<!-- End Contact Section -->

<section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- address start -->
                <div class="address-block">
                    @foreach ($contacto as $cont)
                    <!-- Location -->
                    <div class="media">
                        <i class="fa fa-map-o"></i>
                        <div class="media-body">
                            <h3>{{ $cont->direccion }}</h3>
                        </div>
                    </div>   
                    <!-- Phone --> 
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h3>{{ $cont->telefono }}</h3>
                        </div>
                    </div>
                    <!-- Whatsapp -->  
                    <div class="media">
                        <i class="fa fa-whatsapp"></i>
                        <div class="media-body">
                            <h3>{{ $cont->whatsapp }}</h3>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="media">
                        <i class="fa fa-envelope-o"></i>
                        <div class="media-body">
                            <h3>{{ $cont->correo }}</h3>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-clock-o"></i>
                        <div class="media-body">
                            <h3>Horarios de Consultorio :</h3>
                            <p>
                                Lunes a Viernes - 8:00 a 12:00 / 16:00 a 20:00
                                <br>Sabados - 8:00 to 12:00
                            </p>
                        </div>
                    </div>
                    <div class="about-widget">
                      <ul class="list-inline social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                      </ul>
                    </div>
                <!-- address end -->
                @endforeach
                </div>
                <div class="col-md-8">

                </div>
            </div>
            <!--================================
            =            Google Map            =
            =================================-->
            <div class="col-md-6">
            <section class="map">
                <!-- Google Map -->
                <div id="map"></div>
            </section>
            </div>
            <!--====  End of Google Map  ====-->
        </div>
    </div>
    <!-- container end -->
</section>

<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <a href="https://www.plasticsurgery.org/" target="_blank">
              <img class="media-object" src="img/icon1.png" alt="post-thumb">
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <a href="http://www.scperrl.org/" target="_blank">
              <img class="media-object" src="img/icon4.png" alt="post-thumb">
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <a href="http://www.sacper.org.ar/www/" target="_blank">
              <img class="media-object" src="img/icon2.png" alt="post-thumb">
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <a href="https://www.isaps.org/es/" target="_blank">
              <img class="media-object" src="img/icon3.png" alt="post-thumb">
            </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2018. powered by
          <a href="https://nkstudios.net/" style="color: red;">NKStudios</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="{{asset('plugins/jquery.js')}}"></script>
<script src="{{asset('plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-select.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('plugins/slick/slick.min.js')}}"></script>
<!-- FancyBox -->
<script src="{{asset('plugins/fancybox/jquery.fancybox.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{asset('plugins/google-map/gmap.js')}}"></script>

<script src="{{asset('plugins/validate.js')}}"></script>
<script src="{{asset('plugins/wow.js')}}"></script>
<script src="{{asset('plugins/jquery-ui.js')}}"></script>
<script src="{{asset('plugins/timePicker.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>

</html>

