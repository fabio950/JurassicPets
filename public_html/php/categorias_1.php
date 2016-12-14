<?php
    
$con = mysqli_connect("localhost", "root", "", "daw");

$sql = "SELECT * FROM categoria";

$resultado = mysqli_query($con, $sql);

$i = 0;
while($fila = mysqli_fetch_assoc($resultado)){
    $categorias[$i] = array("codigo"=>$fila["codigo"], "nombre"=>$fila["nombre"]);
    $i++;
}

echo json_encode($categorias);

mysqli_close($con);

?>