<?php
    include 'template/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <style>
        body {
            background-color: #2A1A5E;
        }

        .btn-print {
            background-color: #FB9224;
            color: #fff;
        }

        .btn-print:hover {
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
                
                <div class="table-responsive small pt-3 px-3">
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th scope="col">NAMA</th>
                                <th scope="col">TANGGAL</th>
                                <th scope="col">K. RUANG</th>
                                <th scope="col">KEPERLUAN</th>
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
                                    test
                                </td>
                                <td>
                                    test
                                </td>
                                <td>
                                    <button type="button" class="btn btn-print">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32" fill="none">
                                            <path d="M9.6665 9.33317H22.3332V6.6665C22.3332 3.99984 21.3332 2.6665 18.3332 2.6665H13.6665C10.6665 2.6665 9.6665 3.99984 9.6665 6.6665V9.33317Z" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M21.3332 20V25.3333C21.3332 28 19.9998 29.3333 17.3332 29.3333H14.6665C11.9998 29.3333 10.6665 28 10.6665 25.3333V20H21.3332Z" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M28 13.3335V20.0002C28 22.6668 26.6667 24.0002 24 24.0002H21.3333V20.0002H10.6667V24.0002H8C5.33333 24.0002 4 22.6668 4 20.0002V13.3335C4 10.6668 5.33333 9.3335 8 9.3335H24C26.6667 9.3335 28 10.6668 28 13.3335Z" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M22.6668 20H21.0535H9.3335" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.3335 14.6665H13.3335" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        Print
                                    </button>
                                </td>
                            </tr>
                        </tbody>  
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>