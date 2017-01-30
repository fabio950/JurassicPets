<?php
//error_reporting(0);
    $page = $_POST['page'];  // Almacena el numero de pagina actual
    $limit = $_POST['rows']; // Almacena el numero de filas que se van a mostrar por pagina
    $sidx = $_POST['sidx'];  // Almacena el indice por el cual se har� la ordenaci�n de los datos
    $sord = $_POST['sord'];  // Almacena el modo de ordenaci�n

	
    if(!$sidx) $sidx =1;

    $db = mysql_connect("localhost","root","") or die("Connection Error: " . mysql_error());
    mysql_select_db("jurassicpets") or die("Error conecting to db.");
    
	$result = mysql_query("SELECT COUNT(*) AS count FROM categoria");

    $fila = mysql_fetch_array($result,MYSQL_ASSOC);
	$count = $fila['count'];

    if( $count >0 ) {
	$total_pages = ceil($count/$limit);
    } else {
	$total_pages = 0;
    }
    if ($page > $total_pages)
        $page=$total_pages;

    $start = $limit*$page - $limit;

    $SQL = "SELECT * FROM categoria ORDER BY $sidx $sord LIMIT $start , $limit;"; 
    $result = mysql_query( $SQL ) or die("Couldn t execute query.".mysql_error());

	
    // ������� Construir el objeto JSON con los datos de la consulta !!!!!!!!!!!
    $responce = new StdClass();
    $responce->page = $page;
	$responce->total = $total_pages;
    $responce->records = $count;


    $i = 0;
    while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
        $responce->rows[$i]['id'] = $row['id'];
        $responce->rows[$i]['cell'] = array($row['id'],$row['nombre']);
        $i++;
    }

	echo json_encode($responce);
	
	// ������� Devolver el objeto JSON al cliente !!!!!!!!!!!
    
?>