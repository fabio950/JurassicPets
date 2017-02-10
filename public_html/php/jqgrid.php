<?php
session_start();
if(isset($_SESSION['usuario'])){
    if(isset($_SESSION['role'])){
?>
<!DOCTYPE html>
<html>
    <head>
        <title>JurassicPets - Mantenimiento</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/favicon.ico">

        <!-- CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/mdb.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/flick/jquery-ui-custom.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="../jqgrid/css/ui.jqgrid.css" />

        <!-- JS -->
        <script type="text/javascript" src="../js/jquery.min.js.descarga"></script>
        <script src="../js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="../jqgrid/js/i18n/grid.locale-es.js" type="text/javascript"></script>
        <script src="../jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../js/myjqgrid.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js.descarga"></script>



    </head>
    <body>
        <nav class="navbar z-depth-2 primary-color">

        </nav>
        <div class="container">
            <div class="col-md-3">
                <div class="collection">
                    <a id="btn_cat" href="javascript:void(0)" class="collection-item">Categorías</a>
                    <a id="btn_art" href="javascript:void(0)" class="collection-item">Artículos</a>
                    <a id="btn_ped" href="javascript:void(0)" class="collection-item">Pedidos</a>
                    <a id="btn_usr" href="javascript:void(0)" class="collection-item">Usuarios</a>
                </div>
            </div>
            <div class="col-md-9">
                <div id="capaJqgrid">
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCategoria" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="modal-title">Ventana Modal</h4>
                    </div>
                    <div class="modal-body" id="modalCarritoBody">
                        <div class="row">
                            <form class="col-md-12">
                                <!--
                                <div class="row">
                                    <div class="input-field col-md-12">
                                        <input  placeholder="Introduce un ID" id="inpId" type="text">
                                        <label class="active">ID</label>
                                    </div>
                                </div>
                                -->
                                <div class="row">
                                    <div class="input-field col-md-12">
                                        <input placeholder="Introduce un nombre" id="inpNombre" type="text">
                                        <label class="active">Nombre</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-default" id="btn_comprarCarrito" data-dismiss="modal" >Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal USUARIO-->
        <div class="modal fade" id="modalUsuario" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="modal-title">Ventana Modal</h4>
                    </div>
                    <div class="modal-body" id="modalCarritoBody">
                        <div class="row">
                            <form class="col-md-12">
                                <div class="row">
                                    <div class="input-field col-md-12">
                                        <input placeholder="Introduce un nombre" id="inpNombreUsr" type="text">
                                        <label class="active">Nombre</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col-md-12">
                                        <input  placeholder="Introduce un password" id="inpPassword" type="text">
                                        <label class="active">Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col-md-12">
                                        <input  placeholder="Introduce un email" id="inpEmail" type="text">
                                        <label class="active">email</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-default" id="btn_aceptarUsuario" data-dismiss="modal" >Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- Modal PEDIDOS (fixear duplicados usando este modal para pedidos)-->
        <div class="modal fade" id="modalPedido" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="modal-title">Ventana Modal</h4>
                    </div>
                    <div class="modal-body" id="modalCarritoBody">
                        <div class="row">
                            <form class="col-md-12">
                                <div class="row">
                                    <div class="input-field col-md-12">
                                        <input placeholder="Introduce una fecha" id="inpFecha" type="text">
                                        <label class="active">Fecha</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-default" id="btn_aceptarPedido" data-dismiss="modal" >Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
<?php
    }
}
?>