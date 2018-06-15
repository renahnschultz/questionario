<!doctype html>
<html lang="pt_BR">
<head>
	<?php
	session_start();
	require('menu.php');
	require('header.html');
	?>

	<title>Melhor Cidade</title>
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Melhor Cidade</h1>
			<p class="lead"><h3>O site que irá decidir qual a melhor cidade para se viver no Brasil!</h3>
				<div style="margin-top:30px;">
					<h4>Desenvolvido por:</h4>
					<b>Renahn Schultz</b><br/>
					<b>Lucas Camargo Soares</b><br/>
				</div>
				<div style="margin-top:30px;">
					<h4>Orientado por:</h4>
					<b>Prof. Orlei José Pombeiro</b><br/>
				</div>
			</p>
		</div>
	</div>
	<div class="content-fluid bg-light background-city" style="padding: 20px;">
		<div class="row">
			<div class="col-3">
				<div class="card">
					<img class="card-img-top" src="images/curitiba.jpg" alt="Curitiba">
					<div class="card-body">
						<h5 class="card-title">Curitiba</h5>
						<p class="card-text">Curitiba é um município brasileiro, capital do estado do Paraná, localizado a 934 metros de altitude no primeiro planalto paranaense, a aproximadamente 110 quilômetros do Oceano Atlântico, distante 1 386 km a sul de Brasília, capital federal.<br/><br/>
							<b>População:</b> 1 893 997 hab.<br/>
							<b>Densidade:</b>	4 353,66 hab./km²<br/>
							<b>Altitude:</b>	934 mt
						</p>
						<a href="cadastro.php" class="btn btn-primary">Cadastre-se e vote!</a>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<img class="card-img-top" src="images/saopaulo.jpg" alt="São Paulo">
					<div class="card-body">
						<h5 class="card-title">São Paulo</h5>
						<p class="card-text">São Paulo foi fundada em 1554 por padres jesuítas, a cidade é mundialmente conhecida e exerce significativa influência nacional e internacional, seja do ponto de vista cultural, econômico ou político.<br/><br/>
							<b>População:</b> 12 106 920 hab.<br/>
							<b>Densidade:</b> 7 959,27 hab./km²<br/>
							<b>Altitude:</b> 760 mt
						</p>
						<a href="cadastro.php" class="btn btn-primary">Cadastre-se e vote!</a>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<img class="card-img-top" src="images/rio.jpg" alt="Rio de Janeiro">
					<div class="card-body">
						<h5 class="card-title">Rio de Janeiro</h5>
						<p class="card-text">É um dos principais centros econômicos, culturais e financeiros do país, sendo internacionalmente conhecida por diversos ícones culturais e paisagísticos, como o Pão de Açúcar, o morro do Corcovado com a estátua do Cristo Redentor, as praias dos bairros de Copacabana, Ipanema e Barra da Tijuca, entre outros...<br/><br/>
							<b>População:</b> 6 520 266 hab.<br/>
							<b>Densidade:</b>	5 432,75 hab./km²<br/>
							<b>Altitude:</b>	2 mt
						</p>
						<a href="cadastro.php" class="btn btn-primary">Cadastre-se e vote!</a>
					</div>
				</div>
			</div>
			<div class="col-3">
				<div class="card">
					<img class="card-img-top" src="images/portoalegre.jpg" alt="Porto Alegre">
					<div class="card-body">
						<h5 class="card-title">Porto Alegre</h5>
						<p class="card-text">Porto Alegre é um município brasileiro e a capital do estado mais meridional do Brasil, o Rio Grande do Sul. Com uma área de 496,682 km², possui uma geografia diversificada, com morros, baixadas e um grande lago, o Guaíba. Distante 2 027 quilômetros de Brasília, a capital nacional.<br/><br/>
							<b>População:</b> 1 484 941 hab.<br/>
							<b>Densidade:</b>	2 989,72 hab./km²<br/>
							<b>Altitude:</b>	10 mt
						</p>
						<a href="cadastro.php" class="btn btn-primary">Cadastre-se e vote!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

