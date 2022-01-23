<?php

//CONEXÃO COM O BANCO DE DADOS

$servidor = "localhost";
$adminServidor = "root";
$senhaServidor = "";
$bancoDeDados = "sms";

$conexao = mysqli_connect($servidor, $adminServidor, $senhaServidor, $bancoDeDados);

/*
if($conexao){
    echo "Conexçao estelecida com sucesso";
}
else{
    echo "Falha na conexão!";
}*/