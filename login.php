<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Libetech - Sistema de Login</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
</head>
<body>

	<header>
		<nav>
			<ul>
				<li><a href="./index.php">Início</a></li>
				<li><a href="#">Quem somos</a></li>
				<li><a href="./produtos.php">Produtos</a></li>
				<li><a href="./login.php">Fazer login</a></li>
				<li><a href="#">Cadastrar</a></li>			
			</ul>
		</nav>	
	</header>
	
	<main>
		<h1>Fazer Login</h1>
		<h2>
			Por gentileza, insira seu email e senha para acessar a área logada
		</h2>
		<form method="POST" onsubmit="return validaFormulario()">
			<label>Email:</label>
			<input type="email" name="email" id="email">
			<label>Senha: </label>
			<input type="password" name="senha" id="senha">
			<input type="submit" name="btnEnviar" id="btnEnviar" placeholder="enviar" value="Enviar">
		</form>
	</main>

	<footer>Rodapé do site</footer>

	<script type="text/javascript" src="assets/js/login.js"></script>
</body>
</html>

<?php
//sem usar config nem cabe.php
$_SESSION["logado"] = false;
//require_once "./cabe.php";

//Funcoes para incluir dados através de $_POST
function post_usuario()
{
    if (isset($_POST['usuario'])) {
        $usuario = $_POST['usuario'];
        return $usuario;
    }
}

function post_senha()
{
    if (isset($_POST['senha'])) {
        $senha = $_POST['senha'];
        return $senha;
    }
}

// se tiver algum dado via POST
if(isset($_POST)){
	// armazena a variavel email em $email
	$email = $_POST['email'];
	// limpando espaços em branco antes e depois do email
	$email = trim($email);
	echo $email;

	// armazena a variavel senha em $senha
	$senha = $_POST['senha'];
	// limpando espaços em branco antes e depois de senha	
	$senha = trim($senha);
	echo $senha;

	//Funcao dos codigos abaixo:   permitir o login de mais de um usuario. 
  	// Aqui eu pesquiso na array usuarios,  o usuario informado por quem acessa a tela de login.
	//$key = array_search($_SESSION['usuarios'], array_column($_SESSION['usuarios'], 'usuario'));

	//$usuarios = [
//	1 => [
//		"email" => "teste@gmail.com",
//		"senha" => "1234",
//	]
//	2 => [
//		"email" => "eliaberibeiro06@gmail.com",
		//"senha" => "1234",
//	]
//];
		$usuarios = [
			1 => [
				"email" => "teste@gmail.com",
				"senha" => "1234",
			],
			2 => [
				"email" => "eliaberibeiro06@gmail.com",
				"senha" => "1234",
			]
		];
	//foreach usuarios array
	foreach ($usuarios as $key) {
		// verifica se a senha está correta
		echo "<br>" . $key["email"];
		echo "<br>" . $key["senha"] . "<br>";
		if($email == $usuarios[$key]["email"] && $senha == $usuarios[$key]['senha']){
			echo "login com sucesso";
			$_SESSION["logado"] = true;
			// se sim, abrir página logada 1;
			header("refresh: 5;page_1.php");
			//link para acessar páginas logadas
			echo "<a href='./page_1.php'></a>";
			echo "<a href='./page_2.php'></a>";
		}
		else{
			echo "login está errado";
			$nome = post_usuario();
			$senha = post_senha();
			header("refresh: 10;login.php");
		}
	}
}
