<?php
//CADASTRAR NOVO OPERADOR NO SISTEMA

//Iniciar sessão
session_start();

//Incluir a verificação
include('verifica-sessao.php');

//Banco de dados
$servidor = "localhost";
$adminServidor = "root";
$senhaServidor = "";
$bancoDeDados = "sms";

$conexao = mysqli_connect($servidor, $adminServidor, $senhaServidor, $bancoDeDados);

//Variaveis
$nomeDoOperador = mysqli_real_escape_string($conexao, strtoupper($_POST['nomeDoNovoOperador']));
$cpfDoOperador = mysqli_real_escape_string($conexao, $_POST['cpfDoNovoOperador']);
$nascDoOperador = mysqli_real_escape_string($conexao, $_POST['nascDoNovoOperador']);
$emailDoOperador = mysqli_real_escape_string($conexao, $_POST['emailDoNovoOperador']);
$senhaDoOperador = mysqli_real_escape_string($conexao, md5($_POST['senhaDoNovoOperador']));
$cpfDoCadastrador = $_SESSION['logado'];


//SQL
$sql = "INSERT INTO `operador_medicamentos`(`cpf_operador`, `nome_operador`, `email_operador`, `senha_operador`, `cpf_do_cadastrador`, `data_nasc_operador`) VALUES ('$cpfDoOperador', '$nomeDoOperador', '$emailDoOperador', '$senhaDoOperador', '$cpfDoCadastrador', '$nascDoOperador')";

//query
$query = mysqli_query($conexao, $sql);


    if($query){
        $_SESSION['novo-operador-cadastrado'] = true;
        header('Location: novo-operador.php');
    }

    else{

        $_SESSION['novo-operador-nao-cadastrado'] = true;
        header('Location: novo-operador.php');
    }



