<?php

$id = (int) $_POST["id"];
$nombre = $_POST["nombre"];        

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "UPDATE categoria SET nombre='".$nombre."' WHERE id=".$id."";

mysqli_query($con, $sql);

mysqli_close($con);

?>