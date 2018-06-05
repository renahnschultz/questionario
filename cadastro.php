<!doctype html>
<html lang="pt_BR">
<head>
	<?php
	session_start();
	require('menu.php');
	require('header.html');
	?>

	<title>Questionário - Cadastro</title>
</head>
<body>
	<div class="container-fluid bg-light">
		<div class="row">
			<form id="form-register" class="col-md-6 bg-light text-dark" style="padding-top: 20px;padding-bottom: 20px;margin:auto;" action="servicos/register_user.php">
				<div class="row">
					<span class="text-dark col-md-12" style="font-size: 30px;text-align: center;">Sign up</span>
					<div class="form-group col-md-12">
						<label for="email">First name</label>
						<input id="first-name" name="first-name" type="text" class="form-control" required placeholder="First name">
					</div>
					<div class="form-group col-md-12">
						<label for="email">Last name</label>
						<input id="last-name" name="last-name" type="text" class="form-control" required placeholder="Last name">
					</div>
					<div class="form-group col-md-12">
						<label for="email">Email</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">@</span>
							</div>
							<input type="email" class="form-control" id="email" required name="email" placeholder="email@example.com">
						</div>
					</div>
					<div class="form-group col-md-12">
						<label for="name">Born</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
							</div>
							<input type="date" placeholder="dd/MM/yyyy" class="form-control" required id="born" name="born">
						</div>
					</div> 
					<div class="form-group col-md-12">
						<label for="name">Password</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
							</div>
							<input type="password" class="form-control" required placeholder="Password" id="password" name="password">
						</div>
					</div>
					<div class="col-md-12">
						<button type="submit" class="btn btn-lg btn-block btn-primary" style="margin: auto;">
							<i class="fas fa-check"></i>
							Register now!
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script>
		$("#form-register").submit(function() {
			event.preventDefault();
			submitForm("#form-register");
			location.replace("login.php");
		});
	</script>
</body>
</html>

