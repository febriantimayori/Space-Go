<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="../assets/icon/logo.png" rel="icon">

        <style>
            * {
                font-family: 'Montserrat', sans-serif;
                color: #000;
            }

            body {
                background-color: #F2F2F2;
            }

            .submit {
                width: 100px;
                height: 40px;
                margin: 10px 0px 0px 0px;
                bottom: 0;
                right: 0;
                margin-bottom: 20px;
                margin-right: 20px;
                border: none;
                border-radius: 10px;
                background-color: #FB9224;
                color: #fff;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .submit:hover {
                background-color: #FFF;
                color: #FB9224;
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

            .hero-container{
                height: 900px;
                margin: 20px 10px 10px 10px;
                text-align: center;
            }

            .hero-image {
                position: relative;
                display: inline-block;
            }

            .hero-image img {
                width: 1100px;
                height: auto;
            }

            .hero-text {
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            .hero-text .text-header b {
                width: 600px;
                height: auto;
                color: #FFF;
                text-align: center;
                font-family: 'Poppins', sans-serif;
                font-size: 40px;
                font-style: normal;
                font-weight: 700;
                line-height: 131.589%;
            }

            .hero-text .text-paragraf {
                width: 300px;
                color: #FFF;
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 20px;
                font-style: normal;
                font-weight: 400;
                line-height: 131.589%;
                margin: 0 auto;
            }

            .long-content {
                height: 900px;
            }
        </style>
        <title>Home</title>
    </head>
    <body>
        <?php include 'template/navbar.php'?>
   
        <div class="container">
            <div class="hero-container">
                <div class="hero-image">
                    <img src="../assets/img/home.png" alt="Hero Image">
                    <div class="hero-text">
                        <h2 class="text-header"><b>Selamat Datang di Jurusan Teknologi Informasi</b></h2>
                        <p class="text-paragraf">Manfaatkan fasilitas kampus dengan sebaik mungkin!</p>
                        <button class="submit">Let's Start</a>
                    </div>
                </div>
            </div>
            <div id="long-content" class="long-content">
                <div">
                    <h2><b>Selamat Datang di Jurusan Teknologi Informasi</b></h2>
                    <p>Manfaatkan fasilitas kampus dengan sebaik mungkin!</p>
                </div>
            </div>
        </div>

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

        $('.submit').on('click', function() {
            $('html, body').animate({
                scrollTop: $('#long-content').offset().top - 50
            }, 0);
        });
    });
</script>

</html>