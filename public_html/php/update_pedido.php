<?php

$id = $_POST["id"];
$fecha = $_POST["nombre"];        

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "UPDATE pedido SET fecha='".$fecha."' WHERE id=".$id."";

$con->query($sql);

$con->close();

?>