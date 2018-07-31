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

            {!!Form::model($cirugias,['method'=>'PATCH','route'=>['cirugias.update',$cirugias->id_cirugias],'files'=>'true'])!!}
            {{Form::token()}}
            <div class="form-group">
                  <label for="pertenece">Pertenece a</label>
                  <br>
                  <select name="pertenece">
                        <option value="0">------------</option> 
                        <option value="1">Parpados</option> 
                        <option value="2">Nariz</option>
                        <option value="3">Facial</option>
                        <option value="4">Mamarias</option>
                        <option value="5">Corporal</option>
                        <option value="6">Botox</option>
                        <option value="7">Otros</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{$cirugias->nombre}}" placeholder="Nombre">
            </div>            
            <div class="form-group">
                <label for="que_es">¿Qué es?</label>
                <input type="text" name="que_es" class="form-control" value="{{$cirugias->que_es}}" placeholder="¿Qué es?">
            </div>            
            <div class="form-group">
                <label for="pre_ope">Pre-Operacion</label>
                <input type="text" name="pre_ope" class="form-control" value="{{$cirugias->pre_ope}}" placeholder="Pre-Operacion">
            </div>            
            <div class="form-group">
                <label for="procedimientos">Prodecimientos</label>
                <input type="text" name="procedimientos" class="form-control" value="{{$cirugias->procedimientos}}" placeholder="Prodecimientos">
            </div>            
            <div class="form-group">
                <label for="post_ope">Post_Operacion</label>
                <input type="text" name="post_ope" class="form-control" value="{{$cirugias->post_ope}}" placeholder="Post-Operacion">
            </div>
            <div class="form-group">
                <label for="imagen">Imágen</label>
                <input type="file" name="imagen" class="form-control" value="{{$cirugias->imagen}}">
                @if (($cirugias->imagen)!='')
                    <img src="{{asset('img/'.$cirugias->imagen)}}" height="150px" width="150px">
                @endif
            </div>
            <div class="form-group">
                  <label for="subseccion">Imágen Antes/Después(Mismo tamaño / Agrega Imágenes)</label>
                  <input type="file" name="subseccion[]" class="form-control" multiple>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}

        </div>
    </div>
@endsection