<?php
$nombre = $_POST["nombre"];
$password = $_POST["password"];
$email = $_POST["email"];
$con = mysqli_connect("localhost", "root", "", "jurassicpets");
$sqlSelect = "SELECT * FROM usuarios WHERE email='$email'";
$result = mysqli_query($con, $sqlSelect);
$num_row = mysqli_num_rows($result);
if($num_row == "0"){
    $sql = "INSERT INTO usuarios VALUES (null, '".$nombre."', '".$password."', '".$email."', null)";
    mysqli_query($con, $sql);
    echo "1";
}else{
    echo "Ya existe el usuario";
}
mysqli_close($con);
?>