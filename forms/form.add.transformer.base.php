<?php
    include_once('../template/header.php');
    include_once('../dao/transformersBaseDao.php');

?>
    <section id="addTransformer" class="sections degrade">
        <div class="container">
            <div class="content" style="width: 85%;height: 95%; min-height: 600px;">
                <form action="../functions/transformer.base.add.php" method="post" style="margin-top: 30px;">
                    <div class="form-group text-center h2">
                        <label class="text-center text-dark">Adicionar Base</label>
                    </div>
                
                    <div class="form-group">
                        <label class="text-center text-dark">Base</label>
                        <input class="form-control" required="true" name="base">
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