<?php
//Iniciar sessão
session_start();

//Incluir verificação de sessao
include_once('verifica-sessao.php');



//Variáveis  
$nome = strtoupper($_POST['nome']);
$nomeMae = strtoupper($_POST['nomeMae']);
$dataNasc = $_POST['dataNasc'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$usuarioLogadoAgora = $_SESSION['logado'];

//Incluir nossa conexão com o banco de dados
include_once('estrutura/conexao.php');

$sqlBusc = "SELECT * FROM 'operador_medicamentos' WHERE 'cpf_operador' = '$usuarioLogadoAgora'";

$queryBusc = mysqli_query($conexao, $sqlBusc);

$modeloDados = mysqli_fetch_assoc($queryBusc);

echo $modeloDados['cpf_operador'];

/*
//Nossa query
$sqlAlterarInfo = "UPDATE `operador_medicamentos` SET `nome_operador`='$nome',`nome_mae_operador`='$nomeMae',`data_nasc_operador`='$dataNasc',`email_operador`='$email',`senha_operador`='$senha' WHERE 'email_operador' = '$_SESSION['logado']'";

//Query de alteração
$sqlAlterarInfo = mysqli_query($conexao, $sqlAlterarInfo);

if($sqlAlterarInfo){
    $_SESSION['informacoes-alteradas'] = true;
    header('Location: minhas-informacoes.php');
    exit;
}
else{
    $_SESSION['informacoe-nao-alteradas'] = true;
    header('Location: minhas-informacoes.php');
    exit;
}
*/