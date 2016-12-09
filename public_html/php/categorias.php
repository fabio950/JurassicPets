<?php
    
$categorias = array
	(
	array("id"=>"1", "nombre"=>"Dinosaurios carnívoros"),
	array("id"=>"2", "nombre"=>"Dinosaurios herbívoros"),
	array("id"=>"3", "nombre"=>"Dinosaurios marinos"),
	array("id"=>"4", "nombre"=>"Dinosaurios voladores"),
    	array("id"=>"5", "nombre"=>"Alimentación"),
        array("id"=>"6", "nombre"=>"Accesorios")
	);

echo json_encode($categorias);

?>