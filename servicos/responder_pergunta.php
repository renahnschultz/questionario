<?php
require('login_required.php');
require('connection.php');

if (!isset($_POST['respostaRadio'])){
	echo "Você precisa selecionar alguma resposta.";
	return;
}
$resposta = $_POST['respostaRadio'];
$query = "INSERT INTO `resposta` (id_user, name_user, resposta) VALUES ('".$_SESSION['id_user']."','".$_SESSION['name_user']."','".$resposta."')";
$result = $connection->query($query);
if($result){
	echo "Resposta salva.";
}else{
	echo "Resposta não salva.";
}

?>