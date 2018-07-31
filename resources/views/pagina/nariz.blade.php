@extends ('index')
@section ('cirugia')
    <div class="section-title text-center">
        <h3>NARIZ</h3>
      <br>
    </div>
    <!-- Nav tabs -->
    <div class="tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#{{ $cirugias[1]->nombre }}"  data-toggle="tab">{{ $cirugias[1]->nombre }}</a>
            </li>
        </ul>
    </div>
    <!--Start single tab content-->
    <div class="tab-content">
        <div class="service-box tab-pane fade in active row" id="{{ $cirugias[1]->nombre }}">
            <div class="col-md-6">
                <img class="img-responsive" src="{{url('/')}}/img/{{$cirugias[1]->imagen}}" alt="service-image">
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
                                        <div class="panel-body">{{ $cirugias[1]->que_es }}</div>
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
                                        <div class="panel-body">{{ $cirugias[1]->pre_ope }}</div>
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
                                        <div class="panel-body">{{ $cirugias[1]->procedimientos }}</div>
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
                                        <div class="panel-body">{{ $cirugias[1]->post_ope }}</div>
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
                <div class="main">
                    <div class="slides">
                        @foreach ($subseccion as $s)
                            @if($s->id_cirugias == $cirugias[1]->id_cirugias)
                            <img src="{{url('/')}}/img/subseccion/{{$s->subseccion}}" alt="">
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- EndSlider -->
        </div>
        <!--End single tab content-->
    </div>
@endsection