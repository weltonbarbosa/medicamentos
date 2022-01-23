<!DOCTYPE html>
<html>
    <head>
        <title>Requisição</title>
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
<form method="POST" action="requisicao-post.php" id="formulario-solicitacao-requisicao">
    <h2>Solicitação de Medicamento</h2>

    <!--Informações do paciente-->
    <h3>Informações do Paciente</h3>
    <label>Nome completo do paciente:</label><br>
    <input type="text" name="nomeDoPaciente" id="label1" required><br><br>

    <label>Nome completo da mãe do paciente:</label><br>
    <input type="text" name="maeDoPaciente" id="label1" required><br><br>

    <label>CPF do paciente:</label><br>
    <input type="text" name="cpfDoPaciente" required><br><br>

    <label>Cartão do SUS do paciente:</label><br>
    <input type="text" name="cnsDoPaciente" required><br><br>

    <label>Data de nascimento do paciente:</label><br>
    <input type="date" name="nascimentoDoPaciente" required><br><br>

    <hr>


     <!--Informações do Responsável/Solicitante-->
     <h3>Informações do Solicitante/Responspável</h3>
     <h5>Os campos não são obrigatórios.</h5>

    <label>Nome completo do responsável:</label><br>
    <input type="text" name="nomeDoResponsavel" required><br><br>

    <label>CPF do responsável:</label><br>
    <input type="text" name="cpfDoResponsavel" required><br><br>

    <label>CNS do responsável:</label><br>
    <input type="text" name="cnsDoResponsavel" required><br><br>

    <label>CPF do responsável:</label><br>
    <input type="date" name="nascimentoDoResponsavel" required><br><br>

    <label>Telefone do Responsável:</label><br>
    <input type="text" name="telefoneDoResponsavel" required><br>


    
    <br>
    <hr>
    <br>

    <!--Informações do Medicamento-->
    <h3>Medicamento</h3>
     <h5>Os campos não são obrigatórios.</h5>

    <label>Nome do medicamento:</label><br>
    <input type="text" name="nomeDoMedicamento"><br><br>

    <label>Quantidade (caixa):</label><br>
    <input type="int" name="quantidadeMedicamento"><br><br>


    <!--Observação-->
    <textarea id="observacao-solicitacao" name="observacao"></textarea><br><br>


    <!--Botões Registrar e Reset-->
    <input type="submit" value="Registrar Medicamento" id="registrar-requisicao">
    <input type="reset" value="Limpar todos os campos" id="botao-reset">
    





</form>


</main>






<!--Incluir o footer-->
<?php
    include('estrutura/footer.php');
?>



<!--Estilos da página em questão-->
<style>
    #formulario-solicitacao-requisicao{
        padding: 18px;
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
    

    #registrar-requisicao{
        background-color: green;
        text-align: center;
        padding-left: 8px;
        padding-right: 8px;
        color: white;
        border: 0px solid;
    }

        #registrar-requisicao:hover{
            background-color: ForestGreen;
            text-align: center;
            color: white;
            border: 0px solid;
        }
    




        #observacao-solicitacao{
            width: 500px;
            height: 100px;
            outline: none;
            padding: 5px;
        }





    #botao-reset{
        background-color: DarkRed;
        color: white;
        padding-left: 8px;
        padding-right: 8px;
        border: 0px solid;
    }

        #botao-reset:hover{
            background-color: #b30000;
        }

</style>

</html>