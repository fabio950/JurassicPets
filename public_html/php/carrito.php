<?php
$carrito = $_POST['carrito'];

$ocarrito = new stdClass();

$ocarrito = json_decode($carrito);

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "INSERT INTO pedido VALUES ($ocarrito->numero, '$ocarrito->fecha');";

$con->query($sql);

mysqli_close($con);

$con2 = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql2 = "";

foreach ($ocarrito->articulos as $fila){
    $sql2 += "INSERT INTO linea_pedido VALUES ($fila->id, '$fila->nombre', '$fila->descripcion', $fila->unidad, $fila->precio, $ocarrito->numero);";
}

$con2->query($sql2);

mysqli_close($con2);
?>