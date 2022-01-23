<!DOCTYPE html>
<html>
    <head>
        <title>Editar Operador</title>
        <meta charset="utf-8">
        <link href="estilos.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

<!--Iniciar uma sessão-->
<?php  
    session_start();

    $_SESSION['pagina-edita'] = true;
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





<!------------------------------Formulário de Buscar Operador para Editar---------------------------------->
<div id="formulario-buscar-cpf">


<!--MENSAGEM DE ALTERAÇÃO-->
<?php
    if(isset($_SESSION['operador-alterado-com-sucesso'])):
?>

    <div class="alert alert-primary" role="alert">
        O operador foi editado com sucesso!
    </div>

<?php  
    unset($_SESSION['operador-alterado-com-sucesso']);
    endif;

?>

    <h3>Encontrar Operador</h3>
    <form action="alterar-operador.php" method="post">
    <input type="text" name="cpfOperador" placeholder="Digite o CPF do Operador" id="digitar-cpf">
    <input type="submit" value="Encontrar Operador" id="botao-encontrar">

</form>
</div>
<!--------------------------------------------------------------->

</main>

<!--Incluir o footer-->
<?php
    include('estrutura/footer.php');
?>

<!--Estilos da página em questão-->
<style>

#operador-editado{
    background-color: #4361ee;
    color: white;
    padding-top: 3px;
    padding-bottom: 3px;
    border-radius: 50px;
    margin-top: 0px;
    margin-bottom: 15px;
}


#formulario-buscar-cpf h3{
    margin-bottom: 18px;
}


#main-oficial{
    background-color: #d8f3dc;
    width: 480px;
    text-align: center;
    border-radius: 10px;
    margin-top: 80px;
    margin-bottom: 420px;
}

#formulario-buscar-cpf{
    margin: 10px auto 10px auto;
    padding: 18px;
    margin-top: 20px;
}

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
        height: 36px;
        border-radius: 3px;

    }

        input:hover{
            box-shadow: 0px 0px 3px #6c92db;
        }

    
    #digitar-cpf{
        width: 250px;
        text-align: center;
    }

    #botao-encontrar{
        padding-left: 12px;
        padding-right: 12px;
        background-color: green;
        color: white;
    }
    
        #botao-encontrar:hover{
            background: #55a630;
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