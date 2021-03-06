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

            {!!Form::open(array('url'=>'/admin/cirugias/lazer','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre...">
            </div>            
            <div class="form-group">
                <label for="que">¿Qué es?</label>
                <input type="text" name="que" class="form-control" placeholder="¿Qué es?...">
            </div>
            <div class="form-group">
                <label for="pre">Pre-Operación</label>
                <input type="text" name="pre" class="form-control" placeholder="Pre-Operación...">
            </div>
            <div class="form-group">
                  <label for="pro">Prodecimientos</label>
                  <input type="text" name="pro" class="form-control" placeholder="Procedimientos...">
            </div>
            <div class="form-group">
                  <label for="post">Post-Operación</label>
                  <input type="text" name="post" class="form-control" placeholder="Post-Operación...">
            </div>
            <div class="form-group">
                <label for="imagen">Imágen</label>
                <input type="file" name="imagen" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            {!!Form::close()!!}

        </div>
    </div>
@endsection