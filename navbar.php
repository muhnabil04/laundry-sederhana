<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

        <div class="sidebar-brand-text mx-3">Dashboard <sup>Laundry</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="home.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        <!-- Divider -->
        <hr class="sidebar-divider">
    </li>



    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <?php
    if ($_SESSION['role'] == "admin" || $_SESSION['role'] == "kasir") {
    ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pelangganData" aria-expanded="true" aria-controls="pelangganData">
                <i class="fas fa-fw fa-cog"></i>
                <span>Manajemen Pelanggan</span>
            </a>
            <div id="pelangganData" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="data_pelanggan.php">Data</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php
    }
    ?>



    <?php
    if ($_SESSION['role'] == "admin") {
    ?>
        <li class="nav-item">
            <a class="nav-link" href="data_outet.php">
                <i class="fas fa-fw fa-cog"></i>
                <span>data outlet</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php
    }
    ?>



    <?php
    if ($_SESSION['role'] == "admin") {
    ?>
        <li class="nav-item">
            <a class="nav-link" href="data_paket.php">
                <i class="fas fa-fw fa-cog"></i>
                <span>data paket</span></a>
        </li>
        <hr class="sidebar-divider">
    <?php
    }
    ?>

    <!-- Divider -->


    <?php
    if ($_SESSION['role'] == "admin") {
    ?>
        <li class="nav-item">
            <a class="nav-link" href="data_pengguna.php">
                <i class="fas fa-fw fa-cog"></i>
                <span>data pengguna</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
    <?php
    }
    ?>






</ul>
<!-- End of Sidebar -->