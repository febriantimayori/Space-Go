<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    body{
        background-color: #f8f8f8;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        height: 100vh;
        background: url('assets/img/bg-home.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .logo{
        display: inline-flex;
        padding: 5.116px 10px;
        align-items: center;
        gap: 7.674px;
        border-radius: 7.674px;
        border: ;
    }

    .logo .custom-div{
        align-items: center;
    }

    .container {
        align-items: center;
        position: relative;
        overflow: hidden;
        width: 50%;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .text {
        text-align: center;
    }

    .text h3 {
        margin: 10px 0;
        color: #F45905;
        text-align: center;
        font-family: Poppins;
        font-size: 48px;
        font-style: normal;
        font-weight: 600;
        line-height: 131.589%; /* 105.272px */
    }

    .text p {
        margin: 10px 0;
        color: #000;
        text-align: center;
        font-family: Montserrat;
        font-size: 32px;
        font-style: normal;
        font-weight: 300;
    }

    .button{
        width: 128px;
        height: 42px;
        flex-shrink: 0;
        bottom: 0;
        right: 0;
        margin-top: 10px;
        margin-right: 5px;
        border: none;
        border-radius: 16px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-login{
        background-color: #2A1A5E;
        color: #FFFFFF;
    }

    .btn-register{
        background-color: #FB9224;
        color: #FFFFFF;
    }

    .btn-login:hover{
        background-color: #242041;
    }

    .btn-register:hover{
        background-color: #A76118;
    }
</style>
</head>
<body>

<div class="container">
    <div class="logo">
        <div class="custom-div">
            <img src="assets/img/logo-polinema.png" alt="Logo 1" height="65px" style="margin-right: 16px;">
            <img src="assets/img/logo-h-copy.png" alt="Logo" height="45px" style="margin-right: 16px;">
            <img src="assets/img/logo-jti.png" alt="Logo 2" height="60px" style="margin-right: 16px;">
        </div>
    </div>
    <div class="text">
        <h3 class="w3-margin"><b>What Website is This?</b></h3>
        <p class="w3-large">
            Ayo berkenalan dengan website “Space Go”. "Space Go" merupakan situs keren buat booking ruangan di JTI Politeknik Negeri Malang, loh! Jadi, kalau lagi butuh ruangan buat bikin acara atau rapat, bisa cek di sini. Desain antarmukanya mudah banget, bisa lihat ruangan yang kosong dan langsung booking. Simpel! Mudah! Dan Praktis! 
            "Space Go" bisa jadi pilihan yang oke untuk meminjam ruangan pada JTI! 🚀✨
        </p>
    </div>
    <div>
        <a href="login_user.php">
            <button class="button btn-login"><b>LOGIN</b></button>
        </a>
        <a href="register.php">
            <button class="button btn-register"><b>REGISTER</b></button>
        </a>
    </div>
</div>

</body>
</html>