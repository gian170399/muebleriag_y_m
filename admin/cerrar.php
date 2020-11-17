<?php session_start();//sesion iniciada

session_destroy();//destruimos la sesion
$_SESSION = array();//limpiamos la sesion

header('Location: login.php');//nos envia al login
die();

?>