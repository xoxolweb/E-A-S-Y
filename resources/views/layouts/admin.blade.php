<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/reset.css">
    <link rel="stylesheet" href=" /public/css/fonts.css">
    <link rel="stylesheet" href=" /public/css/style.css">
    <link rel="stylesheet" href=" /public/css/media.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src=" /public/libs/jquery-2.2.4.min.js"></script>
    <script src=" /public/libs/slick.min.js"></script>
</head>

<body>
<header>
    <div class="top_header">
        <div class="contain">
            <div class="social">
                <a href="#" class="icon-vk"></a>
                <a href="#" class="icon-tw"></a>
                <a href="#" class="icon-fb"></a>
                <a href="#" class="icon-reply-all"></a>
            </div>
        </div>
    </div>
    <div class="bot_header">
        <div class="contain">
            <div class="logo"><img src=" /public/img/logo.svg" alt=""></div>
            <div class="call_back">
                <i class="icon-fh_head"></i>
                <a href="tel:+0800759359">
                    <p>0 800 759 359</p>
                    <p>Позвонить</p>
                </a>
            </div>
            <nav>
                <a href="{{ route('adminAddNew') }}">Добавить</a>
                <a href="{{ route('adminEdit') }}">Редактировать</a>

                <a href="{{ route('logout') }}"><b>Выйти</b></a>
            </nav>
        </div>
    </div>
</header>

        @yield('content')

{{--<footer>--}}{{--

    <div class="contain">

    </div>
--}}{{--</footer>--}}

<!-- Scripts -->

<script src="/public/js/main.js"></script>
<script src="/public/js/app.js"></script>

</body>
</html>
