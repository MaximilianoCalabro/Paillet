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

            {!!Form::model($dermoabrasion,['method'=>'PATCH','route'=>['dermoabrasion.update',$dermoabrasion->id],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$dermoabrasion->nombre}}" placeholder="Nombre">
            </div>            
            <div class="form-group">
                <label for="que">¿Qué es?</label>
                <input type="text" name="que" class="form-control" value="{{$dermoabrasion->que}}" placeholder="¿Qué es?">
            </div>            
            <div class="form-group">
                <label for="pre">Pre-Operacion</label>
                <input type="text" name="pre" class="form-control" value="{{$dermoabrasion->pre}}" placeholder="Pre-Operacion">
            </div>            
            <div class="form-group">
                <label for="pro">Prodecimientos</label>
                <input type="text" name="pro" class="form-control" value="{{$dermoabrasion->pro}}" placeholder="Prodecimientos">
            </div>            
            <div class="form-group">
                <label for="post">Post_Operacion</label>
                <input type="text" name="post" class="form-control" value="{{$dermoabrasion->post}}" placeholder="Post-Operacion">
            </div>
            <div class="form-group">
                <label for="imagen">Imágen (900 x 900 px)</label>
                <input type="file" name="imagen" class="form-control" value="{{$dermoabrasion->imagen}}">
                @if (($dermoabrasion->imagen)!='')
                    <img src="{{asset('img/'.$dermoabrasion->imagen)}}" height="150px" width="150px">
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