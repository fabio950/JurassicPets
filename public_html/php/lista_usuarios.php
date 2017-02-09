<?php

//error_reporting(0);
$page = $_POST['page'];  // Almacena el numero de pagina actual
$limit = $_POST['rows']; // Almacena el numero de filas que se van a mostrar por pagina
$sidx = $_POST['sidx'];  // Almacena el indice por el cual se har� la ordenaci�n de los datos
$sord = $_POST['sord'];  // Almacena el modo de ordenaci�n

if (!$sidx) {
    $sidx = 1;
}

$con = mysqli_connect("localhost", "root", "", "jurassicpets");
mysqli_set_charset($con, "utf8");

$sql = "SELECT COUNT(*) AS count FROM usuario";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

if ($count > 0) {
    $total_pages = ceil($count / $limit);
} else {
    $total_pages = 0;
}
if ($page > $total_pages) {
    $page = $total_pages;
}

$start = $limit * $page - $limit;

$sql2 = "SELECT * FROM usuario ORDER BY $sidx $sord LIMIT $start , $limit;";
$result = mysqli_query($con, $sql2);

$responce = new StdClass();
$responce->page = $page;
$responce->total = $total_pages;
$responce->records = $count;

$i = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $responce->rows[$i]['id'] = $row['id'];
    $responce->rows[$i]['cell'] = array($row['id'], $row['nombre'], $row['password'], $row['email']);
    $i++;
}

echo json_encode($responce);

mysqli_close($con);
?>
