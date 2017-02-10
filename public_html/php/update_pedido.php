<?php

$id = $_POST["id"];
$fecha = $_POST["fecha"];        

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");

$sql = "UPDATE pedido SET fecha='".$fecha."' WHERE id=".$id."";

$con->query($sql);

$con->close();

?>