<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">

                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT user_menu.id, menu
                                FROM user_menu JOIN user_access_menu
                                ON user_menu.id = user_access_menu.menu_id
                                WHERE user_access_menu.role_id = $role_id
                                ORDER BY user_access_menu.menu_id ASC
                                ";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>

                <div class="nav">
                    <?php foreach ($menu as $m) : ?>
                        <div class="sb-sidenav-menu-heading"><?= $m['menu']; ?></div>
                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT *
                                                FROM user_sub_menu
                                                WHERE menu_id = $menuId
                                                AND is_active = 1
                                                ";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                        <?php foreach ($subMenu as $sm) : ?>
                            <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                                <div class="sb-nav-link-icon">
                                    <i class="<?= $sm['icon']; ?>"></i>
                                </div>
                                <?= $sm['title']; ?>
                            </a>
                        <?php endforeach ?>
                    <?php endforeach ?>

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