<?php

$id = $_POST["id"];
$fecha = $_POST["fecha"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");

$sql = "INSERT INTO pedido VALUES (null, '".$fecha."')";

$con->query($sql);

$con->close();

?>