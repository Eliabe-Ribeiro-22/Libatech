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
$_SESSION['logado'] = false;
