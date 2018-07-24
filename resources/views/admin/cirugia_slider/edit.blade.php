@extends ('layouts/admin')
@section ('contenido')
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                  @endforeach
                  </ul>
            </div>
            @endif

            {!!Form::model($cirugia_slider,['method'=>'PATCH','route'=>['cirugia_slider.update',$cirugia_slider->id_cirugia_slider],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="imagen">Imágen Slider (900 x 900 px)</label>
                <input type="file" name="imagen" class="form-control" value="{{$cirugia_slider->imagen}}">
                @if (($cirugia_slider->imagen)!='')
                    <img src="{{asset('img/'.$cirugia_slider->imagen)}}" height="150px" width="150px">
                @endif
            </div>
            <div class="form-group">
                  <label for="titulo">Título</label>
                  <input type="text" name="titulo" class="form-control" value="{{$cirugia_slider->titulo}}" placeholder="Título">
            </div>
            <div class="form-group">
                  <label for="texto">Texto</label>
                  <input type="text" name="texto" class="form-control" value="{{$cirugia_slider->texto}}" placeholder="Texto">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                  <br>
                  <select name="direccion">
                        <option value="-">------------</option> 
                        <option value="/pagina/parpados">Parpados</option> 
                        <option value="/pagina/nariz">Nariz</option>
                        <option value="/pagina/facial">Facial</option>
                        <option value="/pagina/mamarias">Mamarias</option>
                        <option value="/pagina/corporal">Corporal</option>
                        <option value="/pagina/botox">Botox</option>
                        <option value="/pagina/otros">Otros</option>
                  </select>
            </div>
            <div class="form-group">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                  <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}           
            
            </div>
      </div>
@endsection