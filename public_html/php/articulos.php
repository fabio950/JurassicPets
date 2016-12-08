<?php

$carrusel = array
    (
    array("id" => "1", "nombre" => "Velociraptor", "src" => "img/velociraptor-2.jpg", "precio" => 1.50),
    array("id" => "2", "nombre" => "Brachiosaurus", "src" => "img/brachiosaurus-1.jpg", "precio" => 1.50),
    array("id" => "3", "nombre" => "Spinosaurus", "src" => "img/spinosaurus-4.jpg", "precio" => 1.50)
);

echo json_encode($carrusel);
?>