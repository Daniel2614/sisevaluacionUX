@extends('template.main')

@section('title')
    Catalogos de Carreras de la UX
@endsection
@section('content')

  <div class="card">
    <div class="card-header ">
      Tabla Jefaturas
      <div style="float: right"> 
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#carreraCreate">
  Añadir Carrera
</button>
      </div>
    </div>
    <div class="card-body">
      
      <div class="table-responsive">

        <table class="table table-bordered" style="text-align: center;">
          <thead class="bg-warning">
          <tr>
            <td>ID</td>
            <td>Nombre Carrera</td>
            <td>Clave</td>
            <td>Acciones</td>
          </tr>
        </thead>
          @foreach ($carreras as $carrera)
            <tr>
              <td>{{$carrera->id}}</td>
              <td>{{$carrera->nombreCarrera}}</td>
              <td>{{$carrera->clave}}</td>
              <td>
               <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#carreraEdit{{$carrera->id}}">
                 Editar
               </button>
              </td>
            </tr>
<div class="modal fade" id="carreraEdit{{$carrera->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Carrera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-container">
            
              <form method="POST" action="{{ route('cc.update') }}"  role="form">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="POST">
              <input name="id" type="hidden" value="{{$carrera->id}}">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="nombreCarrera" id="nombre" class="form-control input-sm" value="{{$carrera->nombreCarrera}}">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="clave" id="clave" class="form-control input-sm" value="{{$carrera->clave}}">
                  </div>
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
      <div class="modal-footer">
        
      </div>
     
    </div>
  </div>
</div>
          @endforeach
        </table>
      </div>
    </div>
  </div>

<div class="modal fade" id="carreraCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Carrera</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-container">
            <form method="POST" action="{{route('cc.store')}}" >
              {{ csrf_field() }}
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="nombreCarrera" id="nombreCarrera" class="form-control input-sm" placeholder="Nombre de la carrera">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="clave" id="clave" class="form-control input-sm" placeholder="Clave">
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


@endsection
@section('scripts')
  <script src="{{ asset('plugins/BootstrapTable/js/bootstrap-table.min.js') }}"></script>
@endsection