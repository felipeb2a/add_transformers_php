<?php 
    require_once('../config/mysql.php');

	function listTransformersStatus(){
    	$conn = conectar();
    	$sql = "select * from transformersStatus order by id";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

?>