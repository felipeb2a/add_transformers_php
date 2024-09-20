<?php
    include_once('../template/header.php');
    include_once('../dao/transformersDao.php');
    include_once('../dao/transformersBaseDao.php');
    include_once('../dao/transformersStatusDao.php');

    $transformerValues = selectTransformer($_POST['id']);

    $resulTransformersBase = listTransformersBase();
    $resulTransformersStatus= listTransformersStatus();
?>
    <section id="editTransformer" class="sections degrade">
        <div class="container">
            <div class="content" style="width: 85%;height: 95%;">
                <form action="../functions/transformer.edit.php" method="post" style="margin-top: 30px;">
                    <div class="form-group text-center h2">
                        <label class="text-center text-dark">Editar Transformador</label>
                    </div>

                    <?php

                        //loop transformer
                        while($transformer = mysqli_fetch_array($transformerValues)){
                            echo '<div class="form-group">';
                                echo '<input type="hidden" name="id" value="'.$transformer['id'].'">';
                            echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">ID Trafo Energisa</label>';
                                    echo '<input class="form-control" type="number" required="true" name="idTrafo" value="'.$transformer['idTrafo'].'">';
                                echo '</div>';
                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Potencia (kVA)</label>';
                                    echo '<input class="form-control" type="number" step="0.01" required="true" placeholder="112.5" name="potencia" value="'.$transformer['potencia'].'">';
                                echo '</div>';
                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Fabricante</label>';
                                    echo '<input class="form-control" name="fabricante" value="'.$transformer['fabricante'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Data Fabricação</label>';
                                    //echo '<input class="form-control" type="date" name="anoFabricacao" value="'.(new DateTime($transformer['anoFabricacao']))->format('d/m/Y').'">';
                                    echo '<input class="form-control" type="date" required="true" name="anoFabricacao" value="'.(new DateTime($transformer['anoFabricacao']))->format('Y-m-d').'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Tensão Nominal Primário (V)</label>';
                                    echo '<input class="form-control" type="number" required="true" placeholder="13800" name="tensaoNominalPrimario" value="'.$transformer['tensaoNominalPrimario'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';              
                                    echo '<label for="inputTensaoNominalSecundario">Tensão Nominal Secundário (V)</label>';
                                    echo '<select class="form-control" name="tensaoNominalSecundario" value="'.$transformer['tensaoNominalSecundario'].'">';
                                        echo '<option value="380/220">380/220</option>';
                                    echo '</select>';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label for="inputBase">Base</label>';
                                    echo '<select class="form-control" name="base" value="'.$transformer['base'].'">';                                        
                                        while($transformerBase = mysqli_fetch_array($resulTransformersBase)){
                                            echo '<option value="'.$transformerBase['base'].'">'.$transformerBase['base'].'</option>';
                                        }

                                    echo '</select>';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">N° de Série Protótipo (EV0000)</label>';
                                    echo '<input class="form-control" required="true" placeholder="EV0000" name="numerodeSeriePrototipo" value="'.$transformer['numerodeSeriePrototipo'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Node DevEUI (00-00-00-00-00-00-00-00)</label>';
                                    echo '<input class="form-control" required="true" placeholder="00-00-00-00-00-00-00-00" name="node" value="'.$transformer['node'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">X Latitude (-34.0000)</label>';
                                    echo '<input class="form-control" type="number" step="0.00001" required="true" placeholder="-34.0000" name="x" value="'.$transformer['x'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Y Longitude (-7.0000)</label>';
                                    echo '<input class="form-control" type="number" step="0.00001" required="true" placeholder="-7.0000" name="y" value="'.$transformer['y'].'">';
                                echo '</div>';

                                /*
                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Coordenada X</label>';
                                    echo '<input class="form-control" required="true" name="coordenadaX" value="'.$transformer['coordenadaX'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Coordenada Y</label>';
                                    echo '<input class="form-control" required="true" name="coordenadaY" value="'.$transformer['coordenadaY'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label for="inputHealthTransformers">Saúde Transdormador</label>';
                                    echo '<select class="form-control" name="healthTransformers" value="'.$transformer['healthTransformers'].'">';

                                        while($status = mysqli_fetch_array($resulTransformersStatus)){
                                            echo '<option value="'.$status['status'].'">'.$status['status'].'</option>';
                                        }

                                    echo '</select>';
                                echo '</div>';
                                */

                                echo '<div class="form-group">';
                                    echo '<label for="inputisActive">isActive</label>';
                                    echo '<select class="form-control" name="isActive" value="'.$transformer['isActive'].'">';
                                        echo '<option value="1">Ativo</option>';                    
                                        echo '<option value="0">Desativado</option>';
                                    echo '</select>';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Calibração VA</label>';
                                    echo '<input class="form-control" type="number" required="true" name="calibrationVa" value="'.$transformer['calibrationVa'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Calibração VB</label>';
                                    echo '<input class="form-control" type="number" required="true" name="calibrationVb" value="'.$transformer['calibrationVb'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Calibração VC</label>';
                                    echo '<input class="form-control" type="number" required="true" name="calibrationVc" value="'.$transformer['calibrationVc'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Calibração IA</label>';
                                    echo '<input class="form-control" type="number" required="true" name="calibrationIa" value="'.$transformer['calibrationIa'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Calibração IB</label>';
                                    echo '<input class="form-control" type="number" required="true" name="calibrationIb" value="'.$transformer['calibrationIb'].'">';
                                echo '</div>';

                                echo '<div class="form-group">';
                                    echo '<label class="text-center text-dark">Calibração IC</label>';
                                    echo '<input class="form-control" type="number" required="true" name="calibrationIc" value="'.$transformer['calibrationIc'].'">';
                                echo '</div>';

                        }

                    ?>
                    
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php
    include_once('../template/footer.php');
?>