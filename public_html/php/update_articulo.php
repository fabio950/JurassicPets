<?php

$id = (int) $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"];
$precio = (float) $_POST["precio"];
$categoria = (int) $_POST["categoria"];       

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");

$sql = "UPDATE articulo SET nombre='".$nombre."', descripcion='".$descripcion."', imagen='".$imagen."', precio=".$precio.", categoria=".$categoria." WHERE id=".$id."";

mysqli_query($con, $sql);

mysqli_close($con);

?>