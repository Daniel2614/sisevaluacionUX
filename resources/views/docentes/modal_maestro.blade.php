<div class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalOrden">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header justify-content-center" style="background-color: #4fa8bc;">
                <h4 class="modal-title  text-white" style="font-weight: bold;"><i class="fas fa-file-export"></i> </h4>
            </div>
        <div class="modal-body">
            <input type="hidden" id="idOrden">
            <div class="form-group row">
                <div class="col-md">
                    <label>Nombre Completo</label>
                    <input type="text" class="form-control" disabled id="nombre">
                </div>
                <div class="col-md">
                    <label>Primer Apellido</label>
                    <input type="text" class="form-control" disabled id="apPaterno">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md">
                    <label>Segundo Apellido</label>
                    <input type="text" class="form-control" disabled id="apMaterno">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="btnAsignarOrden">Guardar</button>
        </div>
        </div>
    </div>
</div>