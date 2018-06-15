<?php
require('connection.php');
require('../entidades/user.php');
require('../entidades/userDAO.php');
if(!isset($_POST['first-name']) 
	|| !isset($_POST['last-name']) 
	|| !isset($_POST['email'])
	|| !isset($_POST['born']) 
	|| !isset($_POST['password'])){
	echo "You need to fill all informations.";
return;
}


if(!isset($_POST['first-name']) 
	|| !isset($_POST['last-name']) 
	|| !isset($_POST['email'])
	|| !isset($_POST['born']) 
	|| !isset($_POST['password'])){
	echo "You need to fill all informations.";
return;
}
$password = hash('sha256', $_POST['password']);
$user = new User($_POST['first-name'], $_POST['last-name'], $_POST['email'], $_POST['born'], $password);

$userDAO = new UserDAO;

$uploaddir = "";
if( $_FILES["userfile"]['error'] != UPLOAD_ERR_OK )
{
    exit;
}
if($_FILES['userfile']){
	var_dump($_FILES);
	$arquivo = $_FILES['userfile']['tmp_name'];
	$arq_exp = explode(".", $_FILES['userfile']['name']);
	$extensao = strtolower($arq_exp[sizeof($arq_exp) - 1]);
	$novoNome = $user->name."".date("dmyHis").".".$extensao;
	$uploaddir = '../images/users/' . $novoNome;

	if (move_uploaded_file($arquivo, $uploaddir)) {
		echo "Arquivo válido e enviado com sucesso.\n";
		$user->foto = $novoNome;
	} else {
		echo "Possível ataque de upload de arquivo!\n";
	}
}


$userDAO->insert($user,$connection);
header('Location: ../login.php');

?>