<?php
$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "SELECT * FROM articulo";

$resultado = mysqli_query($con, $sql);

$carrito = $POST['carrito'];

$ocarrito = new stdClass();

$ocarrito = json_decode($carrito);


?>