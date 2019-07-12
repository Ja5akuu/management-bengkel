<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url() ?>beranda" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <?php
                if ($_SESSION['level'] == 'Administrator' or $_SESSION['level'] == 'admin') {
                        # code...
                    echo 
                    '
                    <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i>
                    <span class="hide-menu">Master</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item">
                    <a href="'.base_url().'user" class="sidebar-link">
                    <i class="mdi mdi-account"></i>
                    <span class="hide-menu">Master User</span>
                    </a>
                    </li>
                    <li class="sidebar-item">
                    <a href="'.base_url().'supplier" class="sidebar-link">
                    <i class="mdi mdi-account"></i>
                    <span class="hide-menu">Master Supplier</span>
                    </a>
                    </li>
                    <li class="sidebar-item">
                    <a href="'.base_url().'satuan" class="sidebar-link">
                    <i class="mdi mdi-account"></i>
                    <span class="hide-menu">Master Satuan</span>
                    </a>
                    </li>
                    <li class="sidebar-item">
                    <a href="'.base_url().'kategori" class="sidebar-link">
                    <i class="mdi mdi-account"></i>
                    <span class="hide-menu">Master Kategori</span>
                    </a>
                    </li>
                    <li class="sidebar-item">
                    <a href="'.base_url().'teknisi" class="sidebar-link">
                    <i class="mdi mdi-cash"></i>
                    <span class="hide-menu">Master Teknisi</span>
                    </a>
                    </li>
                    <li class="sidebar-item">
                    <a href="'.base_url().'brand" class="sidebar-link">
                    <i class="mdi mdi-alarm"></i>
                    <span class="hide-menu">Master Brand</span>
                    </a>
                    </li>
                    <li class="sidebar-item">
                    <a href="'.base_url().'type" class="sidebar-link">
                    <i class="mdi mdi-alarm"></i>
                    <span class="hide-menu">Master Type</span>
                    </a>
                    </li>
                    <li class="sidebar-item">
                    <a href="'.base_url().'barang" class="sidebar-link">
                    <i class="mdi mdi-account-multiple"></i>
                    <span class="hide-menu">Master Barang</span>
                    </a>
                    </li>
                    </ul>
                    </li>
                    ';
                } 

                ?>

                <?php
                if ($_SESSION['level'] == 'Administrator' or $_SESSION['level'] == 'admin' or $_SESSION['level'] == 'operator') {
                    # code...
                    echo 
                    '
                    <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i>
                    <span class="hide-menu">Transaksi</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item">
                    <a href="'.base_url().'customer" class="sidebar-link">
                    <i class="mdi mdi-amplifier"></i>
                    <span class="hide-menu">Customer</span>
                    </a>
                    </li>
                    <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="'.base_url().'transaksi"><i class="mdi mdi-blur-linear"></i>
                    <span class="hide-menu">Transaksi</span>
                    </a>
                    </li>
                    </ul>
                    </li>
                    '
                    ;
                } 
                
                ?>
                
                

                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url() ?>Laporan"><i class="mdi mdi-chart-bar"></i>
                        <span class="hide-menu">Laporan</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>