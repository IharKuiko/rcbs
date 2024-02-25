<header>
    <div class="max-w-screen-xl mx-auto md:flex md:items-center">

        <div class="w-4/5 md:w-2/3 p-10 font-semibold flex items-center mx-auto text-center space-x-6">
            <img src="/icon/logo.png" class="w-16 md:w-24" alt="logo">
            <h1 class="sm:text-xl md:text-2xl lg:text-3xl text-textcol">
                Государственное учреждение культуры<br/> "Речицкая районная сеть библиотек"
            </h1>
        </div>

{{--        <button class="absolute top-4 right-4 inline-block md:hidden">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />--}}
{{--            </svg>--}}
{{--        </button>--}}

        <div class="hamburger w-8 absolute top-6 right-6 inline-block md:hidden transition-all duration-800">
            <span class="block w-full h-1 bg-teal-900 mb-1  transition-all duration-800"></span>
            <span class="block w-full h-1 bg-teal-900 mb-1 transition-all duration-800"></span>
            <span class="block w-full h-1 bg-teal-900 transition-all duration-800"></span>
        </div>


        <div class="mb-10 md:w-1/3 pt-8">
            <div class="registration w-max mx-auto flex space-x-6 font-bold text-xl mb-2">
                @if (Route::has('login'))

                        @auth
{{--                            <div>{{ Auth::user()->name }}</div>--}}

                            <a href="{{ url('/dashboard') }}" class="hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800">{{ Auth::user()->name }}</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800">{{ __('LogOut') }}</button>
                            </form>
                        @else
                            <div><a href="{{ route('login') }}" class="hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800">Вход</a></div>
{{--                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>--}}

                            @if (Route::has('register'))
                                <div><a href="{{ route('register') }}" class="hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800">Регистрация</a></div>
{{--                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
                            @endif
                        @endauth

                @endif
{{--                <!-- @auth()--}}
{{--                    <a href="#">Выйти</a>--}}
{{--@endauth--}}
{{--                @guest -->--}}
{{--                <div><a href="#" class="hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800">Вход</a></div>--}}

{{--                <div><a href="#" class="hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800">Регистрация</a></div>--}}
{{--                <!-- @endguest -->--}}
            </div>

            <form class="mx-auto w-3/4" method="get" action="{{ route('search') }}">
                <input class="block w-full border-2 rounded-lg border-teal-600 p-2 mb-2"
                       name="s"
                       type="text"
                       placeholder="       ПОИСК ПО САЙТУ"
                >
                <button class="block mx-auto text-2xl text-white border-2 rounded-lg border-teal-700 bg-teal-600 hover:bg-teal-900 hover:text-[#ffb900] transition-all duration-800 p-2" type="submit">Искать</button>
            </form>
        </div>



    </div>
    <div class=" w-full bg-gradient-to-br from-gradient1 to-gradient2">
        <nav class="max-w-screen-xl mx-auto h-full">
            <ul class="main-menu fixed top-0 left-[100%] w-3/4 h-full flex-col justify-center bg-black md:bg-transparent opacity-75 md:opacity-100 md:static md:flex md:flex-row md:justify-between md:items-center md:w-full md:h-full md:justify-items-center md:py-2.5">
                <li class="menu-item w-full text-center"><a href="/" class="text-white text-xl hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800 @if(Request::is('/')) border-[#ffb900] @endif">Главная</a></li>
                <li class="menu-item w-full text-center"><a href="/about" class="text-white text-xl hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800 @if(Request::is('about')) border-[#ffb900] @endif">О нас</a></li>
                <li class="menu-item w-full text-center"><a href="/res" class="text-white text-xl hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800 @if(Request::is('res')) border-[#ffb900] @endif">Ресурсы</a></li>
                <li class="menu-item w-full text-center"><a href="/local_history" class="text-white text-xl hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800 @if(Request::is('local_history')) border-[#ffb900] @endif">Краеведение</a></li>
                <li class="menu-item w-full text-center"><a href="/readers" class="text-white text-xl hover:text-[#ffb900] border-b-2 border-transparent hover:border-[#ffb900] transition-all duration-800 @if(Request::is('readers')) border-[#ffb900] @endif">Читателям</a></li>
            </ul>
        </nav>
    </div>
</header>
