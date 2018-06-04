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
                <?php breadcrumbs('Gerenciar Rotas','Portal','Rotas','Anexar') ?>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <?php panel_header('Cadastrar Novo Anexo de Rota') ?>
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" method="post" action="db/rotas-anexar-add" enctype="multipart/form-data">

                                    <?php selectform('Cliente', 'id_clientes', select_clientes($conexao)) ?>

                                    <?php selectform('Rotas', 'id_rotas', select_rotas($conexao)) ?>

                                    <?php submitform('Cadastrar') ?>

                                </form>
                            </div>
                        </section>
                        <section class="panel">
                            <?php panel_header('Rotas com Clientes Cadastrados') ?>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-details">
                                    <thead>
                                    <tr>
                                        <th>Cliente</th>
                                        <th>Rota</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php listar_clientes_rotas($conexao) ?>
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