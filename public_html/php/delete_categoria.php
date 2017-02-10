<?php

$id = (int) $_POST["id"];

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");

$sql = "DELETE FROM categoria WHERE id=".$id."";

mysqli_query($con, $sql);

mysqli_close($con);

?>