@extends ('index')
@section ('cirugia')
    <div class="section-title text-center">
      <h3>OTROS</h3>
      <br>
    </div>
    <!-- Nav tabs -->
    <div class="tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#dormitory"  data-toggle="tab">{{ $orejas[0]->nombre }}</a>
            </li>
            <li role="presentation">
                <a href="#orthopedic" data-toggle="tab">{{ $cutaneas[0]->nombre }}</a>
            </li>
            <li role="presentation">
                <a href="#sonogram" data-toggle="tab">{{ $capilar[0]->nombre }}</a>
            </li>
        </ul>
    </div>
    <!--Start single tab content-->
    <div class="tab-content">
        <div class="service-box tab-pane fade in active row" id="dormitory">
            <div class="col-md-6">
                <img class="img-responsive" src="{{url('/')}}/img/{{$orejas[0]->imagen}}" alt="service-image">
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
                                            {{ $orejas[0]->que }}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    Pre-operatorio
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            {{ $orejas[0]->pre }}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Procedimiento
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            {{ $orejas[0]->pro }}
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Post-operatorio
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            {{ $orejas[0]->post }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> <!-- Preguntas -->
        </div>
<!--End single tab content-->

                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="orthopedic">
                            <div class="col-md-6">
                                <img class="img-responsive" src="{{url('/')}}/img/{{$cutaneas[0]->imagen}}" alt="service-image">
                            </div>
                            <div class="col-md-6"> <!-- Preguntas -->
                                <div class="contents">
                                    <div class="accordion2-section">
                                        <div class="accordion2-holder">
                                            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingUno">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseUno" aria-expanded="true" aria-controls="collapseUno">
                                                                ¿Qué es?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseUno" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            {{ $cutaneas[0]->que }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingDos">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseDos" aria-expanded="false"
                                                                        aria-controls="collapseDos">
                                                                    Pre-operatorio
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseDos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            {{ $cutaneas[0]->pre }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTres">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTres" aria-expanded="false"
                                                                        aria-controls="collapseTres">
                                                                        Procedimiento
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTres" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            {{ $cutaneas[0]->pro }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingCuatro">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseCuatro" aria-expanded="false"
                                                                        aria-controls="collapseCuatro">
                                                                    Post-operatorio
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseCuatro" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body">
                                                            {{ $cutaneas[0]->post }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Preguntas -->
                        </div>
                        <!--End single tab content-->

                        <!--Start single tab content-->
                        <div class="service-box tab-pane fade in" id="sonogram">
                            <div class="col-md-6">
                                <img class="img-responsive" src="{{url('/')}}/img/{{$capilar[0]->imagen}}" alt="service-image">
                            </div>
                            <div class="col-md-6"> <!-- Preguntas -->
                                <div class="contents">
                                    <div class="accordion3-section">
                                        <div class="accordion3-holder">
                                            <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="heading1">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                                ¿Qué es?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            {{ $capilar[0]->que }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="heading2">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse2" aria-expanded="false"
                                                                        aria-controls="collapse2">
                                                                        Procedimiento
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            {{ $capilar[0]->pro }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="heading3">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse3" aria-expanded="false"
                                                                        aria-controls="collapse3">
                                                                        Procedimiento
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            {{ $capilar[0]->pro }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="heading4">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse4" aria-expanded="false"
                                                                        aria-controls="collapse4">
                                                                    Post-operatorio
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body">
                                                            {{ $capilar[0]->post }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Preguntas -->
                        </div>
                        <!--End single tab content-->
                    </div>
@endsection