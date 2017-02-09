<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"];
$precio = $_POST["precio"];
$categoria = $_POST["categoria"];       

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "UPDATE articulo SET nombre='".$nombre."', descripcion='".$descripcion."', imagen='".$imagen."', precio=".$precio.", categoria=".$categoria." WHERE id=".$id."";

$con->query($sql);

$con->close();

?>