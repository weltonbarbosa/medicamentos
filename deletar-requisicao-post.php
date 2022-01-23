
    <!--Iniciar e Verificar Sessão-->
    <?php
    //Iniciar sessão
    session_start();

    //Inserir verificador de sessão    
    include('verifica-sessao.php');


    //Variável da requisição para deletar
    $codigoReqDeletar = $_GET['codigo_requisicao'];

    //Conexão com Banco de dados
    $servidor = "localhost";
    $adminServidor = "root";
    $senhaServidor = "";
    $bancoDeDados = "sms";

    $conexao = mysqli_connect($servidor, $adminServidor, $senhaServidor, $bancoDeDados);

    //Comando SQL
    $sql = "DELETE FROM `requisicao` WHERE `codigo_requisicao` = $codigoReqDeletar";

    //Minha requisição
    $query = mysqli_query($conexao, $sql);

    //Estrutura Condicional
    if($query){
        $_SESSION['req-deletada'];
        header('Location: painel.php');
    }
    else{
        //$_SESSION['req-nao-deletada'];
        header('Location: painel.php');
    }
