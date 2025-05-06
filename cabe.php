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


if(isset($_POST)){
	// armazena a variavel email em $email
	$email = $_POST['email'];
	// limpando espaços em branco antes e depois do email
	$email = trim($email);

	// armazena a variavel senha em $senha
	$senha = $_POST['senha'];
	// limpando espaços em branco antes e depois de senha	
	$senha = trim($senha);

	

}

?>