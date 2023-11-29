<?php 
    include 'template/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>

    <style>

        body {
            background-color: #2A1A5E;
        }

        .btn-custom {
            background-color: none;
            border: none;
            padding-left: 0;
        }

        .btn-batal {
            background-color: #2A1A5E;
            color: #fff;
            border-radius: 20px;
            width: 80px;
            height: 35px;
            font-size: 14px;
        }

        .btn-batal:hover {
            background-color: #242041;
            color: #fff;
        }

        .btn-pinjam {
            background-color: #FFBD2E;
            color: #fff;
            border-radius: 20px;
            width: 90px;
            height: 35px;
            font-size: 14px;
        }

        .btn-pinjam:hover {
            background-color: #FFBD2E;
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
                                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#tambahRuangModal" data-bs-whatever="@mdo"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 39 39" fill="none">
                                            <path d="M19.5 35.75C28.4375 35.75 35.75 28.4375 35.75 19.5C35.75 10.5625 28.4375 3.25 19.5 3.25C10.5625 3.25 3.25 10.5625 3.25 19.5C3.25 28.4375 10.5625 35.75 19.5 35.75Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M13 19.5H26" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M19.5 26V13" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>  
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="tambahRuangModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Peminjaman</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="fungsi/tambah.php?ruang=tambah" method="post">
                        <div class="modal-body" style="font-size: 16px">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                <input type="text" name="kode" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nim:</label>
                                <input type="text" name="nama_ruang" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="mb-3" id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                                <label for="recipient-name" class="col-form-label">Tanggal Pinjam: </label>
                                    <input placeholder="Select date" type="text" id="example" class="form-control">
                                    <i class="fas fa-calendar input-prefix"></i>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Tanggal Kembali:</label>
                                <select class="form-select text-modal-custom" name="fasilitas" name aria-label="Default select example">
                                    <!-- <option selected>tanggal</option> -->
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Kode Ruang:</label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Keterangan:</label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">No. Hp:</label>
                                <input type="text" name="kapasitas" class="form-control text-modal-custom" id="recipient-name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-batal" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-pinjam">
                                Pinjam
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    // Data Picker Initialization
    $('.datepicker').datepicker({
    inline: true
    });
</script>
</html>