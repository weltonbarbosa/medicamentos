<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar novo Operador</title>
        <meta charset="utf-8">
        <link href="estilos.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

<!--Iniciar uma sessão-->
<?php  
    session_start();
?>

<!--Incluir a verificação de sessão-->
<?php
    include('verifica-sessao.php');
?>

<!--Incluir o header-->
<?php
    include('estrutura/header.php');
?>

<!--Incluir o menu de navegação-->
<?php
    include('estrutura/nav-operador.html');
?>

<!--main padrão de todos os sites-->
<main id="main-oficial">

<!--Formulário de cadastro de requisição de medicamento-->
<form method="POST" action="novo-operador-post.php" id="formulario-solicitacao-requisicao">
    <h2>Cadastrar Operador</h2>

    <!--Informações do paciente-->
    <h3>Informações do Novo Operador</h3><br>

    <!--Mensagem de erro-->
    <?php
        if(!empty($_SESSION['operador-nao-cadastrado'])):
    ?>
    <div>Preencha todos os campos!</div>
    <?php
        unset($_SESSION['operador-nao-cadastrado']);
    endif;
    ?>


    <!--Mensagem de Cadastro com sucesso-->
    <?php
        if(!empty($_SESSION['novo-operador-cadastrado'])):
    ?>
    
    <div class="alert alert-primary  alert-dismissible fade show" role="alert">
    <strong>Maravilha!</strong> O novo operador foi cadastrado com sucesso em nosso banco de dados!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php
        unset($_SESSION['novo-operador-cadastrado']);
    endif;
    ?>


    <!--Mensagem de Erro ao cadastrar novo Operador-->
    <?php
        if(!empty($_SESSION['novo-operador-nao-cadastrado'])):
    ?>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Erro!</strong> O CPF informado já está cadastrado.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php
        unset($_SESSION['novo-operador-nao-cadastrado']);
        endif;
    ?>

    <label>Nome completo:</label><br>
    <input type="text" name="nomeDoNovoOperador" id="label1"  required><br><br>

    <label>CPF do operador:</label><br>
    <input type="text" name="cpfDoNovoOperador" required><br><br>

    <label>E-mail do operador:</label><br>
    <input type="email" name="emailDoNovoOperador" id="label1" required><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senhaDoNovoOperador" required><br><br>

    <!--Botões Registrar e Reset-->
    <input type="submit" value="Cadastrar Novo Operador" id="cadastrar-novo-operador">
    <input type="reset" value="Limpar todos os campos" id="botao-reset">
    

</form>

<!------------------------------------------------------------------->
<!--Tabela de todos os -->

<h5>Confira abaixo todos os operadores cadastrados:</h5>
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col" title="Código do Operador">Código (CPF)</th>
      <th scope="col">Nome Completo</th>
      <th scope="col">E-mail</th>
      <th scope="col">Data de Cadastro</th>
      <th scope="col">Cód. Cadastrador</td>
    </tr>
  </thead>
  <tbody>

<?php
    //IMPORTAR OS OPERADORE DO BANCO DE DADOS

    //Variaveis
    $servidor = "localhost";
    $admin = "root";
    $senha = "";
    $bancoDeDados = "sms";

    //Estabelecendo nossa conexão
    $conexao = mysqli_connect($servidor, $admin, $senha, $bancoDeDados);

    //Consulta SQL
    $sql = "SELECT * FROM `operador_medicamentos`";

    //Nossa requisição
    $query = mysqli_query($conexao, $sql);

    //Nossa condicional
    while($dados = mysqli_fetch_assoc($query)):
    
?>

<!--Continuação da planilha-->
    <tr>
      <th scope="row"><?php echo $dados['cpf_operador'];?></th>
      <td><?php echo $dados['nome_operador'];?></td>
      <td><?php echo $dados['email_operador'];?></td>
      <td><?php echo date('d/m/Y', strtotime($dados['data_de_cadastro']));?></td>
      <td><?php echo $dados['cpf_do_cadastrador'];?></td>

    </tr>

    <!--Fim do While-->
    <?php
        endwhile;
    ?>

</table>




</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!--Incluir o footer-->
<?php
    include('estrutura/footer.php');
?>



<!--Estilos da página em questão-->
<style>


    #msg-novo-operador-cadastrado{
        margin: 0 auto 0 auto;
        background-color: #00b4d8;
        color: white;
        padding-top: 3px;
        padding-bottom: 3px;
        text-align: center;

    }


    #formulario-solicitacao-requisicao{
        padding: 35px;
        padding-top: 30px;
        background-color: #d8f3dc;
     
    }

    input{
        outline: none;
        border: 1px solid grey;
        padding-left: 5px;
        height: 32px;
        border-radius: 3px;

    }

        input:hover{
            box-shadow: 0px 0px 3px #6c92db;
        }

    #label1{
        width: 550px;
    }
    

    #cadastrar-novo-operador{
        background-color: green;
        text-align: center;
        padding-left: 8px;
        padding-right: 8px;
        color: white;
        border: 0px solid;
    }

        #cadastrar-novo-operador:hover{
            background-color: ForestGreen;
            text-align: center;
            color: white;
            border: 0px solid;
        }
    


    #botao-reset{
        background-color: DarkRed;
        color: white;
        padding-left: 8px;
        padding-right: 8px;
        border: 0px solid;
        margin-bottom: 30px;
    }

        #botao-reset:hover{
            background-color: #b30000;
        }

</style>

</html>