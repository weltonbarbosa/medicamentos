<?php

//Mostrar nome do Operador

//Iniciar sessão
//session_start();
if(!isset($_SESSION['logado'])){
    header('login.php');
}

//Conexão com o bano de dados
$servidor = "localhost";
$adminServidor = "root";
$senhaServidor = "";
$bancoDeDados = "sms";

$conexao = mysqli_connect($servidor, $adminServidor, $senhaServidor, $bancoDeDados);


//Variável da minha sessão
$operadorLogado = $_SESSION['logado'];

//Comando SQL
$sql = "SELECT * FROM `operador_medicamentos` WHERE `cpf_operador` = $operadorLogado";

//Requisição
$query = mysqli_query($conexao, $sql);

$row = mysqli_num_rows($query);

if($row == 1){

    //Puxando dados e mostrando dados
    while($dadosOperador = mysqli_fetch_assoc($query)){
        echo "Olá, " . ucfirst($dadosOperador['nome_operador']) ."!" . "<br>" . " São" . date('d/m/y') . ".";
    }
exit;
}

