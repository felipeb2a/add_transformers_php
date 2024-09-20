<?php  
    require_once('../config/mysql.php');

	function listTransformersBase(){
    	$conn = conectar();
    	$sql = "select * from transformersBase order by base;";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function selectTransformerBase($id){
    	$conn = conectar();
    	$sql = "select * from transformersBase where id = '$id';";

		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function saveTransformerBase($sql){
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

	function listTransformersBasePagination($start, $limit){
    	$conn = conectar();
    	$sql = "select * from transformersBase order by base limit $start, $limit;";
		$result = mysqli_query($conn,$sql);
		$conn->close();

		return $result;
	}

	function countNumberValuesTransformersBaseToPagination(){
    	$conn = conectar();
    	$sql = "select count(id) count from transformersBase;";
		$result = mysqli_query($conn,$sql) -> fetch_array(MYSQLI_NUM);
		
		$conn->close();

		return $result;
	}

	function listTransformersBaseSearch($search, $start, $limit){
    	$conn = conectar();
    	$sql = "select * from transformersBase 
    		where base like '%$search%'  
    		order by base limit $start, $limit;";
    	//echo $sql;
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function countNumberValuesTransformersBaseToPaginationSearch($search){
    	$conn = conectar();
    	$sql = "select count(id) count from transformersBase
    		where base like '%$search%';";
		$result = mysqli_query($conn,$sql) -> fetch_array(MYSQLI_NUM);
		
		$conn->close();

		return $result;
	}

?>