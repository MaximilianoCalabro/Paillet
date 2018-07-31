@extends ('index')
@section ('cirugia')
<div class="section-title text-center">
    <h2>FACIAL</h2>
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
                <img class="img-responsive" src="{{url('/')}}/img/{{$cirugias[2]->imagen}}" alt="service-image">
            </div>
            <div class="col-md-6"> <!-- Preguntas -->
                <div class="contents">
                    <div class="accordion-section">
                        <div class="accordion-holder">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h3 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                ¿Qué es?
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">{{ $cirugias[2]->que_es }}</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h3 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    Pre-operatorio
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">{{ $cirugias[2]->pre_ope }}</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h3 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                        Procedimiento
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">{{ $cirugias[2]->procedimientos }}</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h3 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                    Post-operatorio
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">{{ $cirugias[2]->post_ope }}</div>
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
        <div class="tab-content">
            <div class="service-box tab-pane fade in active row" id="orthopedic">
                <div class="col-md-6">
                    <img class="img-responsive" src="{{url('/')}}/img/{{$cirugias[3]->imagen}}" alt="service-image">
                </div>
                <div class="col-md-6"> <!-- Preguntas -->
                    <div class="contents">
                        <div class="accordion-section">
                            <div class="accordion-holder">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h3 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    ¿Qué es?
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">{{ $cirugias[3]->que_es }}</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                        Pre-operatorio
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">{{ $cirugias[3]->pre_ope }}</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                            Procedimiento
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">{{ $cirugias[3]->procedimientos }}</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                        Post-operatorio
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">{{ $cirugias[3]->post_ope }}</div>
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
        <div class="tab-content">
            <div class="service-box tab-pane fade in active row" id="sonogram">
                <div class="col-md-6">
                    <img class="img-responsive" src="{{url('/')}}/img/{{$cirugias[4]->imagen}}" alt="service-image">
                </div>
                <div class="col-md-6"> <!-- Preguntas -->
                    <div class="contents">
                        <div class="accordion-section">
                            <div class="accordion-holder">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h3 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    ¿Qué es?
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">{{ $cirugias[4]->que_es }}</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                        Pre-operatorio
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">{{ $cirugias[4]->pre_ope }}</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                            Procedimiento
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">{{ $cirugias[4]->procedimientos }}</div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                        Post-operatorio
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">{{ $cirugias[4]->post_ope }}</div>
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
@endsection