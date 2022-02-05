<?php
session_start();

//ALGORITMO DE PROCESSAMENTO DE LOGIN

//Conexão com o Banco de dados
$servidor = "localhost";
$adminServidor = "root";
$senhaServidor = "";
$bancoDeDados = "sms";

$conexao = mysqli_connect($servidor, $adminServidor, $senhaServidor, $bancoDeDados);

//Variáveis
$emailOperador = mysqli_real_escape_string($conexao, $_POST['emailOperador']);
$senhaOperador = mysqli_real_escape_string($conexao, md5($_POST['senhaOperador']));

//Comando SQL que Selecionará 
$sql = "SELECT * FROM `operador_medicamentos` WHERE `email_operador` = '$emailOperador' AND `senha_operador`= '$senhaOperador'";

//Requisição do nosso comando SQL
$query = mysqli_query($conexao, $sql);

//Contando a quantidade de linhas da nossa requisição (query)
$row = mysqli_num_rows($query);

//Nossa condicional
if($row == 1){
    $_SESSION['logado'] = $emailOperador;
    header('Location: painel.php');
    exit();
}
else{
    $_SESSION['nao_logado'] = true;
    header('Location: login.php');
    exit();
}