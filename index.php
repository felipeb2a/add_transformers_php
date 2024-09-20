<?php
    include_once( __DIR__ . '/template/header.index.php');
?>      
    <!-- ETAPAS E DATAS-->
    <section id="etapa" class="sem-degrade clean-block features text-white">
        <div class="container">
            <div class="block-heading">
                <h2>Gerenciar Transformadores</h2>
            </div>
            <div class="row justify-content-center" style="min-height: 600px;">
                <div class="col-md-11 feature-box"><i class="icon-check icon text-warning"></i>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Atividade</th>
                                <th scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Adicionar Transformador</td>
                                <td><a href="forms/form.add.transformer.php">Click Aqui</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Editar Transformador</td>
                                <td><a href="paginas/list.transformers.php">Click Aqui</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Adicionar Bases</td>
                                <td><a href="forms/form.add.transformer.base.php">Click Aqui</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Editar Bases</td>
                                <td><a href="paginas/list.transformers.base.php">Click Aqui</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?php
    include_once('template/footer.index.php');
?>