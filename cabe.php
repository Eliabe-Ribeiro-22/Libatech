<?php

function verificar_logado($logado)
{
	$login = false;

	if($logado === true){
		require_once 'conf.php';
		$login = true;
		echo "<a href='#'>Fazer logout</a>";
	}
	else {
        $login = false;
    }

    if($login !== true){
    	header("refresh: 10; index.php");
    	echo "<a href='./index.php'>Voltar ao início</a>";
    }
}

verificar_logado($_SESSION['logado']);


?>