<?php
//Inicia a sessão
session_start();

if(isset($_SESSION["logado"])){
    unset($_SESSION["logado"]);
}

header('Location: login.php');
?>