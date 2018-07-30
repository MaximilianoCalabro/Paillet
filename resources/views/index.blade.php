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
        </div>
    @endforeach

    </div>
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
                                    <img src="{{url('/')}}/img/{{$clinica[0]->imagen}}" alt="team" class="foto2 img-responsive">
                                </a>
                            </div>
                            <!-- Modal 2 -->
                            <div id="openModal2" class="modalDialog">
                                <div>
                                    <a href="#close" title="Close" class="close">X</a>
                                    
                                    <div class="hero-slider2">
                                        <!-- Slider Item -->
                                        @foreach ($clinica as $clin)
                                        <div class="slider-item" style="background-image:url('{{url('/')}}/img/{{$clin->imagen}}')">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <!-- Slide Content Start -->
                                                        <div class="content style text-center">
                                                            <p class="tag-text mb-5">{{ $clin->texto }}</p>
                                                        </div>
                                                        <!-- Slide Content End -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- Slider Item -->
                                    </div>
                                </div>
                            </div>
                            <!-- END Modal 2 -->
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
                        <a href="{{ $slid->direccion }}">
                            <img src="{{url('/')}}/img/{{$slid->imagen}}" alt="img" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <a href="{{ $slid->direccion }}">
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
                    <!-- Cirugia -->
                    @yield('cirugia')
                    <!-- EndCirugia -->
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
                        <h3>
                            CONTACTENOS
                        </h3>
                    </div>
                    <form name="contact_form" class="default-form contact-form" action="contact_form.php" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="nombre" placeholder="Nombre" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="telefono" placeholder="Teléfono" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="correo" placeholder="Correo" required="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="apellido" placeholder="Apellido" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="ciudad" placeholder="Ciudad" required="">
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
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="mensaje" placeholder="Tu mensaje..." required=""></textarea>
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
        <div class="col-md-3 col-sm-12 col-xs-12">
            <a href="https://www.plasticsurgery.org/" target="_blank">
              <img class="media-object" src="img/icon1.png" alt="post-thumb">
            </a>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <a href="http://www.scperrl.org/" target="_blank">
              <img class="media-object" src="img/icon4.png" alt="post-thumb">
            </a>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
            <a href="http://www.sacper.org.ar/www/" target="_blank">
              <img class="media-object" src="img/icon2.png" alt="post-thumb">
            </a>
        </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCClyAl2KmZcuWFqHOSaCrrVn2fydVcuGE"></script> 
<script src="{{asset('plugins/google-map/gmap.js')}}"></script>

<script src="{{asset('plugins/validate.js')}}"></script>
<script src="{{asset('plugins/wow.js')}}"></script>
<script src="{{asset('plugins/jquery-ui.js')}}"></script>
<script src="{{asset('plugins/timePicker.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

<!-- Slider -->
<script src="{{asset('js/jquery.slides.js')}}"></script>
<script>

$(function(){
    $(".slides").slidesjs({
        play: {
          active: true,
            // [boolean] Generate the play and stop buttons.
            // You cannot use your own buttons. Sorry.
          effect: "slide",
            // [string] Can be either "slide" or "fade".
          interval: 3000,
            // [number] Time spent on each slide in milliseconds.
          auto: true,
            // [boolean] Start playing the slideshow on load.
          swap: true,
            // [boolean] show/hide stop and play buttons
          pauseOnHover: false,
            // [boolean] pause a playing slideshow on hover
          restartDelay: 2500
            // [number] restart delay on inactive slideshow
        }
    });
});

</script>
</body>

</html>

