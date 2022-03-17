<!DOCTYPE html>
<html>
    <head>
        <title>Criar uma nova requisição</title>
        <meta charset="utf-8">
        <link href="estilos.css" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

<!--Iniciar uma sessão-->
<?php  
    session_start();
    include('verifica-sessao.php');
    include('estrutura/header.php');
    include('estrutura/nav-operador.html');
    include('estrutura/mensagemNomeOperador.php');
?>


<!--main padrão de todos os sites-->
<main id="main-oficial">


<!--Alert Requsição cadastrada com sucesso-->
<?php
    if(isset($_SESSION['requisicao-registrada'])):
?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Requisição cadastrada!</strong> A requisição foi cadastrada com sucesso em nosso banco de dados.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
    endif;
    unset($_SESSION['requisicao-registrada']);
?>



<!--Alert Requsição cadastrada com sucesso-->
<?php
    if(isset($_SESSION['requisicao-nao-registrada'])):
?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Algo deu errado!</strong> Não foi possivel registrar esta requisição. Tente novamente ou fale com o administrador.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
    endif;
    //unset($_SESSION['requisicao-nao-registrada']);
?>

<!--Script para mascara CPF-->
<script>
        function mascara_cpf(){
            var cpf = document.getElementById('cpf1');
            if(cpf.value.length == 3 || cpf.value.length == 7){
                cpf.value += "." 
            } 
            else if(cpf.value.length == 11){
                cpf.value += "-"
            }
        }
    </script>


<script>
        function mascara_cpf2(){
            var cpf = document.getElementById('cpf2');
            if(cpf.value.length == 3 || cpf.value.length == 7){
                cpf.value += "." 
            } 
            else if(cpf.value.length == 11){
                cpf.value += "-"
            }
        }
    </script>


<!--Script para mascara CNS-->

<script>
    function mascara_cns(){
        var cns = document.getElementById('cns1');
        if(cns.value.lenght == 3 || cns.value.lenght == 8 || cns.value.lenght == 12){
            cns.value += ".";
        }

    }
</script>




<!--Formulário de cadastro de requisição de medicamento-->
<form method="POST" action="requisicao-post.php" id="formulario-solicitacao-requisicao">
    <h2>Solicitação de Medicamento</h2>

    <!--Informações do paciente-->
    <h3>Informações do Paciente</h3>
    <h6><b>Todos os campos são obrigatórios.</b></h6>
    <br>
    <label>Nome completo do paciente:</label><br>
    <input type="text" name="nomeDoPaciente"   class="form-control" required><br>

    <label>Nome completo da mãe do paciente:</label><br>
    <input type="text" name="maeDoPaciente"  class="form-control" required><br>

    <label>CPF do paciente:</label><br>
    <input type="text" name="cpfDoPaciente" class="form-control" maxlength="14" onkeyup="mascara_cpf()" id="cpf1" required><br>

    <label>Cartão do SUS do paciente:</label><br>
    <input type="text" name="cnsDoPaciente" maxlength="18" onkeyup="mascara_cns()" id="cns1" class="form-control"  required><br>

    <label>Data de nascimento do paciente:</label><br>
    <input type="date" name="nascimentoDoPaciente" class="form-control" id="data-nasc" required><br>

    <br>
    <hr>
    <br>


     <!--Informações do Responsável/Solicitante-->
     <h3>Informações do Solicitante/Responspável</h3>
     <h6><b>Todos os campos são obrigatórios.</b></h6>
    <br>
    <label>Nome completo do responsável:</label><br>
    <input type="text" name="nomeDoResponsavel" class="form-control"  required><br>

    <label>CPF do responsável:</label><br>
    <input type="text" name="cpfDoResponsavel" class="form-control"  maxlength="14" onkeyup="mascara_cpf2()" id="cpf2" required><br>

    <label>CNS do responsável:</label><br>
    <input type="text" name="cnsDoResponsavel" class="form-control" id="cns2" required><br>

    <label>Data de nascimento do responsável:</label><br>
    <input type="date" name="nascimentoDoResponsavel" class="form-control" id="data-nasc"  required><br>

    <label>Telefone do Responsável:</label><br>
    <input type="text" name="telefoneDoResponsavel" class="form-control" id="data-nasc"  required><br>

    
    <br>
    <hr>
    <br>

    <!--Informações do Medicamento-->
    <h3>Medicamento</h3>
     <h5>Os campos não são obrigatórios.</h5>
     <br>

    <label>Nome do medicamento:</label><br>
    <input type="text" name="nomeDoMedicamento" class="form-control" ><br>

    <label>Quantidade (caixa):</label><br>
    <input type="int" name="quantidadeMedicamento" class="form-control" id="quant"><br>


    <!--Observação-->
    <label>Observação:</label><br>
    <textarea id="observacao-solicitacao" name="observacao" class="form-control" maxlength="180" placeholder="Limite: 180 caracteres..."></textarea><br><br>


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

   #cpf1, #data-nasc, #cpf2, #cns1, #cns2, #quant{
       width: 350px;
   }

   .form-control{
        height: 43px;
        font-size: 18px;
        width: 100%;
    }
    body{
        background-color: #d8f3dc;
    }

    #formulario-solicitacao-requisicao{
        padding: 22px;
        border-radius: 20px;
        background-color: white;
        /*background-image: linear-gradient(to left, white, #d8f3dc 80%, white)*/
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
    



    #registrar-requisicao, #botao-reset{
        width: 300px;
        height: 45px;
        margin: 0 auto 0 auto;
        padding-top: 12px;
        padding-bottom: 12px;
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
        padding-left: 10px;
        padding-right: 8px;
        border: 0px solid;
    }

        #botao-reset:hover{
            background-color: #b30000;
        }

</style>

</html>