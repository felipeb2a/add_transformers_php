<?php
	include_once('../template/header.php');
	include_once('../dao/transformersBaseDao.php');
	require_once('../functions/pagination.php');
?>
			 <section id="listtransformers" class="sections degrade" style="">
	            <div class="container">
                    <div class="content" style="width: 90%;height: 95%;">
		                <div class="table-responsive" style="padding-top: 20px; min-height: 600px;">

		                	<div class="form-group text-center h2">
                        		<label class="text-center text-dark">Lista Bases</label>
                    		</div>

                    		<!-- search -->
                    		<nav class="navbar navbar-light bg-light">
								<label class="text-center text-dark">Campos habilitados para pesquisar (Base).</label>
							</nav>
							<?php
                    			$valueSearch = '';
								include_once('../template/search.php');

								if(!isset($_GET['search'])){									
									//consulta definindo o limite de rows
								    $resulTransformersBase = listTransformersBasePagination($start, $limit);
								    
								    //tem que definir a quantidade de itens para definir a quantidade de paginas total
									$countRegisters = countNumberValuesTransformersBaseToPagination();
									$countRegisters = $countRegisters[0];

								} else{
									//definir pesquisado
									$valueSearch = $_GET['search'];
									//realizar consulta
									$resulTransformersBase = listTransformersBaseSearch($valueSearch, $start, $limit);
									//definir quantidade itens para encontrar a quantidade de paginas
									$countRegisters = countNumberValuesTransformersBaseToPaginationSearch($valueSearch);
									//$countRegisters = $resulTransformersBase -> num_rows;
									$countRegisters = $countRegisters[0];

								}

							?>

							<table class="table table-bordered">
								<tbody>
									<!-- check return search -->
						    		<?php if(!$countRegisters == 0): ?>
										<tr class="text-center thead-dark">
											<th scope="row">Editar</th>	
									    	<th scope="row">ID</th>
									    	<th scope="row">Base</th>
										</tr>
				                   		<?php
				                  			//loop transformerBase
				                   			while($transformerBase = mysqli_fetch_array($resulTransformersBase)){
										 		echo '<tr class="text-center">';

										 			/* edit button */							    			
									    			echo '<th scope="row">';
										    			echo '<form action="../forms/form.edit.transformer.base.php" method="post">';
											                echo '<input type="hidden" name="id" value="'.$transformerBase['id'].'">';
										                    //<!-- enviar -->
									                        echo '<button class="btn btn-success" type="submit">Editar</button>';
									                  	echo '</form>';
									    			echo '</th>';
									    			/* end edit button*/

									    			echo '<th scope="row">'.$transformerBase['id'].'</th>';
									    			echo '<th scope="row">'.$transformerBase['base'].'</th>';
										    	echo '</tr>';
										    }
										?>
									<?php else: ?>
										<tr class="text-center thead-dark ">						    	
									    	<th scope="row">Nenhum resultado encontrado...</th>
										</tr>
									<?php endif;?>
								</tbody>
							</table>
						</div>

						<!-- pagination -->
						<?php
							//check return search
							if(!empty($countRegisters))
								include_once('../template/pagination.php');
						?>

		        	</div>
		        </div>
	         </section>
<?php
	include_once('../template/footer.php');
?>