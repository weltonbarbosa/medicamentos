<!DOCTYPE html>
<html>
    <head>
        <title></title>
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

<main>

<h2>abalou!</h2>



</main>


<!--Incluir o footer-->
<?php
    include('estrutura/footer.php');
?>

</html>
