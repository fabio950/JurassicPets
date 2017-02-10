<?php

$nombre = $_POST["nombre"];
$password = $_POST["password"];
$email = $_POST["email"];
$role = $_POST["role"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");

$sql = "INSERT INTO usuario VALUES (null, '".$nombre."','".$password."','".$email."','".$role."')";

$con->query($sql);

$con->close();

?>