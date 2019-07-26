@extends('template.main')

@section('title')
    Criterios de Evaluacion
@endsection
@section('content')

  <div class="card">
    <div class="card-header ">
      Tabla Categoria y Criterios
      <div style="float: right"> 
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#criteriosCreate">
  Añadir Criterios
</button>
      </div>
    </div>
    <div class="card-body">
      
      <div class="table-responsive">

        <table class="table table-bordered" style="text-align: center;">
          <thead class="bg-warning">
          <tr>
            <td>ID</td>
            <td>Categoria</td>
            <td>Aspecto a Evaluar</td>
            <td>Acciones</td>
          </tr>
        </thead>
          @foreach ($criterios as $criterio)
            <tr>
              <td>{{$criterio->id}}</td>
              <td>{{$criterio->categoria}}</td>
              <td>{{$criterio->aspectoEvaluar}}</td>
              <td>
               <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#criterioEdit{{$criterio->id}}">
                 Editar
               </button>
              </td>
            </tr>
<div class="modal fade" id="criterioEdit{{$criterio->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Criterio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-container">
            
              <form method="POST" action="{{ route('c.update') }}"  role="form">
              {{ csrf_field() }}
              <input name="_method" type="hidden" value="POST">
              <input name="id" type="hidden" value="{{$criterio->id}}">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="categoria" id="nombre" class="form-control input-sm" value="{{$criterio->categoria}}">
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="form-group">
                    <input type="text" name="aspectoEvaluar" id="aspectoEvaluar" class="form-control input-sm" value="{{$criterio->aspectoEvaluar}}">
                  </div>
                </div>
               
                </div>
              </div>  
              <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <input type="submit"  value="Actualizar" class="btn btn-success btn-block">
                  <a href="{{ route('criteriosc') }}" class="btn btn-info btn-block" >Atrás</a>
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

<div class="modal fade" id="criteriosCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Criterio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-container">
            <form method="POST" action="{{route('c.store')}}" >
              {{ csrf_field() }}
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <input type="text" name="categoria" id="categoria" class="form-control input-sm" placeholder="Categoria">
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                   <!--  <input type="text" name="aspectoEvaluar" id="aspectoEvaluar" class="form-control input-sm" placeholder="Aspectos a Evaluar"> -->
                    <textarea name="aspectoEvaluar" id="aspectoEvaluar" class="form-control input-sm" placeholder="Aspectos a Evaluar" rows="8"></textarea>
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