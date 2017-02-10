<?php

$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");

$sql = "SELECT * FROM categoria";

$resultado = mysqli_query($con, $sql);

$i = 0;
while($fila = mysqli_fetch_assoc($resultado)){
    $categorias[$i] = array("id"=>$fila["id"], "nombre"=>array_map('utf8_encode', $fila)["nombre"]);
    $i++;
}

echo json_encode($categorias);

mysqli_close($con);

?>