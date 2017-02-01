$(document).ready(function () {
    $('#btn_cat').click(function () {
        $('#btn_cat').addClass("active");
        $("#capaJqgrid").children().remove();
        tabla = "<table id='tbltareas'></table>";
        links = "<a href='javascript:void(0)'>Crear</a> " +
                "<a href='javascript:void(0)' data-toggle='modal' data-target='#modalCategoria'>Modificar</a> " +
                "<a href='javascript:void(0)'>Eliminar</a>";
        $("#capaJqgrid").append(tabla);
        $("#capaJqgrid").append(links);

        $("#btn_modificar").click(function () {
            var id = jQuery("#tbltareas").jqGrid('getGridParam', 'selrow');
            if (id) {
                var ret = jQuery("#tbltareas").jqGrid('getRowData', id);
                alert("id=" + ret.id + " nombre=" + ret.nombre + "...");
            } else {
                alert("Please select row");
            }
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
        $('#btn_art').addClass("active");
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
                {name: 'descripcion', index: 'descripcion', width: 100},
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