<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('tema/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PuuurAmor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- <div class="image">
                <img src="<?= base_url('tema/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
            </div> -->
            <div class="info">
                <a href="#" class="d-block">Andressa</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/produtos/listar" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Produtos
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/doacaodash/listar2" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Animais para doação
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/animais_ajuda/animais_ajuda" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Animais para ajudar
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>