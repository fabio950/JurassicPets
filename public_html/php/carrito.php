<?php
$carrito = $_POST['carrito'];

$ocarrito = new stdClass();

$ocarrito = json_decode($carrito);

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");

$sql = "INSERT INTO pedido VALUES (null, '$ocarrito->fecha');";

$con->query($sql);

$idPedido = $con->insert_id;

foreach ($ocarrito->articulos as $fila){
    $sql2 = "INSERT INTO linea_pedido VALUES ('".$fila->id."', '".$fila->nombre."', '".$fila->descripcion."', '".$fila->unidad."', '".$fila->precio."', '".$idPedido."');";
    $con->query($sql2);
}

$con->close();
?>