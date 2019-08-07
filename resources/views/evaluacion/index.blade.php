@extends('template.main')

@section('title')
    Evaluacion Jefaturas de la Universidad de Xalapa
@endsection
@section('content')
<div class="card">
	 <div class="card-header ">
      Evaluacion por Jefaturas
    </div>
 <div class="card-body">
 <div class="row">
 	<div class="col-6">
 		<label>Ingrese Licenciatura</label>
 		<select class="form-control" name="carrera" >
 			@foreach($carreras as $carrera)
 			<option value="{{$carrera->id}}"> {{$carrera->nombreCarrera}}
 			</option>
 			@endforeach
 		</select>
 	</div>
 	<div class="col-6">
 		<label>Ingrese Docente</label>
 		<select class="form-control" name="docente" >
 			@foreach($docentes as $docente)
 			<option value="{{$docente->id}}"> {{$docente->nombre}}
 			</option>
 			@endforeach
 		</select>
 	</div>
 </div>

</div>
</div>

<div class="card">
	 <div class="card-header ">
      Desempeño Administrativo
    </div>
 <div class="card-body">
 <div class="row">
 	<div class="col-12">
 		<table class="table">
 			<thead class="table table-bordered">
 				<tr class="table-secondary">
 				<th>Categoría</th>
 				<th>Aspecto a evaluar</th>
 				<th>Calificación</th>
 				<th>Frecuencia</th>
 				<th>Comentario</th>
 				</tr>
 			</thead>
 			<tbody>
 				@foreach($criterios as $criterio)
 				<tr>
 					<td>{{$criterio->categoria}}</td>
 					<td>{{$criterio->aspectoEvaluar}}</td>
 					<td></td>
 					<td>
 						<select id="frecuencia{{$criterio->id}}">

 							<option>N/A</option>
 							<option>si</option>
 							<option>Parcialmente</option>
 							<option>no</option>

 						</select>
 					</td>
 					<td>
 						<textarea></textarea>
 					</td>
 				</tr>
 				@endforeach
 			</tbody>
 		</table>
 		
 	</div>
 	
 </div>

</div>
</div>





@endsection

<!-- <script src="{{ asset('plugins/jQuery/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$.ajax({
		url: '{{url("/listamaestros")}}',
		type: 'get',

	success: function(data){
			console.log(data);

			
        },
        error: function(data){
          console.log("ya valio");  
        }
		
	});
});




</script> -->