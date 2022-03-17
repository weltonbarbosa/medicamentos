<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="estilos.css" type="text/css" rel="stylesheet">
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
        
    <h3><strong>Atenção! </strong></h3><br>
    <h3>A requisição será deletada permanentemente.</h3>
        
    <br>
        <h4>Número da requisição: <strong><?php echo "$codigoReqDeletar";?></strong>.</h4>
       <h4>Nome do(a) paciente: <strong><?php echo strtoupper("$nomePacienteDeletar");?></strong>.</h4>
       <br>
       <h5>Deseja continuar?</h5>
       <br>
    <a href="deletar-requisicao-post?codigo_requisicao=<?php echo $codigoReqDeletar;?>"><input type="button" value="Confirmar" id="botao-confirmar" class="botao-op"></a>
    <a href="painel.php"><input type="button" value="Cancelar" id="botao-cancelar" class="botao-op"></a>
    </form> 

    </main>
    <!--Incluir Rodapé da Página-->
    <?php
        include('estrutura/footer.php');
    ?>

    <!--incluidr JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

<!--ESTILOS DA PÁGINA EM QUESTÃO-->
<style>

    #formulario-deletar-req{
        margin: 0 auto 0 auto;
    }
    
    #botao-confirmar{
        background-color: green;
    }

    #botao-cancelar{
        background-color: red;
    }

    #botao-confirmar:hover{
        opacity: 0.9;
    }
    
    #botao-cancelar:hover{
        opacity: 0.9;
    }
    .botao-op{
        width: 200px;
        height: 40px;
        border: none;
        color: white;
        border-radius: 3px;
    }

    
    #formulario-deletar-req{
        margin: 0 auto 0 auto;
        width: 800px;
        height: auto;
        padding: 28px;
        padding-bottom: 50px; 
        text-align: center;
        background-color: white;
        border-radius: 34px;
    }
        
    #main-oficial{
       margin: 0 auto 0 auto;
       max-width: 1800px;
       width: 1500px;
       height: auto;
       padding: 25px;
   }

   body{
       background-color: #d8f3dc;
   }


    
</style>
</html>