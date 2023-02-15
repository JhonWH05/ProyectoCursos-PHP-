$(document).on("ready", function(){
            listar();
        });

         var listar = function(){
            var table = $("#dt_notas").DataTable({
                "destroy":true,
                "ajax":{
                    "method": "GET",
                    "url":"../../modelos/listar/notas.php"
                },
                "columns":[
                {"data":"id_nota"},
                {"data":"id_alumno"},
                {"data":"id_curso"},
                {"data":"nota1"},
                {"data":"nota2"},
                {"data":"nota3"}
                ]
                
            });
         }
