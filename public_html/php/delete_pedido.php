<?php

$id = $_POST["id"];

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "DELETE FROM pedido WHERE id='".$id."'";

$con->query($sql);

$con->close();

?>