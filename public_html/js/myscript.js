/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $.ajax({
        url: "php/categoriasBD.php",
        dataType: "json",
        success: function (datos) {
            $.each(datos, function(index, value){
                $("#listaCategorias").append("<a href='javascript:void(0)' class='collection-item'>" + value.nombre + "</a>");
            });
        }
    });

    $.ajax({
        url: "php/carrusel.php",
        dataType: "json",
        success: function (datos) {
            $.each(datos, function(index, value){
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
            $.each(datos, function(index, value){
                articulo = "<div class='col-md-4'>" +
                        "<div class='card hoverable'>" +
                        "<div class='card-image'>" +
                        "<img src='img/" + value.imagen +"'>" +
                        "</div>" +
                        "<div>" +
                        "<h4>" + value.nombre + "</h4>" +
                        "<h5>" + value.precio + " €</h5>" +
                        "</div>" +
                        "<div class='card-action'>" +
                        "<button type='button' class='btn btn-default waves-effect waves-light' data-toggle='modal' data-target='#myModal'>Comprar</button>" +
                        "</div>" +
                        "</div>" +
                        "</div>";
                $("#contenedor").append(articulo);
            });
        }
    });
});

