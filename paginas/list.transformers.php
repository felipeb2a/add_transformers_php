<?php
	include_once('../template/header.php');
    require_once('../dao/transformersDao.php');
	require_once('../functions/pagination.php');    

?>
			 <section id="listtransformers" class="sections degrade" style="">
	            <div class="container">
                    <div class="content" style="width: 90%;height: 95%;">
		                <div class="table-responsive" style="padding-top: 20px; min-height: 600px;">

		                	<div class="form-group text-center h2">
                        		<label class="text-center text-dark">Lista Transformadores</label>
                    		</div>

                    		<!-- search -->
                    		<nav class="navbar navbar-light bg-light">
								<label class="text-center text-dark">Campos habilitados para pesquisar (ID Trafo, Fabricante, Base, N° de Série, Saúde Transformador).</label>
							</nav>
							<?php
                    			$valueSearch = '';
								include_once('../template/search.php');

								if(!isset($_GET['search'])){									
									//consulta definindo o limite de rows
								    $resultTransformers = listTransformersPagination($start, $limit);
								    
								    //tem que definir a quantidade de itens para definir a quantidade de paginas total
									$countRegisters = countNumberValuesTransformersToPagination();
									$countRegisters = $countRegisters[0];

								} else{
									//definir pesquisado
									$valueSearch = $_GET['search'];
									//realizar consulta
									$resultTransformers = listTransformersSearch($valueSearch, $start, $limit);
									//definir quantidade itens para encontrar a quantidade de paginas
									$countRegisters = countNumberValuesTransformersToPaginationSearch($valueSearch);
									//$countRegisters = $resultTransformers -> num_rows;
									$countRegisters = $countRegisters[0];

								}

							?>

							<table class="table table-bordered">
								<tbody>
									<!-- check return search -->
						    		<?php if(!$countRegisters == 0): ?>
										<tr class="text-center thead-dark ">	
										<th scope="row">Editar</th>							    	
								    	<th scope="row">ID Trafo Energisa</th>
								    	<th scope="row">Potência (KVA)</th>
								    	<th scope="row">Fabricante</th>
								    	<th scope="row">Data Fabricação</th>
								    	<th scope="row">Tensão Nominal Primário (V)</th>
								    	<th scope="row">Tensão Nominal Secundário (V)</th>
								    	<th scope="row">Base</th>
								    	<th scope="row">N° de Série Protótipo</th>
								    	<th scope="row" style="min-width:320px;">Node DevEUI</th>
								    	<th scope="row">X (Latitude)</th>
								    	<th scope="row">Y (Longitude)</th>
								    	<th scope="row">Coordenada X</th>
								    	<th scope="row">Coordenada Y</th>
								    	<th scope="row">Saúde Transformador</th>
								    	<th scope="row">Status</th>
								    	<th scope="row">Calibração VA</th>
								    	<th scope="row">Calibração VB</th>
								    	<th scope="row">Calibração VC</th>
								    	<th scope="row">Calibração IA</th>
								    	<th scope="row">Calibração IB</th>
								    	<th scope="row">Calibração IC</th>
								    	<th scope="row" style="visibility: hidden;">ID</th>								    	
								    	<!--<th scope="row">Remover</th>-->
									</tr>
				                   		<?php
				                  			//loop transformer
				                   			while($transformer = mysqli_fetch_array($resultTransformers)){
										 		echo '<tr class="text-center">';	
										 			/* edit button */							    			
									    			echo '<th scope="row">';
										    			echo '<form action="../forms/form.edit.transformer.php" method="post" style="">';
											                    echo '<input type="hidden" name="id" value="'.$transformer['id'].'">';
										                    	//<!-- enviar -->
									                            echo '<button class="btn btn-success" type="submit">Editar</button>';
									                  	echo '</form>';
									    			echo '</th>';
									    			/* end edit button*/

									    			echo '<th scope="row">'.$transformer['idTrafo'].'</th>';
									    			echo '<th scope="row">'.$transformer['potencia'].'</th>';
									    			echo '<th scope="row">'.$transformer['fabricante'].'</th>';
									    			echo '<th scope="row">'.(new DateTime($transformer['anoFabricacao']))->format('d/m/Y').'</th>';
									    			echo '<th scope="row">'.$transformer['tensaoNominalPrimario'].'</th>';
									    			echo '<th scope="row">'.$transformer['tensaoNominalSecundario'].'</th>';
									    			echo '<th scope="row">'.$transformer['base'].'</th>';
									    			echo '<th scope="row">'.$transformer['numerodeSeriePrototipo'].'</th>';
									    			echo '<th scope="row">'.$transformer['node'].'</th>';
									    			echo '<th scope="row">'.$transformer['x'].'</th>';
									    			echo '<th scope="row">'.$transformer['y'].'</th>';
									    			echo '<th scope="row">'.$transformer['coordenadaX'].'</th>';
									    			echo '<th scope="row">'.$transformer['coordenadaY'].'</th>';
									    			echo '<th scope="row">'.$transformer['healthTransformers'].'</th>';

									    			//verify and set status
									    			if($transformer['isActive'] == 1){
									    				$isActive = 'ATIVO';
									    			}else{
									    				$isActive = 'DESATIVADO';								    				
									    			}
									    			echo '<th scope="row">'.$isActive.'</th>';
									    			
									    			echo '<th scope="row">'.$transformer['calibrationVa'].'</th>';
									    			echo '<th scope="row">'.$transformer['calibrationVb'].'</th>';
									    			echo '<th scope="row">'.$transformer['calibrationVc'].'</th>';
									    			echo '<th scope="row">'.$transformer['calibrationIa'].'</th>';
									    			echo '<th scope="row">'.$transformer['calibrationIb'].'</th>';
									    			echo '<th scope="row">'.$transformer['calibrationIc'].'</th>';
									    			echo '<th scope="row" style="visibility: hidden;">'.$transformer['id'].'</th>';		
								    			
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