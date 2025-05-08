

<title>Página 2</title>
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

<h1>Área Logada 2</h1>
<h2>Bem-vindo ao nosso sistema de loja virtual</h2>
<a href="page_1.php">Acesse a página logada 1</a>

<?php
if($_SESSION["logado"] == true){
	echo "acessou página logada";
	session_start();
//	require_once 'cabe.php';
}
else{
	echo "usuário não autorizado. Voltar ao login";
	header("refresh: 0; login.php");
}
