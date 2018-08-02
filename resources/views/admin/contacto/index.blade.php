@extends ('layouts/admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Contacto -  <!-- <a href="/admin/contacto/create"><button class="btn btn-success">Nuevo</button></a> --></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Whatsapp</th>
					<th>Correo</th>					
				</thead>
               @foreach ($contacto as $cat)
				<tr>
					<td>{{ $cat->direccion }}</td>
					<td>{{ $cat->telefono }}</td>
					<td>{{ $cat->whatsapp }}</td>
					<td>{{ $cat->correo }}</td>			
					<td>
						<a href="{{URL::action('ContactoController@edit',$cat->id_contacto)}}"><button class="btn btn-info">Editar</button></a>
                        <!-- <a href="" data-target="#modal-delete-{{$cat->id_contacto}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> -->
					</td>
				</tr>
				@include ('admin.contacto.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection