<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="estilos.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=[device-width], initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Minhas Informações</title>
</head>
<body>
    <!--Incluir cabeçalho-->
    <?php
        session_start();
        include_once('verifica-sessao.php');
        include_once('estrutura/header.php');
        include_once('estrutura/nav-operador.html');
        include_once('estrutura/mensagemNomeOperador.php');
    ?>

    <!--Incluir informações do banco de dados-->
    <?php
      
        include_once('estrutura/conexao.php');
      
        $sqlInfo = "SELECT * FROM 'operador_medicamentos'";
        
        $queryInfo = mysqli_query($conexao, $sql);

        $dados = mysqli_fetch_assoc($queryInfo);
    ?>

    <!--Iniciar main-->
    <main id="main-oficial">

    <!--Mensagem Alterações feitas com sucesso-->
    <?php
        if(isset($_SESSION['informacoes-alteradas'])):
    ?>
    <div class="alert alert-success" role="alert">
        <strong>Tudo ok!</strong> Suas informações foram alteradas com sucesso!
    </div> 
    <?php
        endif;
        unset($_SESSION['informacoes-alteradas']);
    ?>


    <?php
            if(isset($_SESSION['informacoes-nao-alteradas'])):
    ?>
        <div class="alert alert-success" role="alert">
            <strong>Algo deu errado!</strong> Não foi possível salvar as alterações.
        </div> 
    <?php
            endif;
            unset($_SESSION['informacoes-alteradas']);
    ?>

            <!--Formulario-->
        <form method="post" action="minhas-informacoes-post" class="form-control" id="formulario-minhas-informacoes">
            <h2>Alterar minhas informações</h2>
            <label>Nome completo: <input name="nome" type="text" value="<?php echo $dados['nome_operador'];?>" class="form-control" id="textoNome" required></label><br><br>
            <label>Nome da mãe: <input name="nomeMae" type="text" value="<?php echo $dados['nome_mae_operador'];?>" class="form-control" id="textoNome" required></label><br><br>
            <label>E-mail: <input name="email" type="text" value="<?php echo $dados['email_operador'];?>" class="form-control" id="textoNome" readonly></label><br><br>
            <label>CPF: <input type="text" value="<?php echo $dados['cpf_operador'];?>" name="cpfOperador" class="form-control" id="caixa2" readonly></label><br><br>
            <label>Data de nascimento: <input name="dataNasc" type="date" value="<?php echo $dados['data_nasc_operador'];?>" class="form-control" id="caixa2" required></label><br><br>
            <label>Senha atual ou nova senha: <input name="senha" type="password" placeholder="Insira ou crie uma nova senha" class="form-control" id="caixa2" required></label><br><br>
            <input type="submit" value="Salvar Alterações" id="botao" class="form-control">
        </form>
    </main>
    
    <!--Incluir o footer-->
    <?php
        include_once('estrutura/footer.php');
    ?>


    <!--ESTILOS DA PÁGINA EM QUESTÃO-->
    <style>

        #botao{
            background-color: green;
            color: white;
            width: 240px;
        }

        #caixa2{
            width: 240px;
        }

       body{
            background-color: #d8f3dc;
       }

       #formulario-minhas-informacoes{
           padding: 24px;
       }


       #textoNome{
           width: 540px;
       }
       #main-oficial {
            width: 900px;
            height: auto;;
            margin: 45px auto 0 auto;
            background-color: #d8f3dc;
            border-radius: none;
       }
    

    </style>

    <!--Incluir link JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>