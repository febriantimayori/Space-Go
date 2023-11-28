<div class="sidebar border-right col-md-3 col-lg-2 p-0" style="height: 300vh; background-color: #363062;">
    <div class="offcanvas-md offcanvas-end " tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">..</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <?php
                    $page = isset($_GET['page']) ? $_GET['page'] : '';

                ?>

                <?php 
                    if ($page == 'dashboard' || $page == ''){
                        ?>
                        <li class="nav-item" style="background-color: #2D2852;">
                            <a class="nav-link d-flex align-items-center gap-2 "  href="?page=dashboard" style="color: #fff; font-size: 14px;">
                                <img src="assets/icon/ic-dashboard.png" alt="">
                                Dashboard
                            </a>
                        </li>
                <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 "  href="?page=dashboard" style="color: #fff; font-size: 14px;">
                                <img src="assets/icon/ic-dashboard.png" alt="">
                                Dashboard
                            </a>
                        </li>
                        <?php
                    }
                ?>

                <?php
                    if ($page == 'ruang') {
                        ?>
                        <li class="nav-item" style="background-color: #2D2852;">
                            <a class="nav-link d-flex align-items-center gap-2" href="?page=ruang" style="color: #fff; font-size: 14px;">
                                <img src="assets/icon/ic-ruang.png" alt="">
                                Ruang
                            </a>
                        </li>
                <?php
                    } else {
                        ?>

                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="?page=ruang" style="color: #fff; font-size: 14px;">
                                <img src="assets/icon/ic-ruang.png" alt="">
                                Ruang
                            </a>
                        </li>
                        <?php
                    }
                ?>

                <?php 
                    if ($page == 'peminjaman' || $page == ''){
                        ?>
                        <li class="nav-item" style="background-color: #2D2852;">
                            <a class="nav-link d-flex align-items-center gap-2" href="?page=peminjaman" style="color: #fff; font-size: 14px;">
                            <img src="assets/icon/ic-peminjaman.png" alt="">
                                Peminjaman
                            </a>
                        </li>
                <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="?page=peminjaman" style="color: #fff; font-size: 14px;">
                            <img src="assets/icon/ic-peminjaman.png" alt="">
                                Peminjaman
                            </a>
                        </li>
                        <?php
                    }
                ?>
                
            </ul>

            <!-- <hr class="my-3"> -->

            <ul class="nav flex-column mb-auto">
                <?php 
                    if ($page == 'jadwal' || $page == ''){
                        ?>
                        <li class="nav-item" style="background-color: #2D2852;">
                            <a class="nav-link d-flex align-items-center gap-2" href="?page=jadwal" style="color: #fff; font-size: 14px;">
                            <img src="assets/icon/ic-jadwal.png" alt="">
                                Jadwal
                            </a>
                        </li>
                <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="?page=jadwal" style="color: #fff; font-size: 14px;">
                            <img src="assets/icon/ic-jadwal.png" alt="">
                                Jadwal
                            </a>
                        </li>
                        <?php
                    }
                ?>

                <?php 
                    if ($page == 'history' || $page == ''){
                        ?>
                        <li class="nav-item" style="background-color: #2D2852;">
                            <a class="nav-link d-flex align-items-center gap-2" href="?page=history" style="color: #fff; font-size: 14px;">
                                <img src="assets/icon/ic-history.png" alt="">
                                History
                            </a>
                        </li>
                <?php
                    } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="?page=history"" style="color: #fff; font-size: 14px;">
                                <img src="assets/icon/ic-history.png" alt="">
                                History
                            </a>
                        </li>
                        <?php
                    }
                ?>
                
            </ul>
        </div>
    </div>
</div>