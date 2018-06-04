<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <a href="dashboard" class="logo">
            <img src="assets/images/logo.png" height="35" alt="Roma" />
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                <?php fotoheader($conexao) ?>
                        
                </figure>
                <div class="profile-info" data-lock-name="José" data-lock-email="José">
                    <span class="name"><?php echo consulta('USUARIOS', 'name', $_SESSION['usuarioId'], $conexao) ?></span>
                    <span class="role">Administrador</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="perfil"><i class="fa fa-user"></i> Meu Perfil</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="sys/logout"><i class="fa fa-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<!-- end: header -->