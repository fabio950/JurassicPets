<?php

session_start();

$nombre = $_POST["nombre"];
$password = $_POST["password"];

$connect = mysqli_connect("localhost", "root", "", "jurassicpets");


$sql = "SELECT * FROM usuarios WHERE nombre='$nombre' AND password='$password'";
$result = mysqli_query($connect, $sql);
$num_row = mysqli_num_rows($result);
if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["usuario"] = $data["nombre"];
    $_SESSION["role"] = $data["role"];
    echo "1";
} else {
    echo "error";
}

$connect->close();
?>