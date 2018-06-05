<!doctype html>
<html lang="pt_BR">
<head>
	<?php
	require('servicos/connection.php');
	require('servicos/login_required.php');
	require('menu.php');
	require('header.html');
	?>

	<title>Questionário - Gráfico</title>
</head>
<body>
	<div class="container-fluid bg-light">
		<div class="row">
			<form class="col-md-6" id="form-resposta"  style="padding-top: 20px;padding-bottom: 20px;margin:auto;" method="POST" action="servicos/responder_pergunta.php" target="_blank">
				<div class="row">
					<span class="text-dark col-md-12" style="font-size: 30px;text-align: center;">Resultado:</span><br/>
					<span class="text-dark col-md-12" style="font-size: 30px;text-align: center;">Qual a melhor cidade para se viver no Brasil?</span>
					<img src="servicos/grafico.php" />
				</div>
			</form>
		</div>
	</div>
	<script>
		$("#form-resposta").submit(function() {
			event.preventDefault();
			submitForm("#form-resposta");
		});
	</script>
</body>
</html>

