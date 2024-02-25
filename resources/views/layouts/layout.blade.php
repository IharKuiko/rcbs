<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="public/css/normalize.css">


{{--    <link href="/assets/front/css/font-awesome.min.css" rel="stylesheet">--}}
{{--    <link rel="apple-touch-icon" href="/assets/front/images/apple-touch-icon.png">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">--}}

    <link href="../../assets/front/css/bootstrap.css" rel="stylesheet">
    <link href="public/assets/front/css/bootstrap.css" rel="stylesheet">

{{--    <!-- FontAwesome Icons core CSS -->--}}
{{--    <link href="/assets/front/css/font-awesome.min.css" rel="stylesheet">--}}

{{--    <!-- Custom styles for this template -->--}}
{{--    <link href="/assets/front/style.css" rel="stylesheet">--}}

{{--    <!-- Animate styles for this template -->--}}
{{--    <link href="/assets/front/css/animate.css" rel="stylesheet">--}}

{{--    <!-- Responsive styles for this template -->--}}
{{--    <link href="/assets/front/css/responsive.css" rel="stylesheet">--}}

{{--    <!-- Colors for this template -->--}}
{{--    <link href="/assets/front/css/colors.css" rel="stylesheet">--}}

{{--    <!-- Version Marketing CSS for this template -->--}}
{{--    <link href="/assets/front/css/version/marketing.css" rel="stylesheet">--}}
    <link rel="shortcut icon" href="icon/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Magra:wght@400;700&family=Red+Hat+Text:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

{{--    <link rel="stylesheet" href="/css/styleOld.css">--}}
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="../../css/links.css">
    <link rel="stylesheet" href="public/css/links.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="public/css/footer.css">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />


<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(37987130, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/37987130" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <title>@yield('title')</title>
</head>

<body>

<div class="wrapper-header">
    @include('layouts.navbar')
</div>

<div class="main-wrapper">

    <main class="main">

        @yield('slider')
        <div class="main-content-wrapper">
            @yield('content')

            @include('layouts.sidebar')
        </div>


    </main>

        @yield('banners')



</div>


<div class="footer-wrapper">
    <footer class="footer">
        <div class="footer-head">
            <p>Государственное учреждение культуры "Речицкая районная сеть библиотек"</p>
        </div>
        <div class="footer-content">
            <div class="footer-links">
                <ul>
                    <li><a href="#">О библиотеке</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Информационные ресурсы</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Читателям</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="footer-address">
                <ul>
                    <li><address>г.Речица</address></li>
                    <li><address>ул. К.Маркса 9</address></li>
                    <li>Абонемент: <a href="tel:+375234054322">5-43-22</a></li>
                    <li>Читальный зал: <a href="tel:+375234054068">5-40-68</a></li>
                    <li>Эл. почта: <a href="mailto:rcbs@rechitsa.by">rcbs@rechitsa.by</a></li>
                </ul>
            </div>
            <div class="footer-work-time">
                <ul>
                    <li>Режим работы: с 10-00 до 19-00</li>
                    <li>Ксерокопия: с 8-30 до 19-00</li>
                    <li>Выходной: суббота</li>
                </ul>

            </div>
        </div>
        <div class="footer-banners">
            <a href="https://president.gov.by/ru"><img src="../image/footer-banners/1.jpg" alt="banner"></a>
            <a href="https://www.belarus.by/ru/"><img src="../image/footer-banners/2.jpg" alt="banner"></a>
            <a href="https://kultura.by/"><img src="../image/footer-banners/3.jpg" alt="banner"></a>
            <a href="https://www.gomel-region.by/ru"><img src="../image/footer-banners/4.jpg" alt="banner"></a>
            <a href="https://rechitsa.by/"><img src="../image/footer-banners/5.jpg" alt="banner"></a>
            <a href="https://www.nlb.by/"><img src="../image/footer-banners/6.jpg" alt="banner"></a>
            <a href="https://pravo.by/"><img src="../image/footer-banners/7.jpg" alt="banner"></a>
            <a href="https://mir.pravo.by/"><img src="../image/footer-banners/8.jpg" alt="banner"></a>
        </div>
        <div class="footer-creator"><a href="#">K.I.Tech</a></div>
    </footer>
</div>


{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>--}}
{{--<script src="/app.js"></script>--}}
<script src="../../js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    new Swiper('.swiper', {
        // Optional parameters
        // direction: 'vertical',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 20,

        autoplay: {
            delay: 3000,
        },

        effect: 'coverflow',
        coverflowEffect: {
          rotate: 20,
          stretch: 50,
          slideShadows: true,
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
    });

    new Swiper('.banners', {
        // Optional parameters
        // direction: 'vertical',
        loop: true,
        slidesPerView: 5,
        spaceBetween: 20,

        autoplay: {
            delay: 3000,
        },

        // effect: 'coverflow',
        // coverflowEffect: {
        //     rotate: 20,
        //     stretch: 50,
        //     slideShadows: true,
        // },

        // If we need pagination
        // pagination: {
        //     el: '.swiper-pagination',
        //     clickable: true,
        //     dynamicBullets: true,
        // },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper_banners-button-next',
            prevEl: '.swiper_banners-button-prev',
            clickable: true,
        },

        // And if we need scrollbar
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
    });
</script>
</body>

