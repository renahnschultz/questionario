<?php
session_start();
ini_set('session.gc_maxlifetime', 1);
require('connection.php');

if (!isset($_POST['username']) 
	|| !isset($_POST['password'])){
	echo "You need to fill all informations.";
return;
}
$email = $_POST['username'];
$password = hash('sha256',$_POST['password']);
$query = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'";
$user = $connection->query($query);
if ($user->num_rows > 0) {
	while($row = $user->fetch_assoc()) {
		$_SESSION['email_user'] = $row['email'];
		$_SESSION['id_user'] = $row['id'];
		$_SESSION['name_user'] = $row['name'];
		$_SESSION['foto_user'] = $row['foto'];
	}
	echo "Login successfully.";
}else{
	echo 'Fail.';
}

?>