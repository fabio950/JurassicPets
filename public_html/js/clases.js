function Carrito(numero, fecha) {
    this.numero = numero;
    this.fecha = fecha;
    this.articulos = [];
    this.total = 0;
}

function Articulo(id, nombre, descripcion, unidad, precio) {
    this.id = id;
    this.nombre = nombre;
    this.descripcion = descripcion;
    this.unidad = unidad;
    this.precio = precio;
}

Carrito.prototype.anyadirArticulo = function (articulo) {
    this.articulos.push(articulo);
};

Carrito.prototype.totalCarrito = function(){
    total = 0;
    
    for(i=0; this.articulos.length > i; i++){
        total += parseFloat(this.articulos[i].precio);
    }
    
    return total.toFixed(2) + "€";
};