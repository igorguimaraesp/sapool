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
                <h2>Perfil</h2>

                <div class="right-wrapper pull-right">
                    <ol class="breadcrumbs">
                        <li>
                            <a href="index.php">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li><span>Meu Perfil</span></li>
                    </ol>

                    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                </div>
            </header>

            <!-- start: page -->

            <div class="row">
                <div class="col-md-4 col-lg-3">

                    <section class="panel">
                        <div class="panel-body">
                            <div class="thumb-info mb-md">
                                <?php fotoperfil($conexao) ?>
                                <div class="thumb-info-title">
                                    <span class="thumb-info-inner"><?php echo consulta('USUARIOS', 'name', $_SESSION['usuarioId'], $conexao) ?></span>
                                    <span class="thumb-info-type">Administrador</span>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-md-8 col-lg-6">

                    <div class="tabs">
                        <ul class="nav nav-tabs tabs-primary">
                            <li class="active">
                                <a href="#edit" data-toggle="tab">Geral</a>
                            </li>
                            <li>
                                <a href="#foto" data-toggle="tab">Foto</a>
                            </li>
                        </ul>
                        <div class="tab-content">

                            <div id="edit" class="tab-pane active">

                                <form class="form-horizontal" method="post" action="db/perfil-edit.php">
                                    <h4 class="mb-xlg">Informações Pessoais</h4>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="admNome">Nome</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="admNome" name="admNome" value="<?php echo consulta('USUARIOS', 'name', $_SESSION['usuarioId'], $conexao) ?>">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <hr class="dotted tall">
                                    <h4 class="mb-xlg">Alterar Senha</h4>
                                    <fieldset class="mb-xl">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="admSenha">Nova Senha</label>
                                            <div class="col-md-8">
                                                <input type="password" class="form-control" id="admSenha" name="admSenha">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="profileNewPasswordRepeat">Repetir Senha</label>
                                            <div class="col-md-8">
                                                <input type="password" class="form-control" id="" name="">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-9 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                                <button type="reset" class="btn btn-default">Resetar</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>

                            <div id="foto" class="tab-pane">
                                <h4 class="mb-md">Foto</h4>
                                <form class="form-horizontal" method="post" action="db/perfil-foto-edit.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="input-append">
                                                    <div class="uneditable-input">
                                                        <i class="fa fa-file fileupload-exists"></i>
                                                        <span class="fileupload-preview"></span>
                                                    </div>
                                                    <span class="btn btn-default btn-file">
                                                        <span class="fileupload-exists">Alterar</span>
                                                        <span class="fileupload-new">Escolher Arquivo</span>
                                                        <input type="file" id="admFoto" name="admFoto" />
                                                    </span>
                                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remover</a>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-md-9 col-md-offset-3">
                                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                                        <button type="reset" class="btn btn-default">Resetar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">

                    <h4 class="mb-md">Estatísticas</h4>
                    <ul class="simple-card-list mb-xlg">
                        <li class="primary">
                            <h3>0</h3>
                            <p>Rotatividades Cadastradas</p>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- end: page -->
        </section>
    </div>

    <<?php include "sidebar.php"; ?>
</section>

<?php include "scripts.php"; ?>

</body>
</html>