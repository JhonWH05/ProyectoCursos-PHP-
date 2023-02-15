
function guardarestudiante() 
{
	var id = $('#id').attr("value");
	var nombre = $('#nombre').attr("value");
    var apellido = $('#apellido').attr("value");
    var telefono = $('#telefono').attr("value");
    var email = $('#email').attr("value");
    

    if (id == 0){
        alert("Debe ingresar una identificacion");
	   $('#id').focus();
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
    if (email == 0){
        alert("Debe ingresar un email");
    	   $('#email').focus();
        return false;
    };
   
   
	guardardatos();
	
}

function actualizarestudiante() 
{
	var id = $('#id').attr("value");
	var nombre = $('#nombre').attr("value");
    var apellido = $('#apellido').attr("value");
    var telefono = $('#telefono').attr("value");
    var email = $('#email').attr("value");
    

    if (id == 0){
        alert("Debe ingresar una identificacion");
	   $('#id').focus();
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
    if (email == 0){
        alert("Debe ingresar un email");
    	   $('#email').focus();
        return false;
    };
	actualizarestudiante();
}

function buscarestudiante() {

	var id = $('#id').attr("value");
	
	if (id == 0) {

		alert("Debe ingresar un id");
		$('#id').focus();
		return false;
	};
	buscarabono();
}

function eliminarestudiante(){	
		var id = $('#id').attr("value");
		
		if(id == 0)
		{
			alert("Ingrese un id");
			$('#id').focus();
			return false;
		};
		eliminarabono();
	} 
function guardardatos(){
	
	var id = $('#id').attr("value");
	var nombre = $('#nombre').attr("value");
    var apellido = $('#apellido').attr("value");
    var telefono = $('#telefono').attr("value");
    var email = $('#email').attr("value");
  		 
	var dataString = 'id='+id +'&nombre='+nombre +'&apellido='+apellido +'&telefono='+telefono +'&email='+email;

 
	    $.ajax({          
			    	type: "GET",          
			    	url: "../../modelos/guardar/estudiante.php",        
			    	data: dataString,   
                    success: function (response) 
					{
						$('#mensaje').html(response);
						var result = jQuery.parseJSON(response);
						//alert(result[0].respuesta);
						if(result[0].respuesta == 1)
						{ alert ('El estudiante se ha guadardo correctamente');				
							
						}
						else if(result[0].respuesta == -1)
						{
							alert ('el estudiante ya esta registrado ');
						}
						else
						{
							alert ('Error al guardar');
						}
                    }
              });
                       	  
	}

	function actualizarestudiante(){
	
	var id = $('#id').attr("value");
	var nombre = $('#nombre').attr("value");
    var apellido = $('#apellido').attr("value");
    var telefono = $('#telefono').attr("value");
    var email = $('#email').attr("value");
  		 
	var dataString = 'id='+id +'&nombre='+nombre +'&apellido='+apellido +'&telefono='+telefono +'&email='+email;
  
  		 $.ajax({          
			    	type: "GET",          
			    	url: "../../modelos/actualizar/estudiante.php",          
			    	data: dataString,   	
                    success: function (response) 
					{
						$('#mensaje').html(response);
						var result = jQuery.parseJSON(response);
						if(result[0].respuesta == 1)
						{ alert ('El estudiante se actualizó');				
							$('#id').attr("value");
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
function buscarabono(){

		var id = $('#id').attr("value");
		var dataString = 'id='+id;

			 $.ajax({          
			    	type: "GET",          
			    	url: "../../modelos/buscar/estudiante.php",          
			    	data: dataString,   	
                    success: function (response) 
					{
						$('#mensaje').html(response);
						var result = jQuery.parseJSON(response);
						if(result[0].respuesta == 1){
						
					    $('#nombre').attr("value",result[0].nombre);
					    $('#apellido').attr("value",result[0].apellido);
					    $('#telefono').attr("value",result[0].telefono);
					    $('#email').attr("value",result[0].email);
						}
						else if(result[0].respuesta == -1)
						{
							alert ('Este estudiante no existe');
								
						}
						
                    }
              });
		}
		function eliminarabono(){
			//alert("para saber que entro a guardar datos1234");
	var id= $('#id').attr("value");	
	var dataString = 'id='+id;

		 $.ajax({          
					 type: "GET",          
					 url: "../../modelos/eliminar/estudiante.php",          
					 data: dataString,   
					 success: function (response) 
					 {
						 $('#mensaje').html(response);
						 var result = jQuery.parseJSON(response);
						 if(result[0].respuesta == 1){
						  alert ('Se elimino el estudiante');				
							 $('#id').attr("value", "");
							 $('#nombre').attr("value", "");
						     $('#apellido').attr("value", "");
						     $('#telefono').attr("value", "");
						     $('#email').attr("value", "");
						 }
						 else if(result[0].respuesta == -1)
						 {
							 alert('El estudiante no existe');
						 }
						 else
						 {
							 alert ('Error al eliminar datos');
						 }
					 }
			   });
							  
	 }

	