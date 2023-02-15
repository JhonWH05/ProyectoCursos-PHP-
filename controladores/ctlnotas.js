
function guardarnota() 
{
    var id_nota = $('#id_nota').attr("value");
    var id_alumno = $('#id_alumno').attr("value");
    var id_curso = $('#id_curso').attr("value");
    var nota1 = $('#nota1').attr("value");
    var nota2 = $('#nota2').attr("value");
    var nota3 = $('#nota3').attr("value");
        

    if (id_nota == 0){
        alert("Debe ingresar una id");
       $('#id_nota').focus();
        return false;
    };
    if (id_alumno == 0){
        alert("Debe ingresar identificacion del alumno");
           $('#id_alumno').focus();
        return false;
    };
     if (id_curso == 0){
        alert("Debe ingresar un id del curso");
           $('#id_curso').focus();
        return false;
    };    
      if (nota1 == 0){
        alert("Debe ingresar la nota1 ");
       $('#nota1').focus();
        return false;
    };
    if (nota2 == 0){
        alert("Debe ingresar la nota2");
           $('#nota2').focus();
        return false;
    };
     if (nota3 == 0){
        alert("Debe ingresar la nota3");
           $('#nota3').focus();
        return false;
    };   
   
   
    guardardatos();
    
}

function actualizarnotas() 
{
    var id_nota = $('#id_nota').attr("value");
    var id_alumno = $('#id_alumno').attr("value");
    var id_curso = $('#id_curso').attr("value");
    var nota1 = $('#nota1').attr("value");
    var nota2 = $('#nota2').attr("value");
    var nota3 = $('#nota3').attr("value");
        

    if (id_nota == 0){
        alert("Debe ingresar una id");
       $('#id_nota').focus();
        return false;
    };
    if (id_alumno == 0){
        alert("Debe ingresar identificacion del alumno");
           $('#id_alumno').focus();
        return false;
    };
     if (id_curso == 0){
        alert("Debe ingresar un id del curso");
           $('#id_curso').focus();
        return false;
    };    
      if (nota1 == 0){
        alert("Debe ingresar la nota1 ");
       $('#nota1').focus();
        return false;
    };
    if (nota2 == 0){
        alert("Debe ingresar la nota2");
           $('#nota2').focus();
        return false;
    };
     if (nota3 == 0){
        alert("Debe ingresar la nota3");
           $('#nota3').focus();
        return false;
    };   
    actualizardatos();
}

function buscarnotas() {

    var id_nota = $('#id_nota').attr("value");
    
    if (id_nota == 0) {

        alert("Debe ingresar un id");
        $('#id_nota').focus();
        return false;
    };
    buscardatos();
}

function eliminarnotas(){  
        var id_nota = $('#id_nota').attr("value");
        
        if(id_nota == 0)
        {
            alert("Ingrese un id");
            $('#id_nota').focus();
            return false;
        };
        eliminardatos();
    } 


function guardardatos(){
    
    var id_nota = $('#id_nota').attr("value");
    var id_alumno = $('#id_alumno').attr("value");
    var id_curso = $('#id_curso').attr("value");
    var nota1 = $('#nota1').attr("value");
    var nota2 = $('#nota2').attr("value");
    var nota3 = $('#nota3').attr("value");
         
    var dataString = 'id_nota='+id_nota +'&id_alumno='+id_alumno +'&id_curso='+id_curso+'&nota1='+nota1+'&nota2='+nota2+'&nota3='+nota3;

 
        $.ajax({          
                    type: "GET",          
                    url: "../../modelos/guardar/notas.php",        
                    data: dataString,   
                    success: function (response) 
                    {
                        $('#mensaje').html(response);
                        var result = jQuery.parseJSON(response);
                        //alert(result[0].respuesta);
                        if(result[0].respuesta == 1)
                        { alert ('La nota se ha guardado correctamente');             
                            
                        }
                        else if(result[0].respuesta == -1)
                        {
                            alert ('Ya existe este id de nota ingrese otro ');
                        }
                        else
                        {
                            alert ('Error al guardar');
                        }
                    }
              });
                          
    }

    function actualizardatos(){
    var id_nota = $('#id_nota').attr("value");
    var id_alumno = $('#id_alumno').attr("value");
    var id_curso = $('#id_curso').attr("value");
    var nota1 = $('#nota1').attr("value");
    var nota2 = $('#nota2').attr("value");
    var nota3 = $('#nota3').attr("value");
         
    var dataString = 'id_nota='+id_nota +'&id_alumno='+id_alumno +'&id_curso='+id_curso +'&nota1='+nota1 +'&nota2='+nota2 +'&nota3='+nota3;

  
         $.ajax({          
                    type: "GET",          
                    url: "../../modelos/actualizar/notas.php",          
                    data: dataString,       
                    success: function (response) 
                    {
                        $('#mensaje').html(response);
                        var result = jQuery.parseJSON(response);
                        if(result[0].respuesta == 1)
                        { alert ('La nota se actualizó');             
                            $('#id_nota').attr("value");
                        }
                        else if(result[0].respuesta == -1)
                        {
                            alert (' no existe');
                        }
                        else
                        {
                            alert ('Error al actualizar');
                        }
                    }
              });
}
function buscardatos(){

        var id_nota = $('#id_nota').attr("value");
        var dataString = 'id_nota='+id_nota;

             $.ajax({          
                    type: "GET",          
                    url: "../../modelos/buscar/notas.php",          
                    data: dataString,       
                    success: function (response) 
                    {
                        $('#mensaje').html(response);
                        var result = jQuery.parseJSON(response);
                        if(result[0].respuesta == 1){
                          
                        $('#id_alumno').attr("value",result[0].id_alumno);
                        $('#id_curso').attr("value",result[0].id_curso);
                        $('#nota1').attr("value",result[0].nota1);
                        $('#nota2').attr("value",result[0].nota2);
                        $('#nota3').attr("value",result[0].nota3);
                        
                        
                        }
                        else if(result[0].respuesta == -1)
                        {
                            alert ('no existe');
                          
                                     
                        }
                        
                    }
              });
        }

        function eliminardatos(){
            //alert("para saber que entro a guardar datos1234");
          var id_nota= $('#id_nota').attr("value"); 
          var dataString = 'id_nota='+id_nota;

         $.ajax({          
                     type: "GET",          
                     url: "../../modelos/eliminar/notas.php",          
                     data: dataString,   
                     success: function (response) 
                     {
                         $('#mensaje').html(response);
                         var result = jQuery.parseJSON(response);
                         if(result[0].respuesta == 1){
                          alert ('Se elimino las nota');               
                        $('#id_alumno').attr("value", "");
                        $('#id_curso').attr("value", "");                       
                        $('#nota1').attr("value", "");
                        $('#nota2').attr("value", "");
                        $('#nota3').attr("value", "");
                             
                         }
                         else if(result[0].respuesta == -1)
                         {
                             alert('no existe');
                         }
                         else
                         {
                             alert ('Error al eliminar datos');
                         }
                     }
               });
                              
     }

    