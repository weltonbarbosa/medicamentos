<?php
//ALTERAR A REQUISIÇÃO POST

//Iniciar Sessão
session_start();

//Incluir verificação
include_once('verifica-sessao.php');

//VARIAVEIS

//Variaiveis do Paciente
$codigoRequisicao1 = $_POST['codigoDaRequisicao'];
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

//Conexão com o banco de dados
$servidor = "localhost";
$adminServidor = "root";
$senhaServidor = "";
$bancoDeDados = "sms";

$conexao = mysqli_connect($servidor, $adminServidor, $senhaServidor, $bancoDeDados);

//Comando SQL
$sql = "UPDATE `requisicao` SET `nome_paciente`='$nomeDoPaciente',`mae_paciente`='$maeDoPaciente',`cpf_paciente`='$cpfDoPaciente',`cns_paciente`='$cnsDoPaciente',`nascimento_paciente`='$nascimentoDoPaciente',`nome_responsavel`='$nomeDoResponsavel',`cpf_responsavel`='$cpfDoResponsavel',`cns_responsavel`='$cnsDoResponsavel',`nascimento_responsavel`=$nascimentoDoResponsavel,`telefone_responsavel`='$telefoneDoResponsavel',`nome_medicamento`='$nomeDoMedicamento',`quant_medicamento`='$quantidadeMedicamento',`observacao`='$observacao' WHERE `codigo_requisicao`='$codigoRequisicao1'";

//Requisição
$query = mysqli_query($conexao, $sql);

//Redirecionamento bifucardo
if($query){
    $_SESSION['modifif-req-ok'];
    header('Location: modificar-requisicao-post');
}
else{
    $_SESSION['falha-modif-req'];
    header('Location: login.php');
}