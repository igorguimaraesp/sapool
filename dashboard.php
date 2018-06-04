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
                <header class="page-header">
                    <h2>Painel</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="dashboard">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Painel</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

                <div class="row">
                    <?php widgetcounter('Clientes Cadastrados', contar('CLIENTES', $conexao), 'clientes', 'users') ?>
                    <?php widgetcounter('Rotas Cadastradas', contar('ROTAS', $conexao), 'rotas-inserir', 'road') ?>
                    <?php widgetcounter('Motoristas Cadastrados', contar('MOTORISTAS', $conexao), 'motoristas', 'bus') ?>
                    <?php widgetcounter('Veículos Cadastrados', contar('VEICULOS', $conexao), 'veiculos', 'truck') ?>
                    <?php widgetcounter('Administradores Cadastrados', contar('USUARIOS', $conexao), 'administradores', 'key') ?>
                </div>

            </section>
        </div>

			<?php include "sidebar.php"; ?>
		</section>

        <?php include "scripts.php"; ?>
	</body>
</html>