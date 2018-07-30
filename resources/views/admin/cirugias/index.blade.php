@extends ('layouts/admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Cirugías - <a href="/admin/cirugias/create"><button class="btn btn-success">Nuevo</button></a></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Pertenece a</th>
					<th>Nombre</th>
					<th>¿Qué es?</th>
					<th>Pre-operación</th>
					<th>Prodecimientos</th>
					<th>Post-operación</th>
					<th>Imágen</th>
					<th>Imágenes Antes/Después</th>
				</thead>
               @foreach ($cirugias as $cat)
				<tr>
					<td>{{ $cat->pertenece }}</td>
					<td>{{ $cat->nombre }}</td>
					<td>{{ $cat->que_es }}</td>
					<td>{{ $cat->pre_ope }}</td>
					<td>{{ $cat->procedimientos }}</td>
					<td>{{ $cat->post_ope }}</td>
					<td><img src="{{asset('img/'.$cat->imagen)}}" height="150px" width="150px"> </td>
					@foreach ($subseccion as $s)
						@if($s->id_cirugias == $cat->id_cirugias)
						<td style="border: 1px solid black;">
							<img src="{{asset('img/subseccion/'.$s->subseccion)}}" height="100px" width="100px">
							{{Form::Open(array('action'=>array('SubseccionController@destroy',$s->id_subseccion),'method'=>'delete'))}}
							<a href="" data-target="#modalslider-delete-{{$s->id_subseccion}}" data-toggle="modalslider"><button type="submit" class="btn btn-danger" style="float: right;">X</button></a>
							{{Form::Close()}}
						</td>
						@endif
					@endforeach
					<td>
						<a href="{{URL::action('CirugiasController@edit',$cat->id_cirugias)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$cat->id_cirugias}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include ('admin.cirugias.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection