<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            * {
                font-family: "Montserrat";
                color: #000;
            }

            body {
                background-color: #E5E5E5;
            }

            .teks1 {
                color: #FFF;
                text-align: center;
                font-size: 40px;
                font-style: normal;
                font-weight: 700;
                line-height: 131.589%;
                width: 449.457px;
                height: 65.539px;
                flex-shrink: 0;
                
            }

            .btn-kuning {
                background-color: #FB9224;
                border-radius: 10px;
                width: 123.838px;
                height: 50.345px;
                font-size: 17px;
                font-style: normal;
                font-weight: 700;
            }

            .btn-kuning:hover {
                background-color: #FFF;
                border-radius: 10px;
                width: 123.838px;
                height: 50.345px;
                font-size: 17px;
                font-style: normal;
                font-weight: 700;
            }

            .navbar-nav .nav-item {
                position: relative;
            }

            .navbar-nav .nav-item .underline {
                position: absolute;
                bottom: 0;
                left: 50%;
                height: 3px;
                background-color: #000;
                width: 0;
                transition: width 0.3s ease-in-out, left 0.3s ease-in-out;
            }

            .navbar-nav .nav-item:hover .underline {
                width: 100%;
                left: 0;
            }
        </style>
        <title>Home</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff;">

            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../assets/icon/logo.png" style="width: 60px; height: 60px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                HOME
                                <span class="underline"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                RUANG
                                <span class="underline"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">
                                PEMINJAMAN
                                <span class="underline"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                HISTORY
                                <span class="underline"></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <a class="navbar-brand" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="34px" viewBox="0 0 40 44" fill="none">
                        <path d="M14.6001 3.17146H14.8167C22.2167 3.17146 25.7834 6.37979 26.4001 13.5665C26.4667 14.3181 25.9667 14.9965 25.2667 15.0698C24.6001 15.1431 23.9667 14.5748 23.9001 13.8231C23.4167 8.06646 20.9501 5.92146 14.8001 5.92146H14.5834C7.80006 5.92146 5.40006 8.56145 5.40006 16.0231V27.9765C5.40006 35.4381 7.80006 38.0781 14.5834 38.0781H14.8001C20.9834 38.0781 23.4501 35.8965 23.9001 30.0298C23.9834 29.2781 24.5667 28.7098 25.2667 28.7831C25.9667 28.8381 26.4667 29.5165 26.4167 30.2681C25.8501 37.5648 22.2667 40.8281 14.8167 40.8281H14.6001C6.41673 40.8281 2.91673 36.9781 2.91673 27.9765V16.0231C2.91673 7.02146 6.41673 3.17146 14.6001 3.17146Z" fill="black"/>
                        <path d="M15 20.625H33.9667C34.65 20.625 35.2167 21.2483 35.2167 22C35.2167 22.7517 34.65 23.375 33.9667 23.375H15C14.3167 23.375 13.75 22.7517 13.75 22C13.75 21.2483 14.3167 20.625 15 20.625Z" fill="black"/>
                        <path d="M30.2501 14.4835C30.5667 14.4835 30.8834 14.6118 31.1334 14.8868L36.7167 21.0285C37.2001 21.5601 37.2001 22.4401 36.7167 22.9718L31.1334 29.1135C30.6501 29.6451 29.8501 29.6451 29.3667 29.1135C28.8834 28.5818 28.8834 27.7018 29.3667 27.1701L34.0667 22.0001L29.3667 16.8301C28.8834 16.2985 28.8834 15.4185 29.3667 14.8868C29.6001 14.6118 29.9334 14.4835 30.2501 14.4835Z" fill="black"/>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </body>

    <script>
    $(document).ready(function () {
        $('.nav-item').hover(
            function () {
                $(this).find('.underline').css({
                    'width': '100%',
                    'left': '0'
                });
            },
            function () {
                $(this).find('.underline').css({
                    'width': '0',
                    'left': '50%'
                });
            }
        );
    });
</script>

</html>