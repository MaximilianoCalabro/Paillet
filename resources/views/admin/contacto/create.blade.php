@extends ('layouts/admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!!Form::open(array('url'=>'/admin/contacto','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" placeholder="Dirección...">
            </div> 
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" placeholder="Teléfono...">
            </div>  
            <div class="form-group">
                <label for="whatsapp">Whatsapp</label>
                <input type="text" name="whatsapp" class="form-control" placeholder="Whatsapp...">
            </div>  
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" name="correo" class="form-control" placeholder="Correo...">
            </div>  
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            {!!Form::close()!!}

        </div>
    </div>
@endsection