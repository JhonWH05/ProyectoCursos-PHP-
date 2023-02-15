
function guardarcurso() 
{
    var id_curso = $('#id_curso').attr("value");
    var nombre_curso = $('#nombre_curso').attr("value");
    var id_prof = $('#id_prof').attr("value");
        

    if (id_curso == 0){
        alert("Debe ingresar una id del curso a guardar");
       $('#id_curso').focus();
        return false;
    };
    if (nombre_curso == 0){
        alert("Debe ingresar un nombre del curso");
           $('#nombre_curso').focus();
        return false;
    };
     if (id_prof == 0){
        alert("Debe ingresar un id de prof");
           $('#id_prof').focus();
        return false;
    };    
   
   
    guardardatos();
    
}

function actualizarcurso() 
{
    var id_curso = $('#id_curso').attr("value");
    var nombre_curso = $('#nombre_curso').attr("value");
    var id_prof = $('#id_prof').attr("value");
        

    if (id_curso == 0){
        alert("Debe ingresar una id del curso a guardar");
       $('#id_curso').focus();
        return false;
    };
    if (nombre_curso == 0){
        alert("Debe ingresar un nombre del curso");
           $('#nombre_curso').focus();
        return false;
    };
     if (id_prof == 0){
        alert("Debe ingresar un id de prof");
           $('#id_prof').focus();
        return false;
    };
    actualizarcurso();
}

function buscarcurso() {

    var id_curso = $('#id_curso').attr("value");
    
    if (id_curso == 0) {

        alert("Debe ingresar un id");
        $('#id_curso').focus();
        return false;
    };
    buscarcurso();
}

function eliminarcurso(){  
        var id_curso = $('#id_curso').attr("value");
        
        if(id_curso == 0)
        {
            alert("Ingrese un id");
            $('#id_curso').focus();
            return false;
        };
        eliminarcurso();
    } 
function guardardatos(){
    
    var id_curso = $('#id_curso').attr("value");
    var nombre_curso = $('#nombre_curso').attr("value");
    var id_prof = $('#id_prof').attr("value");
         
    var dataString = 'id_curso='+id_curso +'&nombre_curso='+nombre_curso +'&id_prof='+id_prof;

 
        $.ajax({          
                    type: "GET",          
                    url: "../../modelos/guardar/curso.php",        
                    data: dataString,   
                    success: function (response) 
                    {
                        $('#mensaje').html(response);
                        var result = jQuery.parseJSON(response);
                        //alert(result[0].respuesta);
                        if(result[0].respuesta == 1)
                        { alert ('El curso se ha guadardo correctamente');             
                            
                        }
                        else if(result[0].respuesta == -1)
                        {
                            alert ('el curso ya esta registrado ');
                        }
                        else
                        {
                            alert ('Error al guardar');
                        }
                    }
              });
                          
    }

    function actualizarcurso(){
    
    var id_curso = $('#id_curso').attr("value");
    var nombre_curso = $('#nombre_curso').attr("value");
    var id_prof = $('#id_prof').attr("value");

    var dataString = 'id_curso='+id_curso +'&nombre_curso='+nombre_curso +'&id_prof='+id_prof;
  
         $.ajax({          
                    type: "GET",          
                    url: "../../modelos/actualizar/curso.php",          
                    data: dataString,       
                    success: function (response) 
                    {
                        $('#mensaje').html(response);
                        var result = jQuery.parseJSON(response);
                        if(result[0].respuesta == 1)
                        { alert ('El curso se actualizó');             
                            $('#codigo').attr("value");
                        }
                        else if(result[0].respuesta == -1)
                        {
                            alert ('El curso no existe');
                        }
                        else
                        {
                            alert ('Error al actualizar');
                        }
                    }
              });
}
function buscarcurso(){

        var id_curso = $('#id_curso').attr("value");
        var dataString = 'id_curso='+id_curso;

             $.ajax({          
                    type: "GET",          
                    url: "../../modelos/buscar/curso.php",          
                    data: dataString,       
                    success: function (response) 
                    {
                        $('#mensaje').html(response);
                        var result = jQuery.parseJSON(response);
                        if(result[0].respuesta == 1){
                         //alert ('Se encontró un resultado');    
                        $('#nombre_curso').attr("value",result[0].nombre_curso);
                        $('#id_prof').attr("value",result[0].id_prof);
                        
                        }
                        else if(result[0].respuesta == -1)
                        {
                            alert ('Este curso no existe');
                            $('#nombre_curso').attr("value",result[0].nombre_curso);
                            $('#id_prof').attr("value",result[0].id_prof);
                                     
                        }
                        
                    }
              });
        }

        function eliminarcurso(){
            //alert("para saber que entro a guardar datos1234");
          var id_curso= $('#id_curso').attr("value"); 
          var dataString = 'id_curso='+id_curso;

         $.ajax({          
                     type: "GET",          
                     url: "../../modelos/eliminar/curso.php",          
                     data: dataString,   
                     success: function (response) 
                     {
                         $('#mensaje').html(response);
                         var result = jQuery.parseJSON(response);
                         if(result[0].respuesta == 1){
                          alert ('Se elimino el curso');               
                             $('#id_curso').attr("value", "");
                             $('#nombre_curso').attr("value", "");
                             $('#id_prof').attr("value", "");
                             
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

    