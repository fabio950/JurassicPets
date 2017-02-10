<?php
 session_start();
 unset($_SESSION['usuario']);
 unset($_SESSION['role']);
 
 if(session_destroy())
 {
  header("Location: ../index.php");
 }
?>
