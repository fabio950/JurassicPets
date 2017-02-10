<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$password = $_POST["password"];
$email = $_POST["email"];
$role = $_POST["role"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");

$sql = "UPDATE usuario SET nombre='".$nombre."', password='".$password."', email='".$email."', role='".$role."' WHERE id=".$id."";

$con->query($sql);

$con->close();

?>