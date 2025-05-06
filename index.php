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
		<h1>Bem-vindo a Labetech</h1>
		<h2>Uma loja virtual de informática</h2>

	<p>
		Vendemos: capinhas de celular, celulares, impressoras, mouses, headphones e teclados.
	</p>

	<p>
		compre pela internet e receba em casa pelo mercado livre
	</p>
	</main>

<footer>Rodapé do site</footer>

<?php
sesssion_start();
set_time_limit(30);

// se tiver algum dado via POST
if(isset($_POST)){
	// armazena a variavel email em $email
	$email = $_POST['email'];
	// limpando espaços em branco antes e depois do email
	$email = trim($email);

	// armazena a variavel senha em $senha
	$senha = $_POST['senha'];
	// limpando espaços em branco antes e depois de senha	
	$senha = trim($senha);
	//foreach usuarios array
	
		// verifica se a senha está correta
	if($senha == $_POST['usuarios'][1]['senha']){
		$_SESSION['logado'] = true;
		// se sim, abrir página logada 1;
		header("refresh: 10;page_1.php");
		//link para acessar páginas logadas
		echo "<a href='./page_1.php'></a>";
		echo "<a href='./page_2.php'></a>";
	}
	else{
	$nome = post_usuario();
	$senha = post_senha();
	header("refresh: 10;login.php");
	}
}
else if(!isset($_POST)){
	$nome = post_usuario();
	$senha = post_senha();
	header("refresh: 10;login.php");
}
