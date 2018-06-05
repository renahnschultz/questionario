<!doctype html>
<html lang="pt_BR">
<head>
	<?php
	require('servicos/connection.php');
	require('servicos/login_required.php');
	require('menu.php');
	require('header.html');
	?>

	<title>Questionário - Responder</title>
</head>
<body>
	<div class="container-fluid bg-light">
		<div class="row">
			<form class="col-md-6" id="form-resposta"  style="padding-top: 20px;padding-bottom: 20px;margin:auto;" method="POST" action="servicos/responder_pergunta.php" target="_blank">
				<div class="row">
					<span class="text-dark col-md-12" style="font-size: 30px;text-align: center;">Pergunta!</span>
					<div class="form-group col-md-12">
						<label for="resposta-pergunta">Qual você considera a melhor cidade para se viver no Brasil?</label>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="respostaRadio" id="respostaRadio1" value="Curitiba" checked>
							<label class="form-check-label" for="respostaRadio1">
								Curitiba
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="respostaRadio" id="respostaRadio2" value="São Paulo">
							<label class="form-check-label" for="respostaRadio2">
								São Paulo
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="respostaRadio" id="respostaRadio3" value="Rio de Janeiro">
							<label class="form-check-label" for="respostaRadio3">
								Rio de Janeiro
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="respostaRadio" id="respostaRadio3" value="Porto Alegre">
							<label class="form-check-label" for="respostaRadio3">
								Porto Alegre
							</label>
						</div>
					</div>

					<div class="col-md-12">
						<button type="submit" class="btn btn-lg btn-block btn-success">
							<i class="fas fa-check"></i>
							Responder
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script>
		$("#form-resposta").submit(function() {
			event.preventDefault();
			submitForm("#form-resposta");
			location.replace("grafico.php");
		});
	</script>
</body>
</html>

