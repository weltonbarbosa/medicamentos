<!DOCTYPE html>
<html>
    <head>
    <link href="estilos.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Painel</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">  
    </head>

<?php
    //Inicia a sessão
    session_start();
    //Verifica sessão
    include('verifica-sessao.php');
?>

<!--Incluindo o cabeçalho do site-->
<?php
    //Incluir o header da página
    include_once('estrutura/header.php');
    include_once('estrutura/nav-operador.html');
    include_once('estrutura/mensagemNomeOperador.php'); 
?>

<!--Main oficial-->
<main id="main-oficial" >
   
<!-------------------------------------------->
<table class="table table-success table-striped" id="tabela-principal">
    <h4>Requisições</h4>
  <thead class="table-dark">
    <tr>
      <th scope="col">Cód.</th>
      <th scope="col">Nome completo do paciente</th>
      <th scope="col">CPF</th>
      <th scope="col">Data de Nasc.</th>
      <th scope="col">Medicamento</th>
      <th scope="col">Data de Emissão</th>
      <th scope="col">Ações</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>

    <?php
        if(!empty($_SESSION['logado'])):

            //CONEXÃO COM O BANCO DE DADOS
        
            $servidor = "localhost";
            $adminServidor = "root";
            $senhaServidor = "";
            $bancoDeDados = "sms";
        
            $conexao = mysqli_connect($servidor, $adminServidor, $senhaServidor, $bancoDeDados);
        
            $sql = "SELECT * FROM `requisicao`";
            
            $query = mysqli_query($conexao, $sql);

        while($dados = mysqli_fetch_assoc($query)):
    ?>


        <tbody>
            <tr>
                <th scope="row"><?php echo $dados['codigo_requisicao'];?></th>
                <td><?php echo $dados['nome_paciente'];?></td>
                <td><?php echo $dados['cpf_paciente'];?></td>
                <td><?php echo date('d/m/Y', strtotime($dados['nascimento_paciente']));?></td>
                <td><?php echo $dados['nome_medicamento'];?></td>
                <td><?php echo $dados['quant_medicamento'];?></td>
                <td><?php echo $dados['status_requisicao'];?></td>
                <td>
                    <a href="modificar-requisicao?codigo_requisicao=<?php echo $dados['codigo_requisicao'];?>" ><input type="submit" value="Editar" name="editar-req" class="btn btn-warning"></a>  
                    <a href="deletar-requisicao?codigo_requisicao=<?php echo $dados['codigo_requisicao'];?>&nome_paciente=<?php echo $dados['nome_paciente'];?>"><input type="submit" value="Deletar"  name="deletar-req" class="btn btn-danger"></a>
                    <a href="deletar-requisicao?codigo_requisicao=<?php echo $dados['codigo_requisicao'];?>&nome_paciente=<?php echo $dados['nome_paciente'];?>"><input type="submit" value="Imprimir"  name="deletar-req" class="btn btn-primary"></a>  
                    <a href="deletar-requisicao?codigo_requisicao=<?php echo $dados['codigo_requisicao'];?>&nome_paciente=<?php echo $dados['nome_paciente'];?>"><input type="submit" value="Entregar" name="entregar-med" class="btn btn-success"></td></a>
                
                </td>
            </tr>
        </tbody>
        	
<?php
    endwhile;
    endif;
?>
	</tr>
    
</table>

</main>

<!---->
<main>



<!--Script JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--Incluind o rodapédo site-->
<?php
    //include o footer da Página
    require_once('estrutura/footer.php');
?>

<!--estiolos da página-->
<style>

#tabela-principal{
    text-align: center !important;
}

#req-deletada{
    background-color: #c44536;
    color: white;
    margin: 0 auto 0 auto;
    text-align: center;
    width: 550px;
    border-radius: 50px;
}

.botao-acao{
    padding-left: 5px;
    padding-right: 5px;
    font-size: 13px;
    border: none;
}

.botao-acao:hover{
    opacity: 0.8;
}

    #editar-req{
        background-color: #f9844a;
        color: white;
    }

    #deletar-req{
        background-color: #f94144;
        color: white;
    }

    #imprimir-req{
        background-color: #4d908e;
        color: white;
    }

    .todas-requisicoes{
        background-color: #1b4332;
        border-radius: 50px;
        border: 1px solid black;
        margin: 0px auto 0 auto;
        /*width: 2500px;*/
    }

    /*Colunas */
    .todas-requisicoes td{
        border: 2px solid #b7e4c7;
        padding-top: 3px;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 3px;
        font-size: 13px;
        
    }

    /*Resultados Linhas*/
    .todas-requisicoes tr{
        background-color: #95d5b2;
        text-align: center;
        padding: 4px 4px 4px 4px;
        border: 1px solid black;
    }

        .todas-requisicoes tr:hover{
            background-color: #99e2b4;
        }

    /*Topo da tabela */
    .todas-requisicoes tr th{
        background-color: #1b4332;
        color: white;
        border: 2px solid #b7e4c7;
        text-align: center;
        padding-top: 5px;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 2px;
        font-size: 14px;
    }



    #main-oficial{
       
        max-width: 1800px;
        width: 1500px;
        height: auto;
        padding: 25px;
    }

    body{
        background-color: #d8f3dc;
    }

</style>
</html>