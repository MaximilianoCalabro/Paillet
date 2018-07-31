@extends ('index')
@section ('cirugia')
<div class="section-title text-center">
    <h3>BOTOX</h3>
    <br>
</div>
<!-- Nav tabs -->
<div class="tabs">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#arrugas"  data-toggle="tab">Arrugas</a>
        </li>
        <li role="presentation">
            <a href="#sudoración" data-toggle="tab">Sudoración</a>
        </li>
    </ul>
</div>
<!--Start single tab content-->
<div class="tab-content">
    <div class="service-box tab-pane fade in active row" id="arrugas">
        <div class="col-md-6">
            <img class="img-responsive" src="images/services/service-one.jpg" alt="service-image">
        </div>
        <div class="col-md-6">
            <div class="contents">
                <div class="section-title">
                    <h3>Arrugas</h3>
                </div>
                <div class="text">
                    <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added. then a
                        dental prosthetic is added.then a dental pros- thetic is added.</p>
                        <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added. then a dental
                            prosthetic is added.then a dental pros- thetic is added.</p>
                </div>
            </div>
        </div>

    </div>
    <!--End single tab content-->
    <!--Start single tab content-->
    <div class="service-box tab-pane fade in" id="sudoración">
        <div class="col-md-6">
            <img class="img-responsive" src="images/services/service-two.jpg" alt="service-image">
        </div>
        <div class="col-md-6">
            <div class="contents">
                <div class="section-title">
                    <h3>Sudoración</h3>
                </div>
                <div class="text">
                    <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                    <p>The implant fixture is first placed, so that it ilikely to osseointegrate, then a dental prosthetic is added.
                        then a dental prosthetic is added.then a dental pros- thetic is added.</p>
                </div>
            </div>
        </div>
    </div>
    <!--End single tab content-->
</div>
@endsection