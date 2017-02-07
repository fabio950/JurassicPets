<?php
session_start();
if(isset($_SESSION['usuario'])){
?>
<html>
    <head></head>
    <body><p>OK dashboard</p></body>
</html>
<?php
}
?>