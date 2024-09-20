<?php 
    require_once('../config/mysql.php');

	function login($email){
    	$conn = conectar();
    	$sql = "select * from users where email = '$email'";

		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

?>