<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding signup and signin form - BYTEWEBSTER</title>
    <style>
        /*https://bytewebster.com/*/
        /*https://bytewebster.com/*/
        /*https://bytewebster.com/*/
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css");

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ddd;
            font-size: 14px;
        }

        .container {
            background-color: #fff;
            width: 1000px;
            max-width: 100vw;
            height: 600px;
            position: relative;
            overflow-x: hidden;
        }

        .container .forms-container {
            position: relative;
            width: 50%;
            text-align: center;
        }

        .container .forms-container .form-control {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 480px;
            transition: all 0.5s ease-in;
        }

        .container .forms-container .form-control h2 {
            font-size: 2rem;
        }

        .container .forms-container .form-control form {
            display: flex;
            flex-direction: column;
            margin: 0px 30px;
        }

        .container .forms-container .form-control form input {
            margin: 10px 0px;
            border: none;
            padding: 15px;
            background-color: #efefef;
            border-radius: 5px;
        }

        .container .forms-container .form-control form a {
            border: none;
            padding: 20px;
            margin-top: 5px;
            background-color: #f9bc60;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        .container .forms-container .form-control form a:focus {
            outline: none;
        }

        .container .forms-container .form-control span {
            margin: 10px 0px;
        }

        .container .forms-container .form-control .socials i {
            margin: 0 5px;
            color: #fff;
            border-radius: 50%;
        }

        .container .forms-container .form-control .socials .fa-facebook-f {
            padding: 5px 8px;
            background-color: #3b5998;
        }

        .container .forms-container .form-control .socials .fa-google-plus-g {
            padding: 5px 4px;
            background-color: #db4a39;
        }

        .container .forms-container .form-control .socials .fa-linkedin-in {
            padding: 5px 6px;
            background-color: #0e76a8;
        }

        .container .forms-container .form-control.signup-form {
            opacity: 0;
            z-index: 1;

            left: 200%;
            top: 50px;
        }

        .container .forms-container .form-control.signin-form {
            opacity: 1;
            z-index: 1;
            left: 0%;
        }

        .container .intros-container {
            position: relative;
            left: 50%;
            width: 50%;
            text-align: center;
        }

        .container .intros-container .intro-control {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            height: 600px;
            color: #fff;
            background: linear-gradient(170deg, #004643, #004643);
            transition: all 0.5s ease-in;
        }

        .container .intros-container .intro-control .intro-control__inner {
            margin: 0px 30px;
        }

        .container .intros-container .intro-control a {
            border: none;
            padding: 15px 30px;
            background-color: #f9bc60;
            border-radius: 50px;
            color: #fff;
            margin: 10px 0px;
            cursor: pointer;
            text-decoration: none;
            list-style: none;
        }

        .container .intros-container .intro-control button {
            border: none;
            padding: 15px 30px;
            background-color: #f9bc60;
            border-radius: 50px;
            color: #fff;
            margin: 10px 0px;
            cursor: pointer;
            text-decoration: none;
            list-style: none;
        }

        .container .forms-container .form-control form button {
            border: none;
            padding: 20px;
            margin-top: 5px;
            background-color: #f9bc60;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        .container .forms-container .form-control form button:focus {
            outline: none;
        }

        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.35rem;
        }

        .alert-danger {
            color: #ffff;
            background-color: #e74a3b;
            border-color: #bff0de;
        }
    </style>
    <!-- https://bytewebster.com/ -->
    <!-- https://bytewebster.com/ -->
    <!-- https://bytewebster.com/ -->
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="form-control signin-form">
                <form action="/login" method="post">
                    @csrf
                    <h2>Signin</h2>
                    <input type="email" name="email" placeholder="email" value="{{ old('email') }}" required />
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="password" name="password" placeholder="Password" required />
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <button type="submit">Signin</button>
                </form>
                <br><br>
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="intros-container">
            <div class="intro-control signin-intro">
                <div class="intro-control__inner">
                    <h2>Selamat Datang!</h2>
                    <p>
                        Selamat Datang kembali! Kami sangat senang Anda ada di sini. Senang bertemu denganmu lagi. Kami
                        berharap Anda memiliki
                        waktu luang yang aman dan menyenangkan.
                    </p>
                    <br><br>
                    <a href="{{ route('registrasi') }}" id="signup-btn">No account yet? Signup.</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
