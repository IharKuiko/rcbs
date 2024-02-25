<div class="hamburger">
    <span class="line"></span>
    <span class="line"></span>
    <span class="line"></span>
</div>

<div class="header-wrapper">
    <header class="header">

        <div class="logo">
            <div class="logo-ico">
                <img src="../icon/logo.png" alt="logo">
            </div>
            <div class="logo-text"><h1>Государственное учреждение культуры<br/> "Речицкая районная сеть библиотек"</h1>
            </div>
        </div>
        <div class="block">
            <div class="registration">
                @auth()
                <a href="{{ route('logout') }}">Выйти</a>
                @endauth
                @guest
                <div><a href="{{ route('login') }}">Вход</a></div>
                <div></div>
                <div><a href="{{ route('register.create') }}">Регистрация</a></div>
                @endguest
            </div>
            <form class="form-inline fl" method="get" action="{{ route('search') }}">
                <input class="input-search" name="s" class="form-control mr-sm-2 @error('s') is-invalid @enderror" type="text"
                       placeholder="ПОИСК ПО САЙТУ" required>
                <button class="btn-search btn-outline-success my-2 my-sm-0" type="submit">Искать</button>
            </form>
        </div>
    </header>
</div>

<nav>
    <div class="menu">
        <ul class="main-menu">

            <li class="menu-item @if(Request::is('/')) menu-active @endif"><a href="/">Главная</a></li>

            <li class="menu-item @if(Request::is('about')) menu-active @endif"><a href="/about">О нас</a></li>

            <li class="menu-item @if(Request::is('resourses')) menu-active @endif"><a href="/resourses">Ресурсы</a></li>


            <li class="menu-item @if(Request::is('localHystory')) menu-active @endif"><a
                    href="/localHystory">Краеведение</a></li>

            <li class="menu-item @if(Request::is('readers')) menu-active @endif"><a href="/readers">Читателям</a></li>

{{--            <li class="menu-item @if(Request::is('/')) menu-active @endif"><a href="/siteMap">Карта сайта</a></li>--}}

        </ul>


    </div>

    <style>
        .fl{
            display: flex;
        }
        .form-inline .form-control.is-invalid {
            border: 2px solid red;
        }
    </style>
</nav>
