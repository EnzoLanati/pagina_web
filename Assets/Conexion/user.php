<?php 
class User{
	public $email;
	private $password;
	function __construct($email,$password){
		$this->email = $email;
		$this->password = $password;
	}
	function verifyLogin($conn){
		$sql = "SELECT * FROM users WHERE email='".$this->email."' and pass='".$this->password."'";
		$search = mysqli_query($conn,$sql);
		if(mysqli_num_rows($search) > 0){
			return true;
		}else{
			return false;
		}
	}
}
?>