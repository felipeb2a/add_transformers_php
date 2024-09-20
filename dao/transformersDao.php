<?php  
    require_once('../config/mysql.php');

	function listTransformers(){
    	$conn = conectar();
    	$sql = "select * from transformers order by id";
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function listTransformersPagination($start, $limit){
    	$conn = conectar();
    	$sql = "select * from transformers order by id limit $start, $limit";
		$result = mysqli_query($conn,$sql);
		$conn->close();

		return $result;
	}

	function countNumberValuesTransformersToPagination(){
    	$conn = conectar();
    	$sql = "select count(id) count from transformers;";
		$result = mysqli_query($conn,$sql) -> fetch_array(MYSQLI_NUM);
		
		$conn->close();

		return $result;
	}

	function listTransformersSearch($search, $start, $limit){
    	$conn = conectar();
    	$sql = "select * from transformers 
    		where idTrafo like '%$search%' 
    		or fabricante like '%$search%' 
    		or base like '%$search%' 
    		or numerodeSeriePrototipo like '%$search%' 
    		or healthTransformers like '%$search%' 
    		order by id limit $start, $limit;";
    	//echo $sql;
		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function countNumberValuesTransformersToPaginationSearch($search){
    	$conn = conectar();
    	$sql = "select count(id) count from transformers
    		where idTrafo like '%$search%' 
    		or fabricante like '%$search%' 
    		or base like '%$search%' 
    		or numerodeSeriePrototipo like '%$search%' 
    		or healthTransformers like '%$search%';";
		$result = mysqli_query($conn,$sql) -> fetch_array(MYSQLI_NUM);
		
		$conn->close();

		return $result;
	}

	function selectTransformer($id){
    	$conn = conectar();
    	$sql = "select * from transformers where id = '$id'";

		$result = mysqli_query($conn,$sql);
		
		$conn->close();

		return $result;
	}

	function saveTransformers($sql){
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