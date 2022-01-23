<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Área de Login</title>
        <link rel="stylesheet" href="estilos.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

        <!--Incluiindo sessão-->
        <?php
            session_start();

            if(isset($_SESSION['logado'])){
                header('Location: painel.php');
                exit;
            }
        ?>

        <!--Incluir o header-->
        <?php
            include('estrutura/header.php');
        ?>

        <!--DIV DA IMAGEM E DO LOGIN-->

        <div id="imagem-area-login">
            <img src="estrutura/imagens/im.png" class="imagem-area-login">
        </div>

        <!--Formulário da Área de Login-->
        <form action="login-post.php" method="post" id="area-de-login" >
        <h2>Fazer Login</h2>

        <div class="notificacao-error-login">
            <!--Se aconteceter algum erro de login-->
            <?php
            if(!empty($_SESSION['nao_logado'])):
            ?>
                <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                <strong>Credenciais incorretas:</strong> Tente novamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>    
            <?php
            unset($_SESSION['nao_logado']);
            endif;
            ?>
         </div>


        <!--Inputs credenciais de login-->
        <input type="text" placeholder="Insira seu CPF" name="cpfOperador">
        <input type="password" placeholder="Insira sua Senha" name="senhaOperador">
        <input type="submit" value="Entrar no Sistema" id="botao-login">

        </form> 


    <!--Incluir o footer-->
    <?php
        include('estrutura/footer.php');
    ?>

    <!--Link javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <!--Esitlo da página em questão-->
    <style>

    .notificacao-error-login{
        width: 90%;
        margin: 0 auto 0 auto;

}


        #erroLogin{
            !background-color: #ef3c2d;
            color: white;
            width: 300px;
            height: auto;
            margin: 0 auto 10px auto;
            border-radius: 50px;
            border: 0px solid;

        }

            #erroLogin-h6{
                padding-top: 3px;
                padding-bottom: 3px;
                font-size: 14px;
            }

        .imagem-area-login{
            max-width: 300px;
        }

        #area-de-login{
            background-color: #40916c;
            width: 500px;
            height: auto;
            margin: 40px auto 0 auto;
            text-align: center;
            border-radius: 12px;
        }

        #area-de-login h2{
            text-align: center;
            padding-top: 25px;
            margin-bottom: 12px;
            color: white;
        }

        #area-de-login input{
            width: 300px;
            height: 30px;
            outline: none;
            border: 0px solid grey;
            height: 32px;
            border-radius: 3px;
            margin-top: 50px;
            font-size: 16px;
            text-align: center;
            margin: 5px auto 0 auto;

        }

        #area-de-login input:hover{ 
            box-shadow: 0px 0px 3px #6c92db;
        }

       #area-de-login #botao-login{
            background-color: #38b000;
            color: white;
            margin-top: 18px;
            margin-bottom: 30px;
        }

        #area-de-login #botao-login:hover{
            background-color: #008000;
        }



    </style>

</html>