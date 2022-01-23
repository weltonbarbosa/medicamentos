<?php
//SISTEMA DE POSICIONAMENTO DAS AÇÕES DE REQUIRIMENTOS

//Iniciar Sessão
session_start();

//Incluir Verificação de Sessão
require('verifica-sessao.php');



//Se o botão EDITAR for clicado
if(isset($_POST['editar-req'])):
    echo "O CPF é este: " . $dados['cpf_operador'] ".";
endif;

//Se o botão EXCLUIR for clicado
if(isset($_POST['deletar-req'])):
    echo "O botao EXCLUIR foi clicado!";
endif;

//Se o botão IMPRIMIR for clicado
if(isset($_POST['imprimir-req'])):
    echo "O botao IMPRIMIR foi clicado!";
endif;

