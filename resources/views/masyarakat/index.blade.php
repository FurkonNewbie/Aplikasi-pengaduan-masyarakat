<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        /*font*/
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            scroll-padding-top: 2rem;
            text-decoration: none;
            scroll-behavior: smooth;
            font-family: 'Montserrat', sans-serif;

        }

        /* :root {
            --main-color: #008148;
            --second-color: #1e3932;
        } */

        section {
            padding: 34px 10%;
            background-color: #004643;
            color: white;
        }

        /* *::selection {
            color: #fff;
            background: var(--main-color);
        } */

        img {
            width: 100%;
        }

        header {
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
            padding: 15px 10%;
            background-color: #004643;
            transition: 0.2s;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo h1 {
            color: white;
            display: flex;
            align-items: center;
        }

        .navbar {
            display: flex;
        }

        .navbar a {
            font-size: 1rem;
            padding: 11px 20px;
            color: var(--second-color);
            font-weight: 600;

        }

        .navbar a:hover {
            background: #f9bc60;
            border-radius: 40px;
            transition: 0.2s all ease;

        }

        #menu-icon {
            font-size: 24px;
            cursor: pointer;
            z-index: 1001;
            display: none;
        }

        .home {
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 1rem;
        }

        .home-text {
            flex: 1 1 17rem;
            font-size: 20px;

        }

        .home-img {
            flex: 1 1 17rem;
        }

        .home-img img {
            animation: animate 3s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: translate(-11px, 0);
            }

            50% {
                transform: translate(0px, -11px);
            }

            100% {
                transform: translate(-11px, 0);
            }
        }

        .home-text span {
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: 600;
            color: var(--second-color);
        }

        .home-text h1 {
            font-size: 3.2rem;
            color: var(--main-color);
            font-weight: bolder;
        }

        .home-text h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--second-color);
            text-transform: uppercase;
            margin: 0.5rem 0 1.4rem;
        }

        .btn {
            padding: 10px;
            border: 2px solid var(--second-color);
            margin-right: 330px;
            color: var(--second-color);
            border-radius: 32px;
            font-weight: bold;
            background: #f9bc60;
        }

        .heading {
            text-align: center;
        }

        .heading-2 {
            text-align: center;
            color: white;
            background-color: #004643;
            padding: 50px;
        }

        .heading span {
            font-size: 1rem;
            font-weight: 600;
            color: var(--main-color);
        }

        .heading h1 {
            font-size: 2rem;
            color: var(--main-color);
        }

        .heading-two h1 {
            font-size: 2rem;
        }

        .shop-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 5rem;
            background-color: #abd1c6;
        }

        .shop-container .box {
            flex: 1 1 10rem;
            background: var(--main-color);
            padding: 20px;
            display: flex;
            text-align: center;
            flex-direction: column;
            align-items: center;
            margin-top: 3rem;
            border-radius: 0.5rem;
        }


        .shop {
            background-color: #abd1c6;
            color: #001e1d;
        }

        .shop-2 {
            background-color: #004643;
            color: white;
        }

        .app {
            font-size: 20px;
        }

        .container {

            padding: 15px 9%;
            padding-bottom: 100px;
        }

        .container .heading {
            text-align: center;
            padding-bottom: 15px;
            color: #fff;
            text-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            font-size: 50px;
        }

        .container .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
            gap: 15px;
        }

        .container .box-container .box {
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            border-radius: 5px;
            background: #fff;
            text-align: center;
            padding: 30px 20px;
        }

        .container .box-container .box img {
            height: 80px;
        }

        .container .box-container .box h3 {
            color: #444;
            font-size: 22px;
            padding: 10px 0;
        }

        .container .box-container .box p {
            color: #777;
            font-size: 15px;
            line-height: 1.8;
        }

        .container .box-container .box .btn {
            margin-top: 10px;
            display: inline-block;
            background: #333;
            color: #fff;
            font-size: 17px;
            border-radius: 5px;
            padding: 8px 25px;
        }

        .container .box-container .box .btn:hover {
            letter-spacing: 1px;
        }

        .container .box-container .box:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, .3);
            transform: scale(1.03);
        }

        @media (max-width:768px) {
            .container {
                padding: 20px;
            }
        }

        .deskripsi {
            background-color: #004643;
        }

        .deskripsi-awal {
            display: flex;
            flex-wrap: wrap;
            gamp: 1.5rem;
            margin-top: 2rem;
        }

        .deskripsi-img {
            flex: 2 2 21rem;
        }

        .deskripsi-text {
            flex: 1 1 21rem;
        }

        .deskripsi-text h3 {
            font-size: 1.2rem;
        }

        .box img {
            size: 20px;
        }

        .about {
            display: grid;
            align-items: center;
            grid-template-columns: repeat(auto-fit, minmax(30rem, auto));
            gap: 1.5rem;
        }

        .about-text h2 {
            font-size;
            1.8rem;

        }

        footer {
            position: absolute;
            background: #white;
            height: auto;

            width: 100vw;
            font-family: "Open Sans";
            padding-top: 40px;
            color: #000000;
        }

        .footer-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
        }

        .footer-content h3 {
            font-size: 1.8rem;
            font-weight: 400;
            text-transform: capitalize;
            line-height: 3rem;
        }

        .footer-content p {
            max-width: 500px;
            margin: 10px auto;
            line-height: 28px;
            font-size: 14px;
        }

        .socials {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 1rem 0 3rem 0;
        }

        .socials li {
            margin: 0 10px;
        }

        .socials a {
            text-decoration: none;
            color: #fff;
        }

        .socials a i {
            font-size: 1.1rem;
            transition: color .4s ease;
            color: black;
        }

        .socials a:hover i {
            color: aqua;
        }

        .footer-bottom {
            background: white;
            width: 100vw;
            color: black;
            padding: 20px 0;
            text-align: center;
        }

        .footer-bottom p {
            font-size: 14px;
            word-spacing: 2px;
            text-transform: capitalize;
        }

        .footer-bottom span {
            text-transform: uppercase;
            opacity: .4;
            font-weight: 200;
        }
    </style>
    <title>Bebabs</title>
