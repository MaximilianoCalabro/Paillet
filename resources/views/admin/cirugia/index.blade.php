@extends ('layouts/admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Cirugia - <a href="/admin/cirugia/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Texto Inicial</th>
				</thead>
               @foreach ($cirugia as $cat)
				<tr>
					<td>{{ $cat->texto }}</td>

					<td>
						<a href="{{URL::action('CirugiaController@edit',$cat->id_cirugia)}}"><button class="btn btn-info">Editar</button></a>
					</td>
				</tr>
				@include ('admin.cirugia.modal')
				@endforeach
			</table>
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
				<th>Imágen</th>
				<th>Título</th>
				<th>Texto Cirugía</th>
				</thead>
				@foreach ($cirugia as $cat)
					<tr>
						<td>{{ $cat->imagen }}</td>
						<td>{{ $cat->titulo }}</td>
						<td>{{ $cat->texto2 }}</td>

						<td>
							<a href="{{URL::action('CirugiaController@edit',$cat->id_cirugia)}}"><button class="btn btn-info">Editar</button></a>
							<a href="" data-target="#modal-delete-{{$cat->id_cirugia}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@include ('admin.cirugia.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection