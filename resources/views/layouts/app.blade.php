<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/public/css/reset.css">
    <link rel="stylesheet" href=" /public/css/fonts.css">
    <link rel="stylesheet" href=" /public/css/style.css">
    <link rel="stylesheet" href=" /public/css/media.css">

    <script src=" /public/libs/jquery-2.2.4.min.js"></script>
    <script src=" /public/libs/slick.min.js"></script>

</head>

<body>
<script>
    csrfToken = '<? print csrf_token()?>';
</script>
<!--- header -> start --->
<header>
<div class="top_header">
    <div class="contain">
        <div class="social">
            <a href="#"> <i class="icon-vk"></i></a>
            <a href="#"><i class="icon-tw"></i></a>
            <a href="#"><i class="icon-fb"></i></a>
            <a href="#"><i class="icon-reply-all"></i></a>
        </div>
    </div>
</div>
<div class="bot_header">
    <div class="contain">
        <div class="logo">
            <a href="{{route('main')}}"><img src="/public/img/logo.svg" alt="logo e-a-s-y"></a>
        </div>
        <div class="call_back">
            <i class="icon-fh_head"></i>
            <a href="tel:+0800759359">
                <p>0 800 759 359</p>
                <p>Звонок</p>
            </a>
        </div>
        <div class="nav">
            <a href="#">
                <i class="icon-menu"></i>
            </a>
            <nav>
                <a href="/rent">Арендовать</a>
                <a href="#">Сдать</a>
                <a href="#">Ваш отзыв</a>
                <a href="#">Контакты</a>
            </nav>
        </div>
    </div>
</div>
</header>
<!--- header -> end --->
        @yield('content')
        @yield('filter')
<!--- footer -> start --->
<footer>
    <div class="contain">
        <div class="contact">
            <p>Детали контактов</p>
            <p>Офис: <a href="tel:+380800759359">0 800 759 359</a></p>
            <p>Мобильный: <a href="tel:+380932739359">(093) 273-93-59</a></p>
            <p>Мобильный: <a href="tel:+380672759359">(067) 275-93-59</a></p>
            <p>Mail: <a href="mailto:support@e-a-s-y.in.ua">support@e-a-s-y.in.ua</a></p>
        </div>
        <div class="tags">
            <p>Теги</p>

        </div>
        <div class="subscription">
            <p>не пропустите</p>
            <p>У нас для вас есть выгодное предложение, для подробной информации: </p>
            <form action="">
                <input placeholder="Введите адрес электронной почты здесь" type="email">
                <input value=">" type="submit">
            </form>
        </div>
    </div>
</footer>
<!--- footer -> end --->

<!-- Scripts -->

<script src="/public/js/main.js"></script>
<script src="/public/js/app.js"></script>

</body>
</html>
