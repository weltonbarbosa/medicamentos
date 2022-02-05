<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
<?php

$emailUsuarioLogado =  $_SESSION['logado'];

$servidor = "localhost";
$admin = "root";
$senha = "";
$banco = "sms";

$conexao = mysqli_connect($servidor, $admin, $senha, $banco);

$sql = "SELECT * FROM `operador_medicamentos` WHERE `email_operador`= '$emailUsuarioLogado'";

$query = mysqli_query($conexao, $sql);

$dados = mysqli_fetch_assoc($query);

?>

<!------------------------------------------------>
<div id="mensagemOperador" >
  <div class="alert alert-primary" role="alert" id="mensagemBemVindo">
    <?php echo "Seja bem-vindo(a), <strong>" . $dados['nome_operador'] . "</strong>!";?>
  </div>
</div>

<style>
    #mensagemBemVindo{
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
      padding: 8px;
      
    }

    #mensagemOperador{
      text-align: center;
      margin: 0 auto 0 auto;
      margin-top: -16px;
      margin-bottom: -0px;
      width: auto;
      border-radius: 500px !important;

    }
</style>

<!------------------------------------------------>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


