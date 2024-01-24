<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
            src="/assets/img/admin_icon.png" alt="User Image" width="60px" height="60px">
        <div>
            <p class="app-sidebar__user-name">
                EG
            </p>
            <p class="app-sidebar__user-designation">Administrator</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item <?= $menu == 'dashboard' ? 'active' : ''; ?>"
                href="../index.php"><i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">Dasbor</span></a></li>
        <li><a class="app-menu__item <?= $menu == 'kategori' ? 'active' : ''; ?>"
                href="kategori/index.php"><i class="app-menu__icon fa fa-list-alt"></i><span
                    class="app-menu__label">Kategori</span></a></li>
        <li><a class="app-menu__item <?= $menu == 'produk' ? 'active' : ''; ?>"
                href="produk/index.php"><i class="app-menu__icon fa fa-desktop"></i><span
                    class="app-menu__label">Produk</span></a></li>
        <li><a class="app-menu__item <?= $menu == 'pesanan' ? 'active' : ''; ?>"
                href="pesanan/index.php"><i class="app-menu__icon fa fa-money"></i><span
                    class="app-menu__label">Pesanan</span></a></li>
        <li><a class="app-menu__item <?= $menu == 'laporan' ? 'active' : ''; ?>"
                href="laporan_pesanan/index.php"><i class="app-menu__icon fa fa-file"></i><span
                    class="app-menu__label">Laporan Pesanan</span></a>
        </li>
    </ul>
</aside>