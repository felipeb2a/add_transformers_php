<?php 
    require_once('../config/mysql.php');

	function listUsersPhp(){
    	$conn = conectar();
    	$sql = "select * from usersPhp order by id";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function login($email){
    	$conn = conectar();
    	$sql = "select * from usersPhp where email = '$email'";

		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function selectUser($id){
    	$conn = conectar();
    	$sql = "select * from usersPhp where id = '$id'";

		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function saveUsersPhp($sql){
		$conn = conectar();
		$status;

		try{
			if ($conn->query($sql) === TRUE) {
				//echo "New record created successfully";
				$status = '<div class="col-md-8 feature-box"><i class="icon-like icon"></i>';
				$status .= '<h3 class="text-success">Formulário enviado com sucesso!</h3>';
				$status .= '</div>';
			} else {
				//echo "Error: " . $sql . "<br>" . $conn->error;
				$status = '<div class="col-md-8 feature-box"><i class="icon-dislike icon text-danger"></i>';
				$status .= '<h3 class="text-danger">**Formulário não enviado** >>> Erro:  {'.$conn->error.'}<<<</h3>';
				$status .= '</div>';
			}
		} catch(exception $e) {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			$status = '<div class="col-md-8 feature-box"><i class="icon-dislike icon text-danger"></i>';
			$status .= '<h3 class="text-danger">**Formulário não enviado** >>> Erro:  {'.$e->getMessage().'}<<<</h3>';
			$status .= '</div>';
		}

		$conn->close();

		return $status;
	}

?>