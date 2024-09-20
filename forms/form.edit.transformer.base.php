<?php
    include_once('../template/header.php');
    include_once('../dao/transformersBaseDao.php');

    $transformerBaseValues = selectTransformerBase($_POST['id']);

?>
    <section id="editTransformer" class="sections degrade">
        <div class="container">
            <div class="content" style="width: 85%;height: 95%; min-height: 600px;">
                <form action="../functions/transformer.base.edit.php" method="post" style="margin-top: 30px;">
                    <div class="form-group text-center h2">
                        <label class="text-center text-dark">Editar Base</label>
                    </div>

                    <?php

                        //loop base
                        while($base = mysqli_fetch_array($transformerBaseValues)){
                            echo '<div class="form-group">';
                                echo '<input type="hidden" name="id" value="'.$base['id'].'">';
                            echo '</div>';

                            echo '<div class="form-group">';
                                echo '<label class="text-center text-dark">Nome</label>';
                                echo '<input class="form-control" required="true" name="base" value="'.$base['base'].'">';
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