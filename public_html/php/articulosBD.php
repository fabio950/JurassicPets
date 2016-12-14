<?php

$con = mysqli_connect("localhost", "root", "", "jurassicpets");

$sql = "SELECT * FROM articulo";

$resultado = mysqli_query($con, $sql);

$i = 0;
while($fila = mysqli_fetch_assoc($resultado)){
    $articulos[$i] = array("id"=>$fila["id"], "nombre"=>array_map('utf8_encode', $fila)["nombre"], 
        "imagen"=>$fila["imagen"], "precio"=>$fila["precio"], "categoria"=>$fila["categoria"]);
    $i++;
}

echo json_encode($articulos);

mysqli_close($con);

?>