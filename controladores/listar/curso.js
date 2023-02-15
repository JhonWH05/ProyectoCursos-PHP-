$(document).on("ready", function(){
            listar();
        });

         var listar = function(){
            var table = $("#dt_curso").DataTable({
                "destroy":true,
                "ajax":{
                    "method": "GET",
                    "url":"../../modelos/listar/curso.php"
                },
                "columns":[
                {"data":"id_curso"},
                {"data":"nombre_curso"},
                {"data":"id_prof"}                
                ]
                
            });
         }
