<!doctype html>
<html lang="pt_BR">
<head>
	<?php
	session_start();
	require('menu.php');
	require('header.html');
	?>

	<title>Questionário</title>
</head>
<body>
	<div class="pagina-inicial">
		<div class="texto-inicial text-dark">
			<h1>Introdução</h1>
			<p>O intuito do sistema é possibilitar o usuário a realizar pesquisas de seu interesse e responder pesquisas realizada por outros usuários para auxilio do mesmo.</p>
			<p>Este trabalho tem por objetivo a aquisição de nota integral na matéria <b>Tópicos Especiais em Linguagens de Programação</b> ministrada pelo <b>Prof. Orlei José Pombeiro</b> no primeiro semestre de 2018.</p>
			<p>Trabalho realizado pelos alunos:
			<h5><b>Renahn Schultz</b></h5>
			<h5><b>Lucas Camargo Soares</b></h5></p>
			<a href="cadastro.php"><button class="btn btn-larger btn-primary">Cadastre-se</button></a>
		</div>
	</div>
</body>
</html>

