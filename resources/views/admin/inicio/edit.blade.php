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

            {!!Form::model($inicio,['method'=>'PATCH','route'=>['inicio.update',$inicio->id_inicio],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="imagen">Imágen Slider</label>
                <input type="file" name="imagen" class="form-control" value="{{$inicio->imagen}}">
                @if (($inicio->imagen)!='')
                    <img src="{{asset('img/'.$inicio->imagen)}}" height="150px" width="150px">
                @endif
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}

        </div>
    </div>
@endsection