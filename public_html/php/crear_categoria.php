<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "INSERT INTO categoria VALUES (null, '".$nombre."')";

$con->query($sql);

$con->close();

?>