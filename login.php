<!doctype html>
<html lang="pt_BR">
<head>
	<?php
	session_start();
	ini_set('session.gc_maxlifetime', 1);
	if(isset($_SESSION['id_user'])){
		header('Location: index.php');
	}
	require('menu.php');
	require('header.html');
	?>

	<title>Questionário - Cadastro</title>
</head>
<body>
	<div class="container-fluid bg-light">
		<div class="row">
			<form class="col-md-6" id="form-login"  style="padding-top: 20px;padding-bottom: 20px;margin:auto;" method="POST" action="servicos/logar.php" target="_blank">
				<div class="row">
					<span class="text-dark col-md-12" style="font-size: 30px;text-align: center;">Sign in</span>
					<div class="form-group col-md-12">
						<label for="username-login">Email</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">@</span>
							</div>
							<input type="text" class="form-control form-control-lg" id="username-login" name="username" placeholder="Email">
						</div>
					</div>

					<div class="form-group col-md-12">
						<label for="password-login">Password</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
							</div>
							<input type="password" class="form-control form-control-lg" placeholder="Password" id="password-login" name="password">
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-lg btn-block btn-success">
							<i class="fas fa-sign-in-alt"></i>
							Login
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script>
		$("#form-login").submit(function() {
			event.preventDefault();
			submitForm("#form-login");
			location.replace("responder.php");
		});
	</script>
</body>
</html>

