<?php

$nombre = $_POST["nombre"];
$password = $_POST["password"];
$email = $_POST["email"];

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "INSERT INTO usuarios VALUES (null, '".$nombre."', '".$password."', '".$email."')";

$con->query($sql);

$con->close();

?>
