<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <link rel="stylesheet" href="public/styles.css">--}}


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Magra:wght@400;700&family=Red+Hat+Text:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/icon/logo.ico" type="image/x-icon">


    <title>Речицкая центральная библиотека :: @yield('title')</title>
</head>
<body class="bg-[#f0f0f0]">

<div class="mx-auto h-screen grid grid-rows-layout font-sans text-gray-500">
    @include('layouts.header')

    <main>
{{--        <section class="carousel w-full h-96"></section>--}}
        @yield('slider')
        @yield('links')
        @yield('page-title')

        <section class="main-content max-w-screen-2xl mx-auto md:flex">
            @yield('content')

            @include('layouts.sidebar_')
        </section>

        @include('layouts.links')
    </main>

    @include('layouts.footer')
</div>

</body>
</html>
