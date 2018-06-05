<?php

class User{
	
	public $name;
	public $email;
	public $born;
	public $password;

	function __construct($firstName, $lastName, $email, $born, $password){
		$this->name = $firstName." ".$lastName;
		$this->email = $email;
		$this->born = $born;
		$this->password = $password;
	}
}

?>