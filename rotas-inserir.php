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
                <?php breadcrumbs('Gerenciar Rotas','Portal','Rotas','Inserir') ?>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <?php panel_header('Cadastrar Nova Rota') ?>
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" method="post" action="db/rotas-inserir-add" enctype="multipart/form-data">

                                    <?php inputform('Descrição', 'descricao', 'text', '') ?>

                                    <?php inputform('Valor da Ida', 'valor_ida', 'text', '') ?>

                                    <?php inputform('Valor da Volta', 'valor_volta', 'text', '') ?>

                                    <?php inputform('Tipo', 'tipo', 'text', '') ?>

                                    <?php submitform('Cadastrar') ?>

                                </form>
                            </div>
                        </section>
                        <section class="panel">
                            <?php panel_header('Rotas Cadastradas') ?>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-details">
                                    <thead>
                                    <tr>
                                        <th>Descrição</th>
                                        <th>Valor Ida</th>
                                        <th>Valor Volta</th>
                                        <th>Tipo</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php listar_rotas($conexao) ?>
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