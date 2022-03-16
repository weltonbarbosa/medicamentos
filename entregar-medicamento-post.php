<?php

//VARIAVEIS
$codRequisicao = $_POST['codRequisicao'];
$nomeRecebedor = strtoupper($_POST['nomeDoRecebedor']);
$cpfDoRecebedor = $_POST['cpfDoRecebedor'];
$nascimentoDoRecebedor = date('d/m/Y', strtotime($_POST['nascimentoDoRecebedor']));
$telefoneDoRecebedor = $_POST['telefoneDoRecebedor'];
$observacao = $_POST['observacao'];
$nascimentoDoDespacho = date('d/m/Y', strtotime($_POST['nascimentoDoDespacho']));

//Estabelecendo Conexão com o banco de dados
include_once('estrutura/conexao.php');

if($conexao){
    echo "Conexão estabelecida com sucesso!<br>";
}

//Comando SQL
$sqlDespacho = "INSERT INTO `requisicao`(`nome_recebedor`) VALUES ('$nomeRecebedor') WHERE '`codigo_requisicao`' = '$nomeRecebedor'";

//Nossa requisição
$queryDespacho = mysqli_query($conexao, $sqlDespacho);

if($queryDespacho){
    echo "Deu certo!<br>";
}
else{
    echo "Ocorreu um erro!<br>";
}

//TESTE DE VERIFICAÇÃO DE VARIAVEIS TUDO OK!
echo "$nomeRecebedor <br>";
echo "$cpfDoRecebedor<br>";
echo "$nascimentoDoRecebedor<br>";
echo "$telefoneDoRecebedor<br>";
echo "$observacao<br>";
echo "$nascimentoDoDespacho<br>";
echo "$codRequisicao";



?>