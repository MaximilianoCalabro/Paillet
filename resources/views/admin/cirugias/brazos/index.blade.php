@extends ('layouts/admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Brazos - <!-- <a href="/admin/cirugias/brazos/create"><button class="btn btn-success">Nuevo</button></a> --></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Nombre</th>
					<th>¿Qué es?</th>
					<th>Pre-operación</th>
					<th>Prodecimientos</th>
					<th>Post-operación</th>
					<th>Imágen</th>
				</thead>
               @foreach ($brazos as $cat)
				<tr>
					<td>{{ $cat->nombre }}</td>
					<td>{{ $cat->que }}</td>
					<td>{{ $cat->pre }}</td>
					<td>{{ $cat->pro }}</td>
					<td>{{ $cat->post }}</td>
					<td><img src="{{asset('img/'.$cat->imagen)}}" height="150px" width="150px"> </td>
					<td>
						<a href="{{URL::action('BrazosController@edit',$cat->id)}}"><button class="btn btn-info">Editar</button></a>
                        <!-- <a href="" data-target="#modal-delete-{{$cat->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> -->
					</td>
				</tr>
				@include ('admin.cirugias.brazos.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection