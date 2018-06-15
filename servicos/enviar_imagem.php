<?php
$uploaddir = "";
if (isset($_FILES)){
	echo 'deu chabu'
}

if( $_FILES["userfile"]['error'] != UPLOAD_ERR_OK )
{
    /*
    Houve erro
    */
    echo 'código de erro do upload: ' . $_FILES["userfile"]['error'];
    exit; // interrompe outras execuções
}
if($_FILES['userfile']){
	var_dump($_FILES);
	$arquivo = $_FILES['userfile']['tmp_name'];
	$arq_exp = explode(".", $_FILES['userfile']['name']);
	$extensao = strtolower($arq_exp[sizeof($arq_exp) - 1]);
	$novoNome = date("dmyHis").".".$extensao;
	$uploaddir = '../images/users/' . $novoNome;

	if (move_uploaded_file($arquivo, $uploaddir)) {
		echo "Arquivo válido e enviado com sucesso.\n";
	} else {
		echo "Possível ataque de upload de arquivo!\n";
	}
}

?>