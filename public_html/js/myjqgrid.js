$(document).ready(function () {
    var opc;
    var idCat;
    var nombreCat;
    var url;
    
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
    
    $('#btn_cat').click(function () {
        $('#btn_art').removeClass("active");
        $('#btn_cat').addClass("active");
        $("#capaJqgrid").children().remove();
        tabla = "<table id='tbltareas'></table>";
        links = "<a id='btn_crear' href='javascript:void(0)' data-toggle='modal' data-target='#modalCategoria'>Crear</a> " +
                "<a id='btn_modificar' href='javascript:void(0)' data-toggle='modal' data-target='#modalCategoria'>Modificar</a> " +
                "<a id='btn_eliminar' href='javascript:void(0)'>Eliminar</a>";
        $("#capaJqgrid").append(tabla);
        $("#capaJqgrid").append(links);

        $("#btn_crear").click(function() {
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

        $("#btn_eliminar").click(function() {
            var id = jQuery("#tbltareas").jqGrid('getGridParam', 'selrow');
            if (id) {
                var ret = jQuery("#tbltareas").jqGrid('getRowData', id);
                idCat = ret.id;
                
                $.ajax({
                    type: 'POST',
                    data: 'id=' + idCat,
                    url: 'php/delete_categoria.php',
                    success: function(data){
                        $("#tbltareas").trigger("reloadGrid");
                    }
                });
            } else {
                alert("Please select row");
            }
        });

        $("#btn_comprarCarrito").click(function(){
            nombreCat = $("#inpNombre").val();
            
            if(opc === 1) {
                url = "php/crear_categoria.php";
            } else if(opc === 2) {
                url = "php/update_categoria.php";
            }
            
            var data = {
                "id" : idCat,
                "nombre" : nombreCat
            };
            
            $.ajax({
                type: 'POST',
                data: data,
                url: url,
                success: function(data){
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

    $('#btn_art').click(function () {
        $('#btn_cat').removeClass("active");
        $('#btn_art').addClass("active");
        $("#capaJqgrid").children().remove();
        tabla = "<table id='tbltareas'></table>";
        links = "<a id='btn_crear' href='javascript:void(0)'>Crear</a> " +
                "<a id='btn_modificar' href='javascript:void(0)' id='btn_modificar'>Modificar</a> " +
                "<a id='btn_eliminar' href='javascript:void(0)'>Eliminar</a>";
        $("#capaJqgrid").append(tabla);
        $("#capaJqgrid").append(links);

        $("#btn_crear").click(function() {
            opc = 1;
        });
        
        $("#btn_modificar").click(function() {
            opc = 2;
        });

        $("#btn_eliminar").click(function() {
            var id = jQuery("#tbltareas").jqGrid('getGridParam', 'selrow');
            if (id) {
                var ret = jQuery("#tbltareas").jqGrid('getRowData', id);
                idArt = ret.id;
                
                $.ajax({
                    type: 'POST',
                    data: 'id=' + idArt,
                    url: 'php/delete_articulo.php',
                    success: function(data){
                        $("#tbltareas").trigger("reloadGrid");
                    }
                });
            } else {
                alert("Please select row");
            }
        });

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
});