<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to our Site</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #fff;
            background : rgba(0,0,0,.3);
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body style="background: url('images/background/waterbackground.jpg'); background-size:cover;">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md" style="background:rgba(0,0,0,.5);border-radius:10px;padding:2px;">
                <img width="200px" src="images/logo/watermonitoring.png" alt="logo saqu">
            </div>
            <p style="color:#fff;background:rgba(0,0,0,.7)">Selamat datang , yuk gunakan aplikasi water monitoring <i class="far fa-smile-beam"></i>. <br> Klik <b>Login</b> atau <b>Register</b> untuk bergabung </p>
            @if (Route::has('login'))
            <div class="center links" style="margin-top:10px;">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a class="text" href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
            <br>
            <span style="color:#ffa500;background:rgba(0,0,0,.8);"><b><i class="fad fa-laptop"></i> Developed by IKHSAN MAULANA - NMPROduction 2020</b></span>
        </div>
    </div>
</body>

</html>