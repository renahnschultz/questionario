<?php
	class UserDAO{
		
		public function insert($user, $connection){
			$query = "INSERT INTO `user` (name, email, password, born, foto) VALUES ('".$user->name."','".$user->email."','".$user->password."','".$user->born."','".$user->foto."')";
			$result = mysqli_query($connection, $query);
			if($result){
				echo "User saved successfully.";
			}else{
				echo "User not saved.";
			}
		}
	}


?>	