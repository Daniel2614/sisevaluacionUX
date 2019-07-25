var btnSpiner = '<button type="button" id="btnSpiner" class="btn btn-dark" disabled ><i class="fa fa-spinner fa-spin"></i> Procesando orden</button>'; 

function buttomModal(id, nameBtn){
	btn ='<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>';
	btn += '<button type="button" class="btn btn-dark" id="'+id+'">'+nameBtn+'</button>';

	return btn;
}