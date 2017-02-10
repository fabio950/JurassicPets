<?php
session_start();
$nombre = $_POST["nombre"];
$password = $_POST["password"];
$con = mysqli_connect("localhost", "root", "jurassicpets", "jurassicpets");
$sql = "SELECT * FROM usuario WHERE nombre='$nombre' AND password='$password'";
$result = mysqli_query($con, $sql);
$num_row = mysqli_num_rows($result);
if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["usuario"] = $data["nombre"];
    $_SESSION["role"] = $data["role"];
    echo "1";
} else {
    echo "error";
}
mysqli_close($con);
?>