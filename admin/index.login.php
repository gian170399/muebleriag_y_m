<?php
    session_start();
    
    if(isset($_SESSION['usuario'])){
        header('Location: modificar.php');
    }else{
        header('Location: login.php');
    }
?>
