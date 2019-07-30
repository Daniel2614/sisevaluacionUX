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
 	<div class="col-6">
 		<label>Ingrese Licenciatura</label>
 		<input type="text" class="form-control" name="">
 	</div>
 	<div class="col-6">
 		<label>Ingrese Docente</label>
 		<!-- <select class="form-control" name="docente" >
 			@foreach($docentes as $docente)
 			<option value="{{$docente->id}}"> {{$docente->nombre}}
 			</option>
 			@endforeach
 		</select> -->
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