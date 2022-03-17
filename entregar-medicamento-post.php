<?php

//VARIAVEIS
$codRequisicao = $_POST['codRequisicao'];
$nomeRecebedor = strtoupper($_POST['nomeDoRecebedor']);
$cpfDoRecebedor = $_POST['cpfDoRecebedor'];
$nascimentoDoRecebedor = $_POST['nascimentoDoRecebedor'];
$telefoneDoRecebedor = $_POST['telefoneDoRecebedor'];
$observacao = $_POST['observacao'];
$dataDoDespacho = $_POST['dataDoDespacho'];

//Estabelecendo Conexão com o banco de dados
include_once('estrutura/conexao.php');

if($conexao){
    echo "Conexão estabelecida com sucesso!<br>";
}

//Comando SQL
$sqlDespacho = "UPDATE `requisicao` SET `nome_recebedor` = '$nomeRecebedor', `cpf_recebedor` = '$cpfDoRecebedor', `nascimento_recebedor` = '$nascimentoDoRecebedor', `telefone_recebedor` = '$telefoneDoRecebedor', `observacao_recebedor` = '$observacao', `data_despacho` = '$dataDoDespacho' WHERE `requisicao`.`codigo_requisicao` = 15";
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
echo "$dataDoDespacho<br>";
echo "$codRequisicao";



?>