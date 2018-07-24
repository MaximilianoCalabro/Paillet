@extends ('layouts/admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Slider de Antes/Después - </h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				<th>Imágenes Slider	<a href="/admin/subseccion/create"><button class="btn btn-success">Nuevo</button></a></th>
				</thead>
				@foreach ($subseccion as $cat)
					<tr>
						<td><img src="{{asset('img/'.$cat->imagen)}}" height="150px" width="150px"> </td>

						<td>
							<a href="{{URL::action('SubseccionController@edit',$cat->id_subseccion)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$cat->id_subseccion}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include ('admin.subseccion.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection