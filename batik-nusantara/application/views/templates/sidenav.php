<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link <?= ($title == 'Admin - Manage Posts') ? 'text-white' : ''; ?>" href="<?= base_url('admin/manageposts'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-thumbtack <?= ($title == 'Admin - Manage Posts') ? 'text-white' : ''; ?>"></i></div>
                        Posts
                    </a>
                    <a class="nav-link <?= ($title == 'Admin - Manage Posts') ? 'text-white' : ''; ?>" href="<?= base_url('admin/gallery'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-thumbtack <?= ($title == 'Admin - Manage Posts') ? 'text-white' : ''; ?>"></i></div>
                        Gallery
                    </a>
                    <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-out"></i></div>
                        Logout
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">