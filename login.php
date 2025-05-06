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
		<form method="POST" action="page_1.php"> <!--onsubmit="return validaFormulario()"> -->
			<label>Email:</label>
			<input type="email" name="email" id="email">
			<label>Senha: </label>
			<input type="password" name="senha" id="senha">
			<input type="submit" name="btnEnviar" id="btnEnviar" placeholder="enviar" value="Enviar">
		</form>
	</main>

	<footer>Footer do site</footer>

	<script type="text/javascript" src="assets/js/login.js"></script>
</body>
</html>

<?php
session_start();
$_SESSION['logado'] = false;

//echo "</script> alert('Entrou PHP')</script>";
?>