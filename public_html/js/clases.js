function Carrito(numero, fecha) {
    this.numero = numero;
    this.fecha = fecha;
    this.articulos = [];
}

Carrito.prototype.anyadirArticulo = function (articulo) {
    this.articulos.push(articulo);
};

function Articulo(id, nombre, precio) {
    this.id = id;
    this.nombre = nombre;
    this.precio = precio;
}

Carrito.prototype.verCarrito = function() {
    for (var i = 0; i < this.articulos.length; i++) {
        alert(this.articulos[i].nombre);
    }
    
}