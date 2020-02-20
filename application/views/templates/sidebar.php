<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Menu</div>
                    <a class="nav-link" href="<?php if ($user['role_id'] == 1) {
                                                    base_url('admin');
                                                } else {
                                                    base_url('user');
                                                } ?>">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">User</div>
                    <a class="nav-link" href="<?= base_url('user/profile') ?>">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        My Profile
                    </a>
                    <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                        <div class="sb-nav-link-icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </div>
                        Log Out
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?= $user['name']; ?>
            </div>
        </nav>
    </div>