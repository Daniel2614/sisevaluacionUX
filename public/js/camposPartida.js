//Validaciones de campos 
//Función para guardar las validaciones de cada campo
function atributos(){
	//Asignar atributos al cargar la página
	$("input[name*='descripcion[]']").attr({'data-validation': "length", 'data-validation-length': "min3"});
	$("input[name*='observaciones[]']").attr({'data-validation': "length", 'data-validation-length': "min3"});
	$("input[name*='articulo[]']").attr({'data-validation': "length", 'data-validation-length': "min3"});
	//$("input[name*='unidadMedida[]']").attr({'data-validation': "length", 'data-validation-length': "min2"});
	$("input[name*='cantidadAnual[]']").attr({'data-validation':"custom",'data-validation': "length", 'data-validation-length': "min1",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeyup': "cantAnual($(this))"});
	$("input[name*='costoUnitario[]']").attr({"placeholder":"$0.00", 'data-validation':"custom",'data-validation': "length", 'data-validation-length': "min1",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeyup': "costUni($(this))", 'onchange': "opeMes($(this))"});
	$("input[name*='costoAnual[]']").attr({"readonly": 'true',"placeholder":"$0.00", 'data-validation': "length", 'data-validation-length': "min1"});
	$("input[name*='importeAnual[]']").attr({"readonly": 'true',"placeholder":"$0.00", 'data-validation': "length", 'data-validation-length': "min1"});
	$("input[name*='concepto[]']").attr({'data-validation': "length", 'data-validation-length': "min3"});
	$("input[name*='familia[]']").attr({'data-validation': "length", 'data-validation-length': "min3"});
	$("input[name*='noVehiculos[]']").attr({'data-validation': "length", 'data-validation-length': "min1"});
	$("input[name*='tipoProducto[]']").attr({'data-validation': "length", 'data-validation-length': "min3"});
	//$("input[name*='ubicacion[]']").attr({'data-validation': "length", 'data-validation-length': "min3"});
	$("input[name*='tipoServicio[]']").attr({'data-validation': "length", 'data-validation-length': "min3"});
	$("input[name*='noUnidades[]']").attr({'data-validation': "length", 'data-validation-length': "min1"});
	$("input[name*='noPlazas[]']").attr({'data-validation': "length", 'data-validation-length': "min1"});
	$("input[name*='nivel[]']").attr({'data-validation': "length", 'data-validation-length': "min1"});
	$("input[name*='cargoCom[]']").attr({'data-validation': "length", 'data-validation-length': "min1"});
	$("input[name*='objCom[]']").attr({'data-validation': "length", 'data-validation-length': "min1"});
	$("input[name*='diasCom[]']").attr({'data-validation': "length", 'data-validation-length': "min1"});
	$("input[name*='tarifaDiaria[]']").attr({"placeholder":"$0.00", 'data-validation': "length", 'data-validation-length': "min1"});
	$("input[name*='ene[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='feb[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='mar[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='abr[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='may[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='jun[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='jul[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='ago[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='sep[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='oct[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='nov[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});
	$("input[name*='dic[]']").attr({"placeholder":"$0.00",'onKeypress':"if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;", 'onkeydown': "opeMes($(this))", 'onkeyup': "validacion($(this))", 'class': "form-control  mes"});

	

	/*$.validate({
    lang: 'es'
  	});*/
}

//Se cargan la función de "atributos" y la traducción del texto
$(document).ready(function(){
    atributos();
	
});

//Se ejecuta función de "atributos" al precionar el boton de "nueva fila"
$(".agregarFila").click(function(){
	tablaJ();
	atributos();

	
});