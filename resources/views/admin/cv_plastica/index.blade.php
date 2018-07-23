@extends ('layouts/admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Antecedentes de cirugía plástica - <a href="/admin/cv_plastica/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Antecedentes</th>
				</thead>
               @foreach ($cv_plastica as $cat)
				<tr>
					<td>{{ $cat->texto}}</td>
					<td>
						<a href="{{URL::action('CvPlasticaController@edit',$cat->id_cv_plastica)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->id_cv_plastica}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include ('admin.cv_plastica.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection