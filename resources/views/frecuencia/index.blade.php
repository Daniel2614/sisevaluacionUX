@extends('template.main')

@section('title')
    Criterios de Evaluacion
@endsection
@section('content')

  <div class="card">
    <div class="card-header ">
      Tabla Categoria y Criterios
      <div style="float: right"> 
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#frecuenciasCreate">
  Añadir Frecuencia
</button>
      </div>
    </div>
    <div class="card-body">
      
      <div class="table-responsive">

        <table class="table table-bordered" style="text-align: center;">
          <thead class="bg-warning">
          <tr>
            <td>ID</td>
            <td>Frecuencia</td>
            <td>Puntaje</td>
            <td>Acciones</td>
          </tr>
        </thead>
          @foreach ($frecuencias as $frecuencia)
            <tr>
              <td>{{$frecuencia->id}}</td>
              <td>{{$frecuencia->frecuencia}}</td>
              <td>{{$frecuencia->puntaje}}</td>
              <td>
               <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#frecuenciasEdit{{$frecuencia->id}}">
                 Editar
               </button>
              </td>
            </tr>
<div class="modal fade" id="frecuenciasEdit{{$frecuencia->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Frecuencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-container">
            
              <form method="POST" action="{{ route('f.update') }}"  role="form">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="POST">
              <input name="id" type="hidden" value="{{$frecuencia->id}}">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="frecuencia" id="nombre" class="form-control input-sm" value="{{$frecuencia->frecuencia}}">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="puntaje" id="puntaje" class="form-control input-sm" value="{{$frecuencia->puntaje}}">
                  </div>
                </div>
               
                </div>
              </div>  
              <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
                  <a href="{{ route('frecuenciasf') }}" class="btn btn-info btn-block" >Atrás</a>
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

<div class="modal fade" id="frecuenciasCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Frecuencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-container">
            <form method="POST" action="{{route('f.store')}}" >
              {{ csrf_field() }}
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="frecuencia" id="frecuencia" class="form-control input-sm" placeholder="Frecuencia">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="number" name="puntaje" id="puntaje" class="form-control input-sm" placeholder="Puntaje">
                    <!-- <textarea name="aspectoEvaluar" id="aspectoEvaluar" class="form-control input-sm" placeholder="Aspectos a Evaluar" rows="8"></textarea> -->
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