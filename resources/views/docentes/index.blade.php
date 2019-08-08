@extends('template.main')

@section('title')
    Docentes
@endsection
@section('content')

  <div class="card">
    <div class="card-header ">
      Tabla de Maestros
      <div style="float: right"> 
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#docenteCreate">
  Añadir Maestro
</button>
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#importar">
  Subir Excel
</button>
      </div>
    </div>
    <div class="card-body">
      
      <div class="table-responsive">

        <table class="table table-bordered" style="text-align: center;">
          <thead class="bg-warning">
          <tr>
            <td>ID</td>
            <td>Nombre Completo</td>
            <!-- <td>Primer Apellido</td>
            <td>Segundo Apellido</td> -->
            <td>Carrera</td>
            <td>Acciones</td>
            </tr>
        </thead>
          @foreach ($docentes as $docente)
            <tr>
              <td>{{$docente->id}}</td>
              <td>{{$docente->nombre}}</td>
              <!--  <td>{{$docente->apPaterno}}</td>
              <td>{{$docente->apMaterno}}</td> --> 
              <td>
              {{-- @foreach($docente->carrera as $materia)
              <li>{{$materia->nombreCarrera}}</li> 
              @endforeach--}}</td>
              <td>
               <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#docenteEdit{{$docente->id}}">
                 Editar
               </button>
              </td>
            </tr>
<div class="modal fade" id="docenteEdit{{$docente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Docente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-container">
            <form method="POST" action="{{ route('dc.update') }}"  role="form">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="POST">
              <input name="id" type="hidden" value="{{$docente->id}}">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-12">
                  <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control input-sm" value="{{$docente->nombre}}">
                  </div>
                </div>
               <!--  <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="apPaterno" id="apPaterno" class="form-control input-sm" value="{{$docente->apPaterno}}">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="apMaterno" id="apMaterno" class="form-control input-sm" value="{{$docente->apMaterno}}">
                  </div>
                </div> -->
                <div class="col-xs-6 col-sm-6 col-md-12">
                  <div class="form-group">
                    <!-- <input type="text" name="apMaterno" id="apMaterno" class="form-control input-sm" value="{{$docente->apMaterno}}"> -->
                    <select class="form-control select2" name="carrera[]" multiple>
                    @foreach($carreras as $carrera)
                    <option value="{{$carrera->id}}"> {{$carrera->nombreCarrera}}
                    </option>
                    @endforeach
                    </select>
                  </div>
                </div>
              </div>  
              <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
                  <a href="{{ route('docentesdc') }}" class="btn btn-info btn-block" >Atrás</a>
                </div>  

              </div>
            </form>
          </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
          @endforeach
        </table>
      </div>
    </div>
  </div>

<div class="modal fade" id="docenteCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Docente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-container">
            <form method="POST" action="{{route('dc.store')}}" >
              {{ csrf_field() }}
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del docente">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="apPaterno" id="apPaterno" class="form-control input-sm" placeholder="Primer Apellido">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="apMaterno" id="apMaterno" class="form-control input-sm" placeholder="Segundo Apellido">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    
                    <select class="form-control select2" name="carrera[]" multiple >
                    @foreach($carreras as $carrera)
                    <option value="{{$carrera->id}}"> {{$carrera->nombreCarrera}}
                    </option>
                    @endforeach
                    </select>
                  </div>
                </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
      
          <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit"  value="Guardar" class="btn btn-success btn-block btn-primary">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Atras</button>
                </div>
              </form>
            </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="importar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cargar Docentes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('importar') }}"  role="form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="POST">
        <input type="file" name="excel">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Cargar</button>
      </div>
    </form>
    </div>
  </div>
</div>


@endsection
@section('scripts')
  <script src="{{ asset('plugins/BootstrapTable/js/bootstrap-table.min.js') }}"></script>
@endsection