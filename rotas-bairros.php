<?php include "sys/validation.php" ?>
<!doctype html>
<html class="fixed">
	<head>

        <?php include "css.php"; ?>

	</head>
	<body>
		<section class="body">

        <?php include "header.php"; ?>

        <div class="inner-wrapper">

        <?php include "navigation.php"; ?>

            <section role="main" class="content-body">
                <?php breadcrumbs('Gerenciar Bairros','Portal','Rotas','Bairros') ?>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <?php panel_header('Cadastrar Novo Bairro') ?>
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" method="post" action="db/rotas-bairros-add" enctype="multipart/form-data">

                                    <?php inputform('Bairro', 'nome', 'text', '') ?>

                                    <?php selectform('Rota', 'id_rotas', select_rotas($conexao)) ?>

                                    <?php selectform('Sequencia', 'id_bairros', select_bairros($conexao)) ?>

                                    <?php submitform('Cadastrar') ?>

                                </form>
                            </div>
                        </section>
                        <section class="panel">
                            <?php panel_header('Bairros Cadastrados') ?>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-details">
                                    <thead>
                                    <tr>
                                        <th>Bairro</th>
                                        <th>Rota</th>
                                        <th>Sequencia</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php listar_bairros($conexao) ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>

            </section>

        </div>

			<?php include "sidebar.php"; ?>
		</section>

        <?php include "scripts.php"; ?>

	</body>
</html>