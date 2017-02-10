<?php

$id = (int) $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"];
$precio = (float) $_POST["precio"];
$categoria = (int) $_POST["categoria"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "INSERT INTO articulo VALUES (null, '".$nombre."', '".$descripcion."', '".$imagen."', ".$precio.", ".$categoria.")";

mysqli_query($con, $sql);

mysqli_close($con);

?>