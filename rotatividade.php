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
                <?php breadcrumbs('Gerenciar Rotatividades','Portal','Rotatividade','Gerenciar') ?>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <?php panel_header('Cadastrar Nova Rotatividade') ?>
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" method="post" action="db/rotatividade-add" enctype="multipart/form-data">

                                    <?php selectform('Veículo', 'id_veiculos', select_veiculos($conexao)) ?>

                                    <?php selectform('Motorista', 'id_motoristas', select_motoristas($conexao)) ?>

                                    <?php selectform('Cliente & Rota', 'id_clientes_rotas', select_clientes_rotas($conexao)) ?>

                                    <?php inputform('Tipo', 'tipo', 'text', '') ?>

                                    <?php submitform('Cadastrar') ?>

                                </form>
                            </div>
                        </section>
                        <section class="panel">
                            <?php panel_header('Rotatividades Cadastradas') ?>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-details">
                                    <thead>
                                    <tr>
                                        <th>Veículo</th>
                                        <th>Motorista</th>
                                        <th>Cliente</th>
                                        <th>Rota</th>
                                        <th>Valor</th>
                                        <th>Tipo</th>
                                        <th>Reserva</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php listar_rotatividade($conexao) ?>
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