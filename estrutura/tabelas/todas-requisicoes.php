<?php

<!--TODAS AS REQUISIÇÕES-->
<table class="todas-requisicoes">
    <h3>Todas as requisições</h3>
	<tr>
		<th>Cód.</th>
		<th>Nome Paciente</th>
		<th>CPF do Paciente</th>
		<th>Data de Nasc.</th>
        <th>Medicamento</th>
		<th>Quant.</th>
		<th>Data de Emissão</th>
        <th>Operador Emissão</th>
        <th>Status</th>
        <th>Ações</th>

	</tr>

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

	<tr>
		<td><?php echo $dados['codigo_requisicao'];?></td>
		<td><?php echo $dados['nome_paciente'];?></td>
        <td><?php echo $dados['cpf_paciente'];?></td>
		<td><?php echo $dados['nascimento_paciente'];?></td>
		<td><?php echo $dados['nome_medicamento'];?></td>
        <td><?php echo $dados['quant_medicamento'];?></td>
        <td><?php echo $dados['data_emissao_requisicao'];?></td>
        <td><?php echo $dados['cpf_operador_emissor'];?></td>
        <td><?php echo $dados['status_requisicao'];?></td>
        <td><input type="submit" value="Editar" id="editar-req"> | <input type="submit" value="Deletar" id="deletar-req"> | <input type="submit" value="Imprimir" id="deletar-req"> </td>
        

<?php
    endwhile;
    endif;
?>
	</tr>

</table>