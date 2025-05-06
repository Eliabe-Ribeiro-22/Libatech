<?php

function verificar_logado($logado)
{
	$login = false;
	echo "<script>alert('Verificar logado'</script>";

	if($logado === true){
		require_once 'conf.php';
		$login = true;
	}
	else {
        $login = false;
    }

    if($login !== true){
    	header("refresh: 10; index.php");
    }
}

verificar_logado($_SESSION['logado']);


?>