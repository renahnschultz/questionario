<?php 
$botao_cadastro_login = '';
$botao_logout = '';
if(isset($_SESSION['id_user'])){
	$botao_cadastro_login = '<li class="nav-item">
	<a class="nav-link" href="responder.php">Responder</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="grafico.php">Gráfico</a>
	</li>';
	$botao_logout = '<img src="images/users/'.$_SESSION['foto_user'].'" style="width: 40px;height: 40px;border-radius: 50%;margin-right: 10px;" /> <button class="btn btn-primary" href="#" onclick="logout()">Logout</a>';
}else{
	$botao_cadastro_login = '<li class="nav-item">
	<a class="nav-link" href="cadastro.php">Cadastrar</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="login.php">Login</a>
	</li>';
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
	<a class="navbar-brand" href="index.php">Melhor Cidade</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<?=$botao_cadastro_login?>
		</ul>
	</div>
	<?=$botao_logout?>
</nav>