<?php
    include_once('../template/header.php');
    include_once('../dao/transformersDao.php');
    include_once('../dao/transformersBaseDao.php');
    include_once('../dao/transformersStatusDao.php');

    $resulTransformersBase = listTransformersBase();
    $resulTransformersStatus= listTransformersStatus();

?>
    <section id="addTransformer" class="sections degrade">
        <div class="container">
            <div class="content" style="width: 85%;height: 95%;">
                <form action="../functions/transformer.add.php" method="post" style="margin-top: 30px;">
                    <div class="form-group text-center h2">
                        <label class="text-center text-dark">Adicionar Transformador</label>
                    </div>
                
                    <div class="form-group">
                        <label class="text-center text-dark">ID Trafo Energisa</label>
                        <input class="form-control" type="number" required="true" name="idTrafo">
                    </div>
                    <div class="form-group">
                        <label class="text-center text-dark">Potência (kVA)</label>
                        <input class="form-control" type="number" step="0.01" required="true" placeholder="112.5" name="potencia">
                    </div>
                    <div class="form-group">
                        <label class="text-center text-dark">Fabricante</label>
                        <input class="form-control" name="fabricante">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Data Fabricação</label>
                        <input class="form-control" type="date" required="true" name="anoFabricacao">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Tensão Nominal Primário (V)</label>
                        <input class="form-control" type="number" required="true" placeholder="13800" name="tensaoNominalPrimario">
                    </div>

                    <div class="form-group">                 
                        <label for="inputTensaoNominalSecundario">Tensão Nominal Secundário (V)</label>
                        <select class="form-control" name="tensaoNominalSecundario">
                            <option value="380/220">380/220</option>                          
                        </select>
                    </div>

                    <div class="form-group">                 
                        <label for="inputBase">Base</label>
                        <select class="form-control" name="base">
                            <?php
                                while($transformerBase = mysqli_fetch_array($resulTransformersBase)){
                                    echo '<option value="'.$transformerBase['base'].'">'.$transformerBase['base'].'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">N° de Série Protótipo (EV0000)</label>
                        <input class="form-control" required="true" placeholder="EV0000" name="numerodeSeriePrototipo">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Node DevEUI (00-00-00-00-00-00-00-00)</label>
                        <input class="form-control" required="true" placeholder="00-00-00-00-00-00-00-00" name="node">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">X Latitude (-34.0000)</label>
                        <input class="form-control" type="number" step="0.00001" required="true" placeholder="-34.0000" name="x">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Y Longitude (-7.0000)</label>
                        <input class="form-control" type="number" step="0.00001" required="true" placeholder="-7.0000" name="y">
                    </div>

                    <!--
                    <div class="form-group">
                        <label class="text-center text-dark">Coordenada X</label>
                        <input class="form-control" required="true" name="coordenadaX">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Coordenada Y</label>
                        <input class="form-control" required="true" name="coordenadaY">
                    </div>
                    
                    <div class="form-group">                 
                        <label for="inputHealthTransformers">Saúde Transdormador</label>
                        <select class="form-control" name="healthTransformers">
                            
                            <?php
                                /*
                                while($status = mysqli_fetch_array($resulTransformersStatus)){
                                    echo '<option value="'.$status['status'].'">'.$status['status'].'</option>';
                                }
                                */
                            ?>
                        </select>
                    </div>
                    -->

                    <div class="form-group">                 
                        <label for="inputisActive">isActive</label>
                        <select class="form-control" name="isActive">
                            <option value="1">Ativo</option>                          
                            <option value="0">Desativado</option>                          
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Calibração VA</label>
                        <input class="form-control" type="number" required="true" name="calibrationVa">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Calibração VB</label>
                        <input class="form-control" type="number" required="true" name="calibrationVb">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Calibração VC</label>
                        <input class="form-control" type="number" required="true" name="calibrationVc">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Calibração IA</label>
                        <input class="form-control" type="number" required="true" name="calibrationIa">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Calibração IB</label>
                        <input class="form-control" type="number" required="true" name="calibrationIb">
                    </div>

                    <div class="form-group">
                        <label class="text-center text-dark">Calibração IC</label>
                        <input class="form-control" type="number" required="true" name="calibrationIc">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php
    include_once('../template/footer.php');
?>