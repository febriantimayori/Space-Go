<?php
    if (session_status() == PHP_SESSION_NONE)
        session_start();

    // if (!empty($_SESSION['level'])) {
        // require 'config/koneksi.php';
        // require 'fungsi/pesan_kilat.php';

        include 'admin/template/header.php';
        // include 'template/sidebar.php';
        ?>
        <div class="container-fluid" style="background-color: #F5F5F5; min-height: 100vh">
            <div class="row">
                <?php
                    include "admin/template/sidebar.php";

                if (!empty($_GET['page'])) {
                    include 'admin/' . $_GET['page'] . '/index.php';
                } else {
                    include 'admin/dashboard/index.php'; 
                }
                ?>
            </div>
        </div>
        <?php
        include 'admin/template/footer.php';
    // } else {
    //     header('location:home.php');
    // }
?>