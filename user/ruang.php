<?php
    include 'template/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang</title>
    <style>
        body {
            background-color: #2A1A5E;
        }

        .btn-detail {
            background-color: #FB9224;
            color: #fff;
        }

        .btn-detail:hover {
            background-color: #FB9224;
            color: #fff;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-4" style="border: 0; border-radius: 20px;">
            <div class="card-body">
                <nav class="navbar navbar-light" style="border-radius: 15px;">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                        
                </nav>

                <div class="text-center pb-5">
                    <img src="../assets/img/denah-lt-5.png">
                    <img src="../assets/img/ket-lt-5.png">
                </div>
                
                <div class="table-responsive small pt-3 px-3">
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th scope="col">KODE RUANG</th>
                                <th scope="col">NAMA RUANG</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    test
                                </td>
                                <td>
                                    test
                                </td>
                                <td>
                                    <button type="button" class="btn btn-detail" data-bs-toggle="modal" data-bs-target="#detailModal" data-bs-whatever="@mdo"> Detail</button>
                                </td>
                            </tr>
                        </tbody>  
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="detailModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Nama Ruang??</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    
                    
                </div>
                <div class="modal-body border-bottom">
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <label for="recipient-name" class="col-form-label">Hari:</label>
                            <select class="form-select text-modal-custom" name="lantai" aria-label="Default select example">
                                <option selected>Hari</option>
                                <!-- Add options dynamically using PHP -->
                            </select>
                        </div>
                    </div>
                </div>
                    
                <form action="fungsi/tambah.php?ruang=tambah" method="post">
                    <div class="modal-body" style="font-size: 16px">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Matkul:</label>
                                <select class="form-select text-modal-custom" name="lantai" aria-label="Default select example">
                                    <option selected>Matkul</option>
                                    <!-- Add options dynamically using PHP -->
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Dosen:</label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Jam Mulai: </label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Kapasitas:</label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Jam Selesai:</label>
                                <input type="text" name="fasilitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Fasilitas:</label>
                                <input type="text" name="fasilitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>