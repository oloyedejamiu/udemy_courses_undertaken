<?php 

// static properties
class User{
	public static $minPassLength = 5; 
	public static function validatePassword($password){

		//:: is the scope resolution operator
		// Note: In static, we use :: in replacement $this.
		if (strlen($password) >= self::$minPassLength) {
			return true;
		} else {
			return false;
		}

	}
}


$pass = 'password';
// echoes Password is valid since the password length is greater than 5
if (User::validatePassword($pass)) {
	echo 'Password is valid';
} else {
	echo 'Password is Invalid';
}

// output 5, no instantiation needed
//echo User::$minPassLength;