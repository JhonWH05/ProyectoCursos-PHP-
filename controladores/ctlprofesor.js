
function validarguardar() 
{
	var id_profesor = $('#id_profesor').attr("value");
	var nombre = $('#nombre').attr("value");
    var apellido = $('#apellido').attr("value");
    var telefono = $('#telefono').attr("value");

    if (id_profesor == 0){
        alert("Debe ingresar un id");
	   $('#id_profesor').focus();
		return false;
    };
    if (nombre == 0){
        alert("Debe ingresar un nombre");
    	   $('#nombre').focus();
        return false;
    };
    if (apellido == 0){
        alert("Debe ingresar un apellido");
    	   $('#apellido').focus();
        return false;
    };
    if (telefono == 0){
        alert("Debe ingresar un telefono");
    	   $('#telefono').focus();
        return false;
    };
	guardardatos();
	
}

function validaractualizar() 
{
	var id_profesor = $('#id_profesor').attr("value");
	var nombre = $('#nombre').attr("value");
    var apellido = $('#apellido').attr("value");
    var telefono = $('#telefono').attr("value");

    if (id_profesor == 0){
        alert("Debe ingresar un id");
	   $('#id_profesor').focus();
		return false;
    };
    if (nombre == 0){
        alert("Debe ingresar un nombre");
    	   $('#nombre').focus();
        return false;
    };
    if (apellido == 0){
        alert("Debe ingresar un apellido");
    	   $('#apellido').focus();
        return false;
    };
    if (telefono == 0){
        alert("Debe ingresar un telefono");
    	   $('#telefono').focus();
        return false;
    };
	actualizarabono();
}

function validarbuscar() {

	var id_profesor = $('#id_profesor').attr("value");
	
	if (id_profesor == 0) {

		alert("Debe ingresar un id");
		$('#id_profesor').focus();
		return false;
	};
	buscarabono();
}

function validareliminar(){	
		var id_profesor = $('#id_profesor').attr("value");
		
		if(id_profesor == 0)
		{
			alert("Ingrese un id");
			$('#id_profesor').focus();
			return false;
		};
		eliminarabono();
	} 
function guardardatos(){
	
	var id_profesor = $('#id_profesor').attr("value");
	var nombre = $('#nombre').attr("value");
    var apellido = $('#apellido').attr("value");
    var telefono = $('#telefono').attr("value");
  		 
	var dataString = 'id_profesor='+id_profesor +'&nombre='+nombre +'&apellido='+apellido +'&telefono='+telefono;

 
	    $.ajax({          
			    	type: "GET",          
			    	url: "../../modelos/guardar/profesor.php",          
			    	data: dataString,   
                    success: function (response) 
					{
						$('#mensaje').html(response);
						var result = jQuery.parseJSON(response);
						//alert(result[0].respuesta);
						if(result[0].respuesta == 1)
						{ alert ('El profesor se ha guadardo correctamente');				
							
						}
						else if(result[0].respuesta == -1)
						{
							alert ('el profesor ya esta registrado ');
						}
						else
						{
							alert ('Error al guardar');
						}
                    }
              });
                       	  
	}

	function actualizarabono(){
	
	var id_profesor = $('#id_profesor').attr("value");
	var nombre = $('#nombre').attr("value");
    var apellido = $('#apellido').attr("value");
    var telefono = $('#telefono').attr("value");
  		 
	var dataString = 'id_profesor='+id_profesor +'&nombre='+nombre +'&apellido='+apellido +'&telefono='+telefono;
  
  		 $.ajax({          
			    	type: "GET",          
			    	url: "../../modelos/actualizar/profesor.php",          
			    	data: dataString,   	
                    success: function (response) 
					{
						$('#mensaje').html(response);
						var result = jQuery.parseJSON(response);
						if(result[0].respuesta == 1)
						{ alert ('El profesor se actualizó');				
							$('#id_profesor').attr("value");
						}
						else if(result[0].respuesta == -1)
						{
							alert ('El profesor no existe');
						}
						else
						{
							alert ('Error al actualizar');
						}
                    }
              });
}
function buscarabono(){

		var id_profesor = $('#id_profesor').attr("value");
		var dataString = 'id_profesor='+id_profesor;

			 $.ajax({          
			    	type: "GET",          
			    	url: "../../modelos/buscar/profesor.php",          
			    	data: dataString,   	
                    success: function (response) 
					{
						$('#mensaje').html(response);
						var result = jQuery.parseJSON(response);
						if(result[0].respuesta == 1){
						 //alert ('Se encontró un resultado');	
					    $('#nombre').attr("value",result[0].nombre);
					    $('#apellido').attr("value",result[0].apellido);
					    $('#telefono').attr("value",result[0].telefono);
						}
						else if(result[0].respuesta == -1)
						{
							alert ('Este profesor no existe');
										
						}
						
                    }
              });
		}
		function eliminarabono(){
			//alert("para saber que entro a guardar datos1234");
		var id_profesor= $('#id_profesor').attr("value");	
		var dataString = 'id_profesor='+id_profesor;

		 $.ajax({          
					 type: "GET",          
					 url: "../../modelos/eliminar/profesor.php",          
					 data: dataString,   
					 success: function (response) 
					 {
						 $('#mensaje').html(response);
						 var result = jQuery.parseJSON(response);
						 if(result[0].respuesta == 1){
						  alert ('Se elimino el profesor');				
							 $('#id_profesor').attr("value", "");
							 $('#nombre').attr("value", "");
						   	 $('#apellido').attr("value", "");
						   	 $('#telefono').attr("value", "");
						 }
						 else if(result[0].respuesta == -1)
						 {
							 alert('El profesor no existe');
						 }
						 else
						 {
							 alert ('Error al eliminar datos');
						 }
					 }
			   });
							  
	 }

	