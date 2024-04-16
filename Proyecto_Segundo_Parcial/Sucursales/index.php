<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.bootstrap5.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sucursales</title>
</head>
<body >
<?php
require '../Menu/header.php';
?>
    <div class="container">
        <div class="row">        
            <div class="col-md-12">
                <H2>ADMINISTRACIÓN DE SUCURSAL</H2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="lista_sucursal"class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Fecha</th>
                            <th>Activo</th>
                            <th>Usuario</th>
                            <th>Opciones</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
   <!-- //------------------------------------------------------ -->
       
<div class="modal fade" id ="ModalNuevo">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header"> <h4 class="modal-tittle">Sucursales | Nuevo Registro</h4>
         <button type="button" class="close" data-dismiss="modal" arial-label="true">
            <span arial-hidden="true">&times;</span>
         </button>
            </div>
                <div class="modal-body">
                    <form action="" method="post" id="persona">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" name="nombre " id="nombre" class="form-control" placeholder="Nombre">
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apPaterno">Direccion:</label>
                                    <input type="text" name="direccion " id="direccion" class="form-control" placeholder="Direccion">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="apMaterno">Telefono:</label>
                                    <input type="text" name="telefono " id="telefono" class="form-control" placeholder="Telefono">
                                </div>
                            </div>
                                   
                        </div>
                    </form>
             </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar </button>
                        <button type="button" id="btnGuardar" class="btn btn-danger" >Guardar </button>
                     </div>

                   
               
           
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    <script>
         $("#btnGuardar").click(function(){
   var nombre= $("#nombre").val();
   var direccion= $("#direccion").val();
   var telefono= $("#telefono").val();
   
  

   if(nombre == ""||direccion== ""||telefono ==""){
    Swal.fire({
  position: "top-end",
  icon: "warning",
  title: "Existen campos vacios",
  showConfirmButton: false,
  timer: 2000
});

   }else{
$.ajax({
    url:"insertar_sucursal.php",
    type:"POST",
    data:{
        nombre:nombre,
        direccion:direccion,
        telefono:telefono
       
    },
    success:function(response){
        if(response == "ok"){
            $("#ModalNuevo").modal("toggle");
            $("#nombre").val("");
            $("#direccion").val("");
            $("#telefono").val("");
            Swal.fire({
  position: "top-end",
  icon: "success",
  title: "Registro de Sucursal Insertado",
  showConfirmButton: false,
  timer: 2000
});
            var table= $("#lista_sucursal").dataTable().api();
            table.ajax.reload();
           
        }else{
            alert("ha ocurrido un error");
            console.log(response);
        }
    }
})
   }
   
    })
        
        
        $(document).ready(function(){
            tabla();
        });

        function tabla(){
            // $("#lista").dataTable().fnDestroy();
            $("#lista_sucursal").dataTable({
               "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
                },
        responsive: "true",
        dom: 'Bfrtilp',
        buttons:[
            {
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel">   Excel</i> ',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success'
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf">   PDF</i> ',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger'
            },
            {
                 extend: 'print',
                text: '<i class="fa fa-print">  IMPRIMIR</i> ',
             titleAttr: 'Imprimir',
                className: 'btn btn-warning'
            },
           
            {
            text:'<i class= "fa fa-plus-square"></i>  INSERTAR',
            classname:"btn btn-info",
            action: function(){
                lanzarmodal();
            },
            counter:1
        }
        ],
    

                "ajax":{
                    "type":"POST",
                    "url":"lista_sucursal.php",
                    "dataSrc":"",
                    "data":""
                },
                "columns":[
                    {
                        "data":"id"
                    },
                    {
                        "data":"nombre"
                    },
                    {
                        "data":"direccion"
                    },
                    {
                        "data":"telefono"
                    },
                    {
                        "data":"fechahora"
                    },
                    {
                        "data":"activo"
                    },
                    {
                        "data":"usuario"
                    },
                    {
                        "data":"opciones"
                    }
                ]
            });
        }
        function lanzarmodal(){
            $("#ModalNuevo").modal("show")
        }

        // Eliminacion simbolica de registros
        function eliminar(id){
            Swal.fire({
  title: "Eliminar este Registro?",
  text: "No Podras Recuperar este dato!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Aceptar",
  cancelButtonText: "Cancelar"
}).then((result) =>{
    if(result.isConfirmed){
        $.ajax({
                url:"Eliminar_sucursales.php",
                type:"POST",
                data:{
                    id:id
                },
                success: function(response){
                    if(response=="ok"){
                        Swal.fire({
  position: "top-end",
  icon: "success",
  title: "Registro de Sucursal Eliminado",
  showConfirmButton: false,
  timer: 2000
}).then(() =>{
        var table= $("#lista_sucursal").dataTable().api();
            table.ajax.reload();
    });
}else{
    Swal.fire({
      title: "Error!",
      text: "Ocurrio un error.",
      icon: "warning"
    });
}
 }
    });
    }
        });
           
        }



        // ---------------------------
        
    </script>
</body>
</html>