<!DOCTYPE html>
<html>
    <head>
        <title> Sistema de Entrega de Medicamentos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

<?php
//Inicia a sessão
session_start();

//Verifica se o usuário está logo e o redireciona ao painel.php
if(isset($_SESSION['logado'])){
    header('Location: painel.php');
    exit;
}

?>
<!--Incluir o header-->
<?php
    include('estrutura/header.php');
?>

<!--Incluir Main-->
<main>

      
<form action="login-post" method="post">
    <h3>Realizar Login</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CPF</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cpfOperador" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senhaOperador" required>
  </div>
  <button type="submit" class="btn btn-primary">Entrar no sistema</button>
</form>


</main>

<!--Incluir o footer-->
<?php
    include('estrutura/footer.php');
?>

<!--Incluir o JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!--CSS-->
<style>
    
    form{
        background-color: none;
        margin-top: 80px;
        margin-bottom: 80PX;
    }
    
    .form-control{
        width: 100% !important;
    }

    body{
        background-color: #d8f3dc !important;
    }

    main{
        margin-top: 45px !important;
        width: 400px !important;
        margin: 0 auto 0 auto !important;
        text-align: center !important;
    }



</style>

</html>