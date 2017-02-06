<?php

$nombre = $_POST["nombre"];
$password = $_POST["password"];
$role = $_POST["role"];

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "INSERT INTO usuarios VALUES (null, '".$nombre."', '".$password."', '".$role."')";

$con->query($sql);

$con->close();

?>
