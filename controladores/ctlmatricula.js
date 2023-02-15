
function validarguardarm() 
{
	var codigo = $('#codigo').attr("value");
	var valor = $('#valor').attr("value");
    var plan = $('#plan').attr("value");
    var id_estu = $('#id_estu').attr("value");
    

    if (codigo == 0){
        alert("Debe ingresar un codigo");
	   $('#codigo').focus();
		return false;
    };
    if (valor == 0){
        alert("Debe ingresar un valor");
    	   $('#valor').focus();
        return false;
    };
    if (plan == 0){
        alert("Seleccione un plan");
    	   $('#plan').focus();
        return false;
    };
    if (id_estu == 0){
        alert("Seleccione un estudiante");
    	   $('#id_estu').focus();
        return false;
    };
   
	guardardatos();
	
}

function validaractualizarm() 
{
	var codigo = $('#codigo').attr("value");
	var valor = $('#valor').attr("value");
    var plan = $('#plan').attr("value");
    var id_estu = $('#id_estu').attr("value");
    
   
    if (codigo == 0){
        alert("Debe ingresar un codigo");
	   $('#codigo').focus();
		return false;
    };
    if (valor == 0){
        alert("Debe ingresar un valor");
    	   $('#valor').focus();
        return false;
    };
    if (plan == 0){
        alert("Seleccione un plan");
    	   $('#plan').focus();
        return false;
    };
    if (id_estu == 0){
        alert("Seleccione un estudiante");
    	   $('#id_estu').focus();
        return false;
    };
   
	actualizarmatricula();
}

function validarbuscarm() {

	var codigo = $('#codigo').attr("value");
	
	if (codigo == 0) {

		alert("Debe ingresar un codigo");
		$('#codigo').focus();
		return false;
	};
	buscaramatricula();
}

function validareliminarm(){	
		var codigo = $('#codigo').attr("value");
		
		if(codigo == 0)
		{
			alert("Ingrese un codigo");
			$('#codigo').focus();
			return false;
		};
		eliminarmatricula();
	} 
function guardardatos(){
	
	var codigo = $('#codigo').attr("value");
	var valor = $('#valor').attr("value");
    var plan = $('#plan').attr("value");
    var id_estu = $('#id_estu').attr("value");
   
  		 
	var dataString = 'codigo='+codigo +'&valor='+valor +'&plan='+plan +'&id_estu='+id_estu;

 
	    $.ajax({          
			    	type: "GET",          
			    	url: "../../modelos/guardar/matricula.php",           
			    	data: dataString,   
                    success: function (response) 
					{
						$('#mensaje').html(response);
						var result = jQuery.parseJSON(response);
						//alert(result[0].respuesta);
						if(result[0].respuesta == 1)
						{ alert ('La matricula se guardó correctamente');				
							
						}
						else if(result[0].respuesta == -1)
						{
							alert ('Matricula ya esta registrada ');
						}
						else
						{
							alert ('Error al guardar');
						}
                    }
              });
                       	  
	}

	function actualizarmatricula(){
	
	var codigo = $('#codigo').attr("value");
	var valor = $('#valor').attr("value");
    var plan = $('#plan').attr("value");
    var id_estu = $('#id_estu').attr("value");
  		 
	var dataString = 'codigo='+codigo +'&valor='+valor +'&plan='+plan +'&id_estu='+id_estu;
  
  		 $.ajax({          
			    	type: "GET",          
			    	url: "../../modelos/actualizar/matricula.php",            
			    	data: dataString,   	
                    success: function (response) 
					{
						$('#mensaje').html(response);
						var result = jQuery.parseJSON(response);
						if(result[0].respuesta == 1)
						{ alert ('El estudiante se actualizó');				
							$('#codigo').attr("value");
						}
						else if(result[0].respuesta == -1)
						{
							alert ('El estudiante no existe');
						}
						else
						{
							alert ('Error al actualizar');
						}
                    }
              });
}
function buscaramatricula(){

		var codigo = $('#codigo').attr("value");
		var dataString = 'codigo='+codigo;

			 $.ajax({          
			    	type: "GET",          
			    	url: "../../modelos/buscar/matricula.php",          
			    	data: dataString,   	
                    success: function (response) 
					{
						$('#mensaje').html(response);
						var result = jQuery.parseJSON(response);
						if(result[0].respuesta == 1){
							
					    $('#valor').attr("value",result[0].valor);
					    $('#plan').attr("value",result[0].plan);
					    $('#id_estu').attr("value",result[0].id_estu);
						}
						else if(result[0].respuesta == -1)
						{
									
						}
						
                    }
              });
		}
		function eliminarmatricula(){
			//alert("para saber que entro a guardar datos1234");
	var codigo= $('#codigo').attr("value");	
	var dataString = 'codigo='+codigo;

		 $.ajax({          
					 type: "GET",          
					 url: "../../modelos/eliminar/matricula.php",           
					 data: dataString,   
					 success: function (response) 
					 {
						 $('#mensaje').html(response);
						 var result = jQuery.parseJSON(response);
						 if(result[0].respuesta == 1){
						  alert ('Se elimino la matricula');				
							 $('#codigo').attr("value", "");
							 $('#valor').attr("value", "");
						     $('#plan').attr("value", "");
						     $('#id_estu').attr("value", "");
						 }
						 else if(result[0].respuesta == -1)
						 {
							 alert('La matricula no existe');
						 }
						 else
						 {
							 alert ('Error al eliminar datos');
						 }
					 }
			   });
							  
	 }

	