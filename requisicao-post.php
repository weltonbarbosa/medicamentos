<?php
//Iniciar Sessão
session_start();

//Incluir verificação
include_once('verifica-sessao.php');

//Conexão com o banco de dados
$servidor = "localhost";
$adminServidor = "root";
$senhaServidor = "";
$bancoDeDados = "sms";

$conexao = mysqli_connect($servidor, $adminServidor, $senhaServidor, $bancoDeDados);

//VARIAVEIS

////////////////////////////////////////////PROCESSO PARA BUSCAR O NOME DO OPERADOR ONLINE//////////////////////////////////////////////

//Variável do CPF do Operador/Registrador
$operadorRegistrador =  $_SESSION['logado'];

//Comando SQL para buscar o nome
$sqlOperador = "SELECT * FROM `operador_medicamentos` WHERE `cpf_operador` = $operadorRegistrador";

//Requisição
$queryOperador = mysqli_query($conexao, $sqlOperador);

$fetchAssocOperador = mysqli_fetch_assoc($queryOperador);

$nomeOperadorRegistrador = $fetchAssocOperador['nome_operador'];


//Variaiveis do Paciente
$nomeDoPaciente = strtoupper($_POST['nomeDoPaciente']);
$maeDoPaciente = strtoupper($_POST['maeDoPaciente']);
$cpfDoPaciente = $_POST['cpfDoPaciente'];
$cnsDoPaciente = $_POST['cnsDoPaciente'];
$nascimentoDoPaciente = $_POST['nascimentoDoPaciente'];

//Variaveis do Solicitante/Responsável
$nomeDoResponsavel = strtoupper($_POST['nomeDoResponsavel']);
$cpfDoResponsavel = $_POST['cpfDoResponsavel'];
$cnsDoResponsavel = $_POST['cnsDoResponsavel'];
$nascimentoDoResponsavel = strtoupper($_POST['nascimentoDoResponsavel']);
$telefoneDoResponsavel = $_POST['telefoneDoResponsavel'];

//Variaveis do medicamento
$nomeDoMedicamento = strtoupper($_POST['nomeDoMedicamento']);
$quantidadeMedicamento = $_POST['quantidadeMedicamento'];

//Variável da observação
$observacao = strtoupper($_POST['observacao']);

//Variável do CPF do Operador/Registrador
$operadorRegistrador =  $_SESSION['logado'];

//Comando SQL
$sql = "INSERT INTO `requisicao`(`nome_paciente`, `mae_paciente`, `cpf_paciente`, `cns_paciente`, `nascimento_paciente`, `nome_responsavel`, `cpf_responsavel`, `cns_responsavel`, `nascimento_responsavel`, `telefone_responsavel`, `nome_medicamento`, `quant_medicamento`, `observacao`, `cpf_operador_emissor`, `nome_operador_registrador`) VALUES ('$nomeDoPaciente', '$maeDoPaciente', '$cpfDoPaciente', '$cnsDoPaciente', '$nascimentoDoPaciente', '$nomeDoResponsavel', '$cpfDoResponsavel', '$cnsDoResponsavel', '$nascimentoDoResponsavel', '$telefoneDoResponsavel', '$nomeDoMedicamento', '$quantidadeMedicamento', '$observacao', '$operadorRegistrador', '$nomeOperadorRegistrador')";

//Requisição
$query = mysqli_query($conexao, $sql);

if($query){
    $_SESSION['requisicao-registrada'];
    header('Location: requisicao.php');
}
else{
    $_SESSION['requisicao-nao-registrada'];
    header('Location: requisicao.php');
}
