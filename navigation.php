<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navegação
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">

                    <?php
                    nav_solo('Painel','dashboard','home');

                    nav_solo('Clientes','clientes','users');

                    nav_solo('Motoristas','motoristas','bus');

                    nav_solo('Veículos','veiculos','truck');

                    nav_sub_start('Rotas', 'rotas', 'road');
                        nav_sub_item('Inserir', 'rotas-inserir');
                        nav_sub_item('Bairros', 'rotas-bairros');
                        nav_sub_item('Anexar', 'rotas-anexar');
                    nav_sub_end();

                    nav_solo('Rotatividade', 'rotatividade', 'map-marker');

                    nav_solo('Administradores','administradores','key');
                    ?>

                </ul>
            </nav>

            <hr class="separator" />
        </div>
    </div>
</aside>
<!-- end: sidebar -->