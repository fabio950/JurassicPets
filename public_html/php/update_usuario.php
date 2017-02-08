<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$password = $_POST["password"];
$email = $_POST["email"];       

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "UPDATE usuario SET nombre='".$nombre."', password='".$password."', email='".$email."' WHERE id=".$id."";

$con->query($sql);

$con->close();

?>