<?php
	include_once('../template/header.php');
	include_once('../dao/usersPhpDao.php');
    $resulUsersPhp = listUsersPhp();

?>
			 <section id="listUsersPhp" class="sections degrade" style="">
	            <div class="container">
                    <div class="content" style="width: 90%;height: 95%;">
		                <div class="table-responsive" style="padding-top: 20px; min-height: 600px;">

		                	<div class="form-group text-center h2">
                        		<label class="text-center text-dark">Lista Usuários</label>
                    		</div>

							<table class="table table-bordered">
								<tbody>
									<tr class="text-center thead-dark">
								    	<th scope="row">Editar</th>	
								    	<th scope="row">ID</th>
								    	<th scope="row">Nome</th>
								    	<th scope="row">E-mail</th>
								    	<th scope="row">Senha</th>
								    	<th scope="row">Status</th>
									</tr>
			                   		<?php
			                  			//loop usersPhp
			                   			while($userPhp = mysqli_fetch_array($resulUsersPhp)){
									 		echo '<tr class="text-center">';

									 			/* edit button */							    			
								    			echo '<th scope="row">';
									    			echo '<form action="../forms/form.edit.user.php" method="post" style="margin-top: 30px;">';
									                    echo '<div class="form-group">';						                    	
										                    echo '<input type="hidden" name="id" value="'.$userPhp['id'].'">';
									                    echo '</div>';
									                    //<!-- enviar -->
								                        echo '<div class="form-group">';
								                            echo '<button class="btn btn-success" type="submit">Editar</button>';
								                        echo '</div>';
								                  	echo '</form>';
								    			echo '</th>';
								    			/* end edit button*/

								    			echo '<th scope="row">'.$userPhp['id'].'</th>';
								    			echo '<th scope="row">'.$userPhp['name'].'</th>';
								    			echo '<th scope="row">'.$userPhp['email'].'</th>';
								    			echo '<th scope="row">'.$userPhp['password'].'</th>';

								    			//verify and set status
								    			if($userPhp['isActive'] == 1){
								    				$isActive = 'ATIVO';
								    			}else{
								    				$isActive = 'DESATIVADO';								    				
								    			}
								    			echo '<th scope="row">'.$isActive.'</th>';
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