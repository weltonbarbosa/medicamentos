<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    


<?php


$codigoUsuarioLogado =  $_SESSION['logado'];

$servidor = "localhost";
$admin = "root";
$senha = "";
$banco = "sms";

$conexao = mysqli_connect($servidor, $admin, $senha, $banco);

$sql = "SELECT * FROM `operador_medicamentos` WHERE `cpf_operador`= $codigoUsuarioLogado";

$query = mysqli_query($conexao, $sql);

$dados = mysqli_fetch_assoc($query);

?>

<!------------------------------------------------>
<div id="mensagemOperador" >
  <div class="alert alert-primary" role="alert">
    <?php echo "Olá, <strong> " . $dados['nome_operador']  . " </strong>, seja muito bem vindo(a)! São: " . date(' h:m:s \d\e d/m/Y') . ".";?>
  </div>
</div>

<style>
    #mensagemOperador{
      text-align: center;
      margin-top: 0px;
      margin-bottom: -18px;
    }
</style>




<!------------------------------------------------>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


