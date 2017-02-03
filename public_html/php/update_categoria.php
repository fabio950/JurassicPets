<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];        

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "UPDATE categoria SET nombre='".$nombre."' WHERE id=".$id."";

$con->query($sql);

$con->close();

?>