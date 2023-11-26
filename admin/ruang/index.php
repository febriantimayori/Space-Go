<?php
    include_once("config/koneksi.php");
?>

<head>
    <title>Ruang</title>
    <style>
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

        .btn-simpan {
            background-color: #FFBD2E;
            color: #fff;
            border-radius: 20px;
            width: 90px;
            height: 35px;
            font-size: 14px;
        }

        .btn-simpan:hover {
            background-color: #FFBD2E;
            color: #fff;
        }
    </style>
</head>

<main class="col-md-10" style="background-color: #F5F5F5">
    <div class="row pt-3 pb-2 mb-3 px-1 border-bottom">
        <div class="d-flex p-1 justify-content-center align-items-center custom-title-box">
            <div class="mx-3 custom-title-icon">
                <img src="assets/icon/ruang-2.png" style="width: 36px;" alt="" srcset="">
            </div>
            <div class="custom-title-text">RUANG</div>
        </div>
    </div>
    <div class="row px-3">
        <div class="col-lg-3">
            <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa fa-plus"></i> Tambah Ruang</button>
        </div>
    </div>
    <div class="table-responsive small pt-3 px-3" style="border-radius: 50px;">
        <table class="table"> 
            <thead>
                <tr>
                    <th scope="col" style="background-color: #363062; color:#fff;">Kode</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Nama Ruang</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Lantai</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Kapasitas</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Fasilitas</th>
                    <th scope="col" style="background-color: #363062; color:#fff;">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                // $no = 1;
                $query = "SELECT * FROM ruangan order by kode desc";
                $result = mysqli_query($koneksi, $query);
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td>
                    <?= $row['kode'] ?>
                </td>
                <td>
                    <?= $row['nama'] ?>
                </td>
                <td>
                    <?= $row['lantai'] ?>
                </td>
                <td>
                    <?= $row['kapasitas'] ?>
                </td>
                <td>
                    <?= $row['fasilitas'] ?>
                </td>
                <td>
                    <a href="index.php?page=ruang/edit&id=<?= $row['id'] ?>" class="btn btn-warning btn-xs" style="color: #fff; width: 80px; height: 35px; font-size: 14px;"><img src="assets/icon/ic-edit.png" alt="" srcset="" style="width: 16px; width:16px; margin-bottom: 2px;"> Edit</a>
                    <a href="fungsi/hapus.php?ruang=hapus&id=<?= $row['id'] ?>" onclick="javascript:return confirm('Hapus Data Jabatan ?');" class="btn btn-danger btn-xs" style="width: 100px; height: 35px; font-size: 14px;"><img src="assets/icon/ic-delete.png" alt="" srcset="" style="width: 16px; width:16px; margin-bottom: 3px;"> Delete</a>
                </td> 
            </tr> 
            <?php } ?>
            </tbody>  
        </table>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Ruang</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="fungsi/tambah.php?ruang=tambah" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kode:</label>
                            <input type="text" name="kode" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Ruang:</label>
                            <input type="text" name="nama_ruang" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Lantai: </label>
                            <input type="text" name="lantai" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kapasitas:</label>
                            <input type="text" name="kapasitas" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fasilitas:</label>
                            <input type="text" name="fasilitas" class="form-control" id="recipient-name">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-batal" data-bs-dismiss="modal">
                                Batal
                        </button>
                        <button type="submit" class="btn btn-simpan">
                                Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>