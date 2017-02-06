<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"];
$precio = $_POST["precio"];
$categoria = $_POST["categoria"];

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "INSERT INTO articulo VALUES (null, '".$nombre."', '".$descripcion."', '".$imagen."', ".$precio.", ".$categoria.")";

$con->query($sql);

$con->close();

?>