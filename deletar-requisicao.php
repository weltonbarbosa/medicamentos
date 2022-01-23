<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilos.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Deletar Requisicao</title>
</head>
<body>

    <!--Iniciar e Verificar Sessão-->
    <?php
    //Iniciar sessão
    session_start();

    //Inserir verificador de sessão    
    include('verifica-sessao.php');
    ?>


    <!--Incluir Topo da Página e Menu do Operador-->
    <?php
        include('estrutura/header.php');
        include('estrutura/nav-operador.html');
    ?>



    <main id="main-oficial">
    <!--Dados com as informações-->
    <?php
         $codigoReqDeletar = $_GET['codigo_requisicao'];
         $nomePacienteDeletar = $_GET['nome_paciente'];
    ?>


    <form id="formulario-deletar-req" metho="post" action="deletar-requisicao-post">
        <p>Tem certeza que deseja excluir permanentemente a requisderererição do(a) paciente: 
            <br>
        <?php echo "$nomePacienteDeletar";?>?</p>
    <a href="deletar-requisicao-post?codigo_requisicao=<?php echo $codigoReqDeletar;?>"><input type="button" value="Confirmar Exclusão"></a>
    <input type="button" value="Não tenho certaza">
    </form> 



    </main>
    <!--Incluir Rodapé da Página-->
    <?php
        include('estrutura/footer.php');
    ?>



    <!--incluidr JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<style>
    #formulario-deletar-req{
        margin: 0 auto 0 auto;
        width: 630px;
        height: auto;
        padding: 25px;
        text-align: center;

    }

    
</style>
</html>