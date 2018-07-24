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

        {!!Form::open(array('url'=>'/admin/cirugia','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" class="form-control" placeholder="Título...">
            </div>            
            <div class="form-group">
                  <label for="texto">Texto</label>
                  <input type="text" name="texto" class="form-control" placeholder="Texto...">
            </div>
            <div class="form-group">
                <label for="direccion">direccion</label>
                <input type="text" name="direccion" class="form-control" placeholder="direccion...">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        {!!Form::close()!!}     
            
        </div>
    </div>
@endsection