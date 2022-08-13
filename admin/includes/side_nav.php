<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
<!--                    <div class="sb-sidenav-menu-heading">Core</div>-->
                    <a class="nav-link" href="admin.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="blood_group.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-droplet"></i></div>
                        Blood Group
                    </a>
                    <a class="nav-link" href="doner_list.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-hand-holding-droplet"></i></div>
                        Blood Doner List
                    </a>
                    <a class="nav-link" href="available_doners.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-hand-holding-droplet"></i></div>
                        Available for Donation
                    </a>

                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                <?php echo $_SESSION['username']; ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">