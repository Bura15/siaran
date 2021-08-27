<nav class="bg-white sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
    <div class="user-info">
        <img src="<?php echo e(base_url('assets/star_admin')); ?>/images/face.jpg" alt="">
        <p class="name"><?php echo e(getSession('nama_admin')); ?></p>
        <p class="designation"><?php echo e(getSession('bagian')); ?></p>
        <span class="online"></span>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(base_url('home')); ?>">
                <!-- <i class="fa fa-dashboard"></i> -->
                <img src="<?php echo e(base_url('assets/star_admin')); ?>/images/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="master">
                <!-- <i class="fa fa-address-book"></i> -->
                <img src="<?php echo e(base_url('assets/star_admin')); ?>/images/icons/2.png" alt="">
                <span class="menu-title">Master Data<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="master">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('barang')); ?>">Data Barang</a></li>
                    <?php if(getSession('level') == 'Administrator'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('satuan')); ?>">Data Satuan</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('kategori')); ?>">Data Kategori</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('jabatan')); ?>">Data Jabatan</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('bagian')); ?>">Data Unit</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('pegawai')); ?>">Data Pegawai</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('supplier')); ?>">Data Supplier</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#transaksi" aria-expanded="false" aria-controls="transaksi">
                <!-- <i class="fa fa-address-book"></i> -->
                <img src="<?php echo e(base_url('assets/star_admin')); ?>/images/icons/3.png" alt="">
                <span class="menu-title">Transaksi<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="transaksi">
                <ul class="nav flex-column sub-menu">
                    <?php if(getSession('level') == 'Administrator'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('barang_masuk')); ?>">Persedian Masuk</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('transaksi_keluar')); ?>">Persediaan Keluar</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('penyesuaian')); ?>">Penyesuaian</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('pengembalian')); ?>">Pengembalian</a></li>
                    <?php elseif(getSession('level') == 'Pegawai'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('barang_keluar')); ?>">Permintaan Barang</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('verif_permintaan')); ?>">Verif. Permintaan</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </li>
        <?php if(getSession('level') == 'Administrator'): ?>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#laporan" aria-expanded="false" aria-controls="laporan">
                    <!-- <i class="fa fa-address-book"></i> -->
                    <img src="<?php echo e(base_url('assets/star_admin')); ?>/images/icons/4.png" alt="">
                    <span class="menu-title">Laporan<i class="fa fa-sort-down"></i></span>
                </a>
                <div class="collapse" id="laporan">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('lap_barang')); ?>">Lap. Stok Barang</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('lap_kartu_stok')); ?>">Lap. Kartu Stok</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('lap_barang_masuk')); ?>">Lap. Pers. Masuk</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('lap_barang_keluar')); ?>">Lap. Pers. Keluar</a></li>
                    </ul>
                </div>
            </li>
        <?php endif; ?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="setting">
                <!-- <i class="fa fa-address-book"></i> -->
                <img src="<?php echo e(base_url('assets/star_admin')); ?>/images/icons/5.png" alt="">
                <span class="menu-title">Setting<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="setting">
                <ul class="nav flex-column sub-menu">
                    <?php if(getSession('level') == 'Administrator'): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('admin')); ?>">Data Admin</a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(base_url('akun')); ?>">Akun</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(base_url('login/logout')); ?>">
                <!-- <i class="fa fa-dashboard"></i> -->
                <img src="<?php echo e(base_url('assets/star_admin')); ?>/images/icons/6.png" alt="">
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav><?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>