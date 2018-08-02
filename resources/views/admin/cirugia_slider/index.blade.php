@extends ('layouts/admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>- Cirugía - <!-- <a href="/admin/cirugia_slider/create"><button class="btn btn-success">Nuevo</button></a> --></h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Imágen Slider (900 x 900 px)</th>
					<th>Título</th>
					<th>Texto</th>			
				</thead>
               @foreach ($cirugia_slider as $cat)
				<tr>
					<td><img src="{{asset('img/'.$cat->imagen)}}" height="150px" width="150px"> </td>
					<td>{{ $cat->titulo }}</td>
					<td>{{ $cat->texto }}</td>			
					<td>
						<a href="{{URL::action('CirugiaSliderController@edit',$cat->id_cirugia_slider)}}"><button class="btn btn-info">Editar</button></a>
                        <!-- <a href="" data-target="#modal-delete-{{$cat->id_cirugia_slider}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a> -->
					</td>
				</tr>
				@include ('admin.cirugia_slider.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection