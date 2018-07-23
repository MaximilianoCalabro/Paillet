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

            {!!Form::model($contacto,['method'=>'PATCH','route'=>['contacto.update',$contacto->id_contacto],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" value="{{$contacto->direccion}}" placeholder="Dirección...">
            </div> 
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" value="{{$contacto->telefono}}" placeholder="Teléfono...">
            </div>  
            <div class="form-group">
                <label for="whatsapp">Whatsapp</label>
                <input type="text" name="whatsapp" class="form-control" value="{{$contacto->whatsapp}}" placeholder="Whatsapp...">
            </div>  
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" name="correo" class="form-control" value="{{$contacto->correo}}" placeholder="Correo...">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}

        </div>
    </div>
@endsection