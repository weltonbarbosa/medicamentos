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

//Variaiveis do Paciente
$nomeDoPaciente = $_POST['nomeDoPaciente'];
$maeDoPaciente = $_POST['maeDoPaciente'];
$cpfDoPaciente = $_POST['cpfDoPaciente'];
$cnsDoPaciente = $_POST['cnsDoPaciente'];
$nascimentoDoPaciente = $_POST['nascimentoDoPaciente'];

//Variaveis do Solicitante/Responsável
$nomeDoResponsavel = $_POST['nomeDoResponsavel'];
$cpfDoResponsavel = $_POST['cpfDoResponsavel'];
$cnsDoResponsavel = $_POST['cnsDoResponsavel'];
$nascimentoDoResponsavel = $_POST['nascimentoDoResponsavel'];
$telefoneDoResponsavel = $_POST['telefoneDoResponsavel'];

//Variaveis do medicamento
$nomeDoMedicamento = $_POST['nomeDoMedicamento'];
$quantidadeMedicamento = $_POST['quantidadeMedicamento'];

//Variável da observação
$observacao = $_POST['observacao'];

//Variável do CPF do Operador/Registrador
$operadorRegistrador =  $_SESSION['logado'];

//Comando SQL
$sql = "INSERT INTO `requisicao`(`nome_paciente`, `mae_paciente`, `cpf_paciente`, `cns_paciente`, `nascimento_paciente`, `nome_responsavel`, `cpf_responsavel`, `cns_responsavel`, `nascimento_responsavel`, `telefone_responsavel`, `nome_medicamento`, `quant_medicamento`, `observacao`, `cpf_operador_emissor`) VALUES ('$nomeDoPaciente', '$maeDoPaciente', '$cpfDoPaciente', '$cnsDoPaciente', '$nascimentoDoPaciente', '$nomeDoResponsavel', '$cpfDoResponsavel', '$cnsDoResponsavel', '$nascimentoDoResponsavel', '$telefoneDoResponsavel', '$nomeDoMedicamento', '$quantidadeMedicamento', '$observacao', '$operadorRegistrador')";

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
