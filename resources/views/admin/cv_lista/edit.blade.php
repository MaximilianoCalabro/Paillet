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

            {!!Form::model($cv_lista,['method'=>'PATCH','route'=>['cv_lista.update',$cv_lista->id_cv_lista],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="texto">CV Antecedentes de cirugía en general</label>
                <textarea type="text" rows="5" name="texto" class="form-control" value="{{$cv_lista->texto}}" >{{$cv_lista->texto}}"</textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}

        </div>
    </div>
@endsection