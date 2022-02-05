<?php
//Iniciar Sessão
session_start();

//Verificar sessão
include('verifica-sessao.php');


//Incluir Conexão com banco de dados
$servidor = "localhost";
$adminServidor = "root";
$senhaServidor = "";
$bancoDeDados = "sms";

$conexao = mysqli_connect($servidor, $adminServidor, $senhaServidor, $bancoDeDados);

//Variáveis
$nomeDoNovoOperador = mysqli_real_escape_string($conexao, strtoupper($_POST['nomeDoNovoOperador']));
$cpfDoNovoOperador = mysqli_real_escape_string($conexao, $_POST['cpfDoNovoOperador']);
$emailDoNovoOperador = mysqli_real_escape_string($conexao, $_POST['emailDoNovoOperador']);
$senhaDoNovoOperador = mysqli_real_escape_string($conexao, md5($_POST['senhaDoNovoOperador']));

// Comando SQL
$sql = "UPDATE `operador_medicamentos` SET `nome_operador`= '$nomeDoNovoOperador',`email_operador`= '$emailDoNovoOperador',`senha_operador`= '$senhaDoNovoOperador' WHERE `cpf_operador`= '$cpfDoNovoOperador'";

//Nossa Requisição (Query)
$query = mysqli_query($conexao, $sql);

//Nossa condicional
if($query){
    $_SESSION['operador-alterado-com-sucesso'] = true;
    header('Location: buscar-operador.php');
}
else{
    echo "Erro!";
}