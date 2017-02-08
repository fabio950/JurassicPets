$(document).ready(function () {
    var opc;
    var idCat;
    var nombreCat;
    var url;
    var idPed;
    var fechaPed;
    var idUsr;
    var nombreUsr;
    var passwordUsr;
    var emailUsr;

    //Arregla el error "Uncaught TypeError: Cannot read property 'msie' of undefined" del JqGrid, NO BORRAR
    jQuery.browser = {};
    (function () {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;
        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
    })();

    //CATEGORIAS
    $('#btn_cat').click(function () {
        $('#btn_art').removeClass("active");
        $('#btn_cat').addClass("active");
        $('#btn_ped').removeClass("active");
        $('#btn_usr').removeClass("active");
        $("#capaJqgrid").children().remove();
        tabla = "<table id='tbltareas'></table>";
        links = "<a id='btn_crear' href='javascript:void(0)' data-toggle='modal' data-target='#modalCategoria'>Crear</a> " +
                "<a id='btn_modificar' href='javascript:void(0)' data-toggle='modal' data-target='#modalCategoria'>Modificar</a> " +
                "<a id='btn_eliminar' href='javascript:void(0)'>Eliminar</a>";
        $("#capaJqgrid").append(tabla);
        $("#capaJqgrid").append(links);

        $("#btn_crear").click(function () {
            opc = 1;
        });

        $("#btn_modificar").click(function () {
            opc = 2;

            var id = jQuery("#tbltareas").jqGrid('getGridParam', 'selrow');
            if (id) {
                var ret = jQuery("#tbltareas").jqGrid('getRowData', id);
                idCat = ret.id;
                nombreCat = ret.nombre;

                $("#inpId").val(idCat);
                $("#inpNombre").val(nombreCat);
            } else {
                alert("Please select row");
            }
        });

        $("#btn_eliminar").click(function () {
            var id = jQuery("#tbltareas").jqGrid('getGridParam', 'selrow');
            if (id) {
                var ret = jQuery("#tbltareas").jqGrid('getRowData', id);
                idCat = ret.id;

                $.ajax({
                    type: 'POST',
                    data: 'id=' + idCat,
                    url: 'php/delete_categoria.php',
                    success: function (data) {
                        $("#tbltareas").trigger("reloadGrid");
                    }
                });
            } else {
                alert("Please select row");
            }
        });

        $("#btn_comprarCarrito").click(function () {
            nombreCat = $("#inpNombre").val();
            alert("hola desde categorias");
            if (opc === 1) {
                url = "php/crear_categoria.php";
            } else if (opc === 2) {
                url = "php/update_categoria.php";
            }

            var data = {
                "id": idCat,
                "nombre": nombreCat
            };

            $.ajax({
                type: 'POST',
                data: data,
                url: url,
                success: function (data) {
                    $("#tbltareas").trigger("reloadGrid");
                }
            });
        });

        jQuery("#tbltareas").jqGrid({
            url: 'php/lista_categorias.php',
            datatype: 'json',
            mtype: 'POST',
            colNames: ['Id', 'Nombre'],
            colModel: [
                {name: 'id', index: 'id', width: 50},
                {name: 'nombre', index: 'nombre', width: 200}
            ],
            pager: '#paginacion',
            rowNum: 10,
            rowList: [15, 30],
            sortname: 'id',
            sortorder: 'asc',
            viewrecords: true,
            caption: 'Listado de Categorias'
        });
    });

    //ARTICULOS
    $('#btn_art').click(function () {
        $('#btn_art').addClass("active");
        $('#btn_cat').removeClass("active");
        $('#btn_ped').removeClass("active");
        $('#btn_usr').removeClass("active");
        $("#capaJqgrid").children().remove();
        tabla = "<table id='tbltareas'></table>";
        links = "<a href='javascript:void(0)'>Crear</a> " +
                "<a href='javascript:void(0)' id='btn_modificar'>Modificar</a> " +
                "<a href='javascript:void(0)'>Eliminar</a>";
        $("#capaJqgrid").append(tabla);
        $("#capaJqgrid").append(links);

        jQuery("#tbltareas").jqGrid({
            url: 'php/lista_articulos.php',
            datatype: 'json',
            mtype: 'POST',
            colNames: ['Id', 'Nombre', 'Descripción', 'Imagen', 'Precio', 'Categoria'],
            colModel: [
                {name: 'id', index: 'id', width: 50},
                {name: 'nombre', index: 'nombre', width: 100},
                {name: 'descripcion', index: 'descripcion', width: 300},
                {name: 'imagen', index: 'imagen', width: 100},
                {name: 'precio', index: 'precio', width: 100},
                {name: 'categoria', index: 'categoria', width: 100}
            ],
            pager: '#paginacion',
            rowNum: 10,
            rowList: [15, 30],
            sortname: 'id',
            sortorder: 'asc',
            viewrecords: true,
            caption: 'Listado de Artículos'
        });
    });

    //PEDIDOS
    $('#btn_ped').click(function () {
        $('#btn_art').removeClass("active");
        $('#btn_cat').removeClass("active");
        $('#btn_ped').addClass("active");
        $('#btn_usr').removeClass("active");
        $("#capaJqgrid").children().remove();
        tabla = "<table id='tbltareas'></table>";
        links = "<a id='btn_crear' href='javascript:void(0)' data-toggle='modal' data-target='#modalPedido'>Crear</a> " +
                "<a id='btn_modificar' href='javascript:void(0)' data-toggle='modal' data-target='#modalPedido'>Modificar</a> " +
                "<a id='btn_eliminar' href='javascript:void(0)'>Eliminar</a>";
        $("#capaJqgrid").append(tabla);
        $("#capaJqgrid").append(links);

        $("#btn_crear").click(function () {
            opc = 1;
        });

        $("#btn_modificar").click(function () {
            opc = 2;

            var id = jQuery("#tbltareas").jqGrid('getGridParam', 'selrow');
            if (id) {
                var ret = jQuery("#tbltareas").jqGrid('getRowData', id);
                idPed = ret.id;
                fechaPed = ret.fecha;

                //$("#inpId").val(idPed);
                $("#inpFecha").val(fechaPed);
            } else {
                alert("Please select row");
            }
        });

        $("#btn_eliminar").click(function () {
            var id = jQuery("#tbltareas").jqGrid('getGridParam', 'selrow');
            if (id) {
                var ret = jQuery("#tbltareas").jqGrid('getRowData', id);
                idPed = ret.id;

                $.ajax({
                    type: 'POST',
                    data: 'id=' + idPed,
                    url: 'php/delete_pedido.php',
                    success: function (data) {
                        $("#tbltareas").trigger("reloadGrid");
                    }
                });
            } else {
                alert("Please select row");
            }
        });

        $("#btn_aceptarPedido").click(function () {
            fechaPed = $("#inpFecha").val();

            if (opc === 1) {
                url = "php/crear_pedido.php";
            } else if (opc === 2) {
                url = "php/update_pedido.php";
            }

            var data = {
                "id": idPed,
                "fecha": fechaPed
            };

            $.ajax({
                type: 'POST',
                data: data,
                url: url,
                success: function (data) {
                    $("#tbltareas").trigger("reloadGrid");
                }
            });
        });

        jQuery("#tbltareas").jqGrid({
            url: 'php/lista_pedidos.php',
            datatype: 'json',
            mtype: 'POST',
            colNames: ['Id', 'Fecha'],
            colModel: [
                {name: 'id', index: 'id', width: 50},
                {name: 'fecha', index: 'fecha', width: 200}
            ],
            pager: '#paginacion',
            rowNum: 10,
            rowList: [15, 30],
            sortname: 'id',
            sortorder: 'asc',
            viewrecords: true,
            caption: 'Listado de Pedidos'
        });
    });

    //USUARIOS
    $('#btn_usr').click(function () {
        $('#btn_art').removeClass("active");
        $('#btn_cat').removeClass("active");
        $('#btn_ped').removeClass("active");
        $('#btn_usr').addClass("active");
        $("#capaJqgrid").children().remove();
        tabla = "<table id='tbltareas'></table>";
        links = "<a id='btn_crear' href='javascript:void(0)' data-toggle='modal' data-target='#modalUsuario'>Crear</a> " +
                "<a id='btn_modificar' href='javascript:void(0)' data-toggle='modal' data-target='#modalUsuario'>Modificar</a> " +
                "<a id='btn_eliminar' href='javascript:void(0)'>Eliminar</a>";
        $("#capaJqgrid").append(tabla);
        $("#capaJqgrid").append(links);

        $("#btn_crear").click(function () {
            opc = 1;
        });

        $("#btn_modificar").click(function () {
            opc = 2;

            var id = jQuery("#tbltareas").jqGrid('getGridParam', 'selrow');
            if (id) {
                var ret = jQuery("#tbltareas").jqGrid('getRowData', id);
                idUsr = ret.id;
                nombreUsr = ret.nombre;
                passwordUsr = ret.password;
                emailUsr = ret.email;

                $("#inpNombreUsr").val(nombreUsr);
                $("#inpPassword").val(passwordUsr);
                $("#inpEmail").val(emailUsr);
            } else {
                alert("Please select row");
            }
        });

        $("#btn_eliminar").click(function () {
            var id = jQuery("#tbltareas").jqGrid('getGridParam', 'selrow');
            if (id) {
                var ret = jQuery("#tbltareas").jqGrid('getRowData', id);
                idUsr = ret.id;

                $.ajax({
                    type: 'POST',
                    data: 'id=' + idUsr,
                    url: 'php/delete_usuario.php',
                    success: function (data) {
                        $("#tbltareas").trigger("reloadGrid");
                    }
                });
            } else {
                alert("Please select row");
            }
        });

        $("#btn_aceptarUsuario").click(function () {
            nombreUsr = $("#inpNombreUsr").val();
            passwordUsr = $("#inpPassword").val();
            emailUsr = $("#inpEmail").val();

            if (opc === 1) {
                url = "php/crear_usuario.php";
            } else if (opc === 2) {
                url = "php/update_usuario.php";
            }

            var data = {
                "id": idUsr,
                "nombre": nombreUsr,
                "password": passwordUsr,
                "email": emailUsr
            };

            $.ajax({
                type: 'POST',
                data: data,
                url: url,
                success: function (data) {
                    $("#tbltareas").trigger("reloadGrid");
                }
            });
        });

        jQuery("#tbltareas").jqGrid({
            url: 'php/lista_usuarios.php',
            datatype: 'json',
            mtype: 'POST',
            colNames: ['Id', 'Nombre', 'Password', 'Email'],
            colModel: [
                {name: 'id', index: 'id', width: 50},
                {name: 'nombre', index: 'nombre', width: 200},
                {name: 'password', index: 'password', width: 200},
                {name: 'email', index: 'email', width: 200}
            ],
            pager: '#paginacion',
            rowNum: 10,
            rowList: [15, 30],
            sortname: 'id',
            sortorder: 'asc',
            viewrecords: true,
            caption: 'Listado de Usuarios'
        });
    });
});