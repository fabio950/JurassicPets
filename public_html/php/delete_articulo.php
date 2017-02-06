<?php

$id = $_POST["id"];

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "DELETE FROM articulo WHERE id='".$id."'";

$con->query($sql);

$con->close();

?>