<?php
//DEUS SEJA LOUVADO

if(!$_SESSION['logado']){
    header('Location: login.php');
    exit;
}
