<aside class="main-sidebar sidebar-light-navy elevation-4">
    <a href="<?= base_url(); ?>" class="brand-link text-center">
        <span class="brand-text font-weight-light">Mahasiswa Database</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        </div>
    <div class="info">
        <a href="#" class="d-block"><?= session()->get('username') ?></a>
    </div>
</div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item">
                    <a href="<?= base_url(); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                
                <li class="nav-item">
    <a href="<?= base_url('mahasiswa'); ?>" class="nav-link">
        <i class="nav-icon fas fa-list"></i>
        <p>
            View Mahasiswa
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="<?= base_url('mahasiswa/create'); ?>" class="nav-link"> <i class="nav-icon fas fa-plus"></i>
        <p>
            Add Mahasiswa
        </p>
    </a>
</li>

                <li class="nav-header">ACCOUNT</li>

                <li class="nav-item">
                    <a href="<?= base_url('logout'); ?>" class="nav-link"> <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        </div>
    </aside>