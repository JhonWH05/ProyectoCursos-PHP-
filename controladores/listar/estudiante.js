$(document).on("ready", function(){
            listar();
        });

         var listar = function(){
            var table = $("#dt_estudiante").DataTable({
                "destroy":true,
                "ajax":{
                    "method": "GET",
                    "url":"../../modelos/listar/estudiante.php"
                },
                "columns":[
                {"data":"id"},
                {"data":"nombre"},
                {"data":"apellido"},
                {"data":"telefono"},
                {"data":"email"}
                ]
                
            });
         }
