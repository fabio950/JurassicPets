<?php

$id = (int) $_POST["id"];
$nombre = $_POST["nombre"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "INSERT INTO categoria VALUES (null, '".$nombre."')";

mysqli_query($con, $sql);

mysqli_close($con);

?>