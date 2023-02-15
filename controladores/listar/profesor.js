$(document).on("ready", function(){
            listar();
        });

         var listar = function(){
            var table = $("#dt_profesor").DataTable({
                "destroy":true,
                "ajax":{
                    "method": "GET",
                    "url":"../../modelos/listar/profesor.php"
                },
                "columns":[
                {"data":"id_profesor"},
                {"data":"nombre"},
                {"data":"apellido"},
                {"data":"telefono"}
                ]
                
            });
         }
