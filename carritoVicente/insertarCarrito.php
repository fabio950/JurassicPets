<?php

$funciona = array();
$servername = "localhost";
$username = "efestia-admin";
$password = "efestia";
$dbname = "efestia";
$estado = TRUE;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	$estado = FALSE;
    die("Connection failed: " . $conn->connect_error);
} 

$carrito = $_POST['carrito'];
$idUsuario = 1;
$fecha = '2017-01-01';
$oCarrito = new stdClass();
$oCarrito = json_decode($carrito);

$sql = "INSERT INTO factura (idUsuario,fecha) VALUES ('".$idUsuario."', '".$fecha."')";

if ($conn->query($sql) === TRUE) {
    $idFactura = $conn->insert_id;
	$estado = TRUE;
} else {
    $estado = FALSE;
}
if($estado === TRUE){
	foreach($oCarrito->articulos as $linea){
		$sql2 = "INSERT INTO lineaFactura (idFactura,idProducto,cantidad,precio)
	VALUES ('".$idFactura."','".$linea->codigo."',1,'".$linea->precio."')";
	
		if ($conn->query($sql2) === TRUE) {
		$estado = TRUE;
		} else {
			$estado = FALSE;
		}
	}

	
}
$conn->close();

$funciona[] = array('funciona' => $estado);

echo json_encode($funciona);

?>



