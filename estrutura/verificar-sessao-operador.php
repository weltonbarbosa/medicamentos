<?php
//VERIFICAR SESSÃO
if(!$_SESSION['operador']){
    header('Location: ./login-operador.php');
exit;
}
?>