</head>

<body>
    <!--navbar-->
    <header>
        <a href="Logo" class="logo">
            <h1>APM</h1>
        </a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">

            <li><a href="#List">Home</a></li>
            <li><a href="#Product">Informasi</a></li>
            <li><a href="{{ route('registrasi') }}">Registrasi</a></li>
            <li><a href="{{ route('login') }}">Log in</a></li>


        </ul>
    </header>
    <!--Home-->
    <section class="home" id="home">
        <div class="home-text">
            <br>
            <span>Selamat Datang di</span>
            <h1 class="app">Aplikasi Pengaduan <br> Online</h1>
            <h5>Penanganan pengaduan keluh kesah masyarakat
                kepada Pemerintah</h5>
            <br>
            <a href="#" class="btn">Gabung Sekarang</a>
        </div>
        <div class="home-img">
            <img src="img/navbar-preview.png" alt="">
        </div>
    </section>

    <section class="shop" id="shop">
        <div class="heading">
            <h1>Tentang Aplikasi</h1>
        </div>
        <br>
        <br>
        <div class="container">
            <div class="box-container">
                <div class="box">
                    <box-icon type='solid' name='book'></box-icon>
                    <h3>Pengaduan</h3>
                    <p>masyarakat bisa melakukan
                        pengaduan kepada pemerintah
                        dengan mencakup berbagai masalah</p>
                </div>
                <div class="box">
                    <h3>Tanggapan</h3>
                    <p>Pengaduan masyarakat akan ditanggapi oleh para petugas untuk menangani berbagai masalah dari
                        masyarakat</p>
                </div>

                <div class="box">
                    <h3>penanganan cepat</h3>
                    <p>Penanganan pengaduan yang di sampaikan, akan kami proses secara cepat</p>
                </div>
            </div>
        </div>
    </section>
    <!--about-->
    <div class="heading-2">
        <h1>Bagaimana Cara
            Membuat pengaduan
            dengan Baik Dan Benar?</h1>
    </div>
    <section class="about">

        <div class="about-img">
            <img src="img/deskripsi-awal.jpg" alt="">
        </div>
        <div class="about-text">
            <h2> Uraikan pokok permasalahan
                secara jelas, lengkap dan
                kronologins</h2>
        </div>
        <div class="about-img">
            <img src="img/deskripsi-tengah.jpg" alt="">
        </div>
        <div class="about-text">
            <h2> Gunakan bahasa indonesia yang baik dan benar</h2>
        </div>
        <div class="about-img">
            <img src="img/deskripsi-akhir.jpg" alt="">
        </div>
        <div class="about-text">
            <h2> lampirkan bukti pendukung apabila tersedia</h2>
        </div>
    </section>
    <footer>
        <div class="footer-content">
            <h3>Aplikasi Pengaduan Masyarakat</h3>
            <p>Kontak kami</p>
            <ul class="socials">
                <li><a href="https://https://mail.google.com"><i class="fa-solid fa-envelope"></i></a></li>
                <li><a
                        href="https://www.google.com/maps/place/PASAR+BAREGBEG+LAKBOK/@-7.3994994,108.6798841,17.67z/data=!4m6!3m5!1s0x2e65876ca7eb1679:0x223c944319993222!8m2!3d-7.3994766!4d108.6828069!16s%2Fg%2F11bv5rwrfd?entry=ttu"><i
                            class="fa-solid fa-location-dot"></i></a></li>
                <li><a href="https://web.whatsapp.com/"><i class="fa-brands fa-square-whatsapp"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2020 codeOpacity. designed by <span>nethunt</span></p>
        </div>
    </footer>
    <script src="main.js"></script>
</body>

</html>
