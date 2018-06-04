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
                <?php breadcrumbs('Gerenciar Motoristas','Portal','Motoristas','Gerenciar') ?>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <?php panel_header('Cadastrar Novo Motorista') ?>
                            <div class="panel-body">
                                <form class="form-horizontal form-bordered" method="post" action="db/motoristas-add" enctype="multipart/form-data">

                                    <?php inputform('Nome', 'nome', 'text', '') ?>

                                    <?php inputform('Tipo', 'tipo', 'text', '') ?>

                                    <?php inputform('CPF', 'cpf', 'text', '') ?>

                                    <?php inputform('Endereço', 'endereco', 'text', '') ?>

                                    <?php inputform('Município', 'municipio', 'text', '') ?>

                                    <?php inputform('Bairro', 'bairro', 'text', '') ?>

                                    <?php selectform('Rota', 'id_rotas', select_rotas($conexao)) ?>

                                    <?php submitform('Cadastrar') ?>

                                </form>
                            </div>
                        </section>
                        <section class="panel">
                            <?php panel_header('Motoristas Cadastrados') ?>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-details">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Tipo</th>
                                        <th>CPF</th>
                                        <th>Endereço</th>
                                        <th>Município</th>
                                        <th>Bairro</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php listar_motoristas($conexao) ?>
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