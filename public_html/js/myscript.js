/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    fecha = new Date();
    dia = fecha.getDate();
    mes = fecha.getMonth() + 1;
    anyo = fecha.getFullYear();
    
    miCarrito = new Carrito("1", dia + "/" + mes + "/" + anyo);

    $.ajax({
        url: "php/categoriasBD.php",
        dataType: "json",
        success: function (datos) {
            $.each(datos, function (index, value) {
                $("#listaCategorias").append("<a href='javascript:void(0)' class='collection-item' id='" + value.id + "'>" + value.nombre + "</a>");
            });
        }
    });

    $.ajax({
        url: "php/carrusel.php",
        dataType: "json",
        success: function (datos) {
            $.each(datos, function (index, value) {
                if (index === 0) {
                    clase = "item active";
                } else {
                    clase = "item";
                }
                itemCarrusel = "<div class='" + clase + "'>" +
                        "<img class='slide-image' src='" + value.src + "' alt=''>" +
                        "</div>";
                $("#carrusel").append(itemCarrusel);
            });
        }
    });

    $.ajax({
        url: "php/articulosBD.php",
        dataType: "json",
        success: function (datos) {
            $.each(datos, function (index, value) {

                articulo = "<div class='col-md-4'>" +
                        "<div class='card hoverable'>" +
                        "<div class='card-image'>" +
                        "<img src='img/" + value.imagen + "'>" +
                        "</div>" +
                        "<div>" +
                        "<h4>" + value.nombre + "</h4>" +
                        "<h5>" + value.precio + " €</h5>" +
                        "</div>" + 
                        "<div class='hiddendiv'>" + value.descripcion + "</div>" +
                        "<div class='hiddendiv'>" + value.id + "</div>" +
                        "<div class='card-action'>" +
                        "<button type='button' id='btnArticulo' class='btn btn-default waves-effect waves-light' data-toggle='modal' data-target='#myModal'>Comprar</button>" +
                        "</div>" +
                        "</div>" +
                        "</div>";
                $("#contenedor").append(articulo);
            });
        }
    });

    $('#listaCategorias').on('click', 'a', function () {

        $("#contenedor").children().remove();

        categoria = $(this).attr('id');
        $.ajax({
            url: "php/articulosCategoriasBD.php?id=" + categoria,
            type: "GET",
            dataType: "json",
            success: function (datos) {
                $.each(datos, function (index, value) {
                    articulo = "<div class='col-md-4'>" +
                            "<div class='card hoverable'>" +
                            "<div class='card-image'>" +
                            "<img src='img/" + value.imagen + "'>" +
                            "</div>" +
                            "<div>" +
                            "<h4>" + value.nombre + "</h4>" +
                            "<h5>" + value.precio + " €</h5>" +
                            "</div>" +
                            "<div class='hiddendiv'>" + value.descripcion + "</div>" +
                            "<div class='hiddendiv'>" + value.id + "</div>" +
                            "<div class='card-action'>" +
                            "<button type='button' id='btnArticulo' class='btn btn-default waves-effect waves-light' data-toggle='modal' data-target='#myModal' onClick='modal()'>Comprar</button>" +
                            "</div>" +
                            "</div>" +
                            "</div>";
                    $("#contenedor").append(articulo);

                });
            }
        });
    });


    $('#contenedor').on('click', '#btnArticulo', function () {
        id = $(this).parent().parent().children('div:nth-child(4)').text();
        nombre = $(this).parent().parent().children('div:nth-child(2)').find('h4').text();
        descripcion = $(this).parent().parent().children('div:nth-child(3)').text();
        precio = $(this).parent().parent().children('div:nth-child(2)').find('h5').text();
        
        $('#modalId').text(id);
        $('.modal-title').text(nombre);
        $('.modalDescripcion').text(descripcion);
        $('.modalPrecio').text(precio);
    });

    $('#myModal').on('click', '#btn_comprar', function () {
        var num = 0;
        var precioArt = 0;
        
        id = $(this).parent().parent().parent().children('div:nth-child(2)').find('span').text();
        nombre = $(this).parent().parent().parent().children('div:nth-child(1)').find('h4').text();
        precio = $(this).parent().parent().parent().children('div:nth-child(2)').find('h6').text();
        descripcion = $(this).parent().parent().parent().children('div:nth-child(2)').find('p').text();
       
        miArticulo = new Articulo(id, nombre, descripcion, 1, precio);
        
        enc = false;
        
        for(var i = 0; miCarrito.articulos.length > i; i++) {
            if(miArticulo.id === miCarrito.articulos[i].id) {
                enc = true;
                num = i;
                precioArt = parseFloat(miCarrito.articulos[i].precio);
                break;
            } else {
                enc = false;
            }
        }
        
        if(!enc) {
            miCarrito.anyadirArticulo(miArticulo); 
        } else {
            miCarrito.articulos[num].unidad++; 
            miCarrito.articulos[num].precio = precioArt*miCarrito.articulos[num].unidad + " €"; 
        }
    });

    $('#btn_carrito').click(function () {
        $("#modalCarritoBody").children().remove();
        $('#modal-title').text("Nº Pedido: " + miCarrito.numero + ", Fecha: " + miCarrito.fecha);
        
        for(var i = 0; miCarrito.articulos.length > i; i++) {
            articulo =  miCarrito.articulos[i].nombre + " " + miCarrito.articulos[i].descripcion + " " + miCarrito.articulos[i].unidad + " " + miCarrito.articulos[i].precio;
            itemCarrito = "<p>" + articulo + "</p>";
            $("#modalCarritoBody").append(itemCarrito);
        }
        
        precio = "<h6>Total: " + miCarrito.totalCarrito() + "</h6>";
        
        $("#modalCarritoBody").append(precio);
    });

    $('#modalCarrito').on('click', '#btn_comprarCarrito', function () {
        $.ajax({
        type: 'POST',
                data: 'carrito=' + JSON.stringify(miCarrito),
                //dataType: 'json',
                url: 'php/carrito.php',
                success: function(data){
                
                }
            });
    });
});

