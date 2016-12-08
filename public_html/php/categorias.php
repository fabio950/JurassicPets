<?php
    
$categorias = array
	(
	array("id"=>"1", "nombre"=>"Carnívoros"),
	array("id"=>"2", "nombre"=>"Herbívoros"),
	array("id"=>"3", "nombre"=>"Marinos"),
	array("id"=>"4", "nombre"=>"Voladores")
	);

echo json_encode($categorias);

?>