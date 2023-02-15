$(document).on("ready", function(){
            listar();
        });

         var listar = function(){
            var table = $("#dt_matricula").DataTable({
                "destroy":true,
                "ajax":{
                    "method": "GET",
                    "url":"../../modelos/listar/matricula.php"
                },
                "columns":[
                {"data":"codigo"},
                {"data":"valor"},
                {"data":"plan"},
                {"data":"id_estu"}
                
                ]
                
            });
         }
