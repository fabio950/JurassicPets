<?php

$id = $_GET["id"];
$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");

$sql = "SELECT * FROM articulo WHERE categoria=$id";

$resultado = mysqli_query($con, $sql);

$i = 0;
while($fila = mysqli_fetch_assoc($resultado)){
    $articulos[$i] = array("id"=>$fila["id"], "nombre"=>array_map('utf8_encode', $fila)["nombre"], 
        "descripcion"=>array_map('utf8_encode', $fila)["descripcion"], "imagen"=>$fila["imagen"], 
        "precio"=>$fila["precio"], "categoria"=>$fila["categoria"]);
    $i++;
}

echo json_encode($articulos);

mysqli_close($con);

?>
