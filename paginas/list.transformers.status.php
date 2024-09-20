<?php
	include_once('../template/header.php');
	include_once('../dao/transformersStatusDao.php');
    $resulTransformersStatus = listTransformersStatus();

?>
			 <section id="listtransformers" class="sections degrade" style="">
	            <div class="container">
                    <div class="content" style="width: 90%;height: 95%;">
		                <div class="table-responsive" style="padding-top: 20px;">

		                	<div class="form-group text-center h2">
                        		<label class="text-center text-dark">Lista Transformadores</label>
                    		</div>

							<table class="table table-bordered">
								<tbody>
									<tr class="text-center thead-dark">
								    	<th scope="row">ID</th>
								    	<th scope="row">Base</th>
									</tr>
			                   		<?php
			                  			//loop transformerStatus
			                   			while($transformerStatus = mysqli_fetch_array($resulTransformersStatus)){
									 		echo '<tr class="text-center">';
								    			echo '<th scope="row">'.$transformerStatus['id'].'</th>';
								    			echo '<th scope="row">'.$transformerStatus['status'].'</th>';
									    	echo '</tr>';
									    }
									?>
								</tbody>
							</table>
						</div>
		        	</div>
		        </div>
	         </section>
<?php
	include_once('../template/footer.php');
?>