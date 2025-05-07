<?php

function verificar_logado($logado)
{
	echo "false login"
	$login = false;

	if($logado === true){
		require_once 'conf.php';
		$login = true;
		echo "Login com sucesso no cabe.php"
		echo "<a href='#'>Fazer logout</a>";
	}
	else {
        $login = false;
        echo "Login com erro no cabe.php";
    }

    if($login !== true){
    	//header("refresh: 10; index.php");
    	echo "Login com erro no cabe.php";
    	echo "<a href='./index.php'>Voltar ao início</a><br>";
    }
}
verificar_logado($_SESSION['logado']);


?>