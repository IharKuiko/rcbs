@extends('layouts.base')

@section('title', 'Главная')

@section('slider')
    <section class="hidden md:block">
        @include('layouts.carousel')
    </section>
@endsection

@section('links')
    <section class="links w-full bg-gradient-to-br from-gradient1 to-gradient2">
        <div class="max-w-screen-xl mx-auto p-4 md:flex">
            <a href="http://86.57.133.109:8080/alis/StartEK/index.php" class="w-1/3 group">
                <div class="text-center text-white">
                            <span class="text-white md:group-hover:text-[#ffb900] transition-all duration-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mx-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Zm3.75 11.625a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                </svg>
                            </span>
                    <p class="md:text-xl md:group-hover:text-[#ffb900] transition-all duration-800">Электронный каталог</p>
                </div>
            </a>

            <a href="/events" class="w-1/3 group">
                <div class="text-center text-white">
                            <span class="text-white md:group-hover:text-[#ffb900] transition-all duration-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mx-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                                </svg>
                            </span>
                    <p class="md:text-xl md:group-hover:text-[#ffb900] transition-all duration-800">Анонсы мероприятий</p>
                </div>
            </a>


            <a href="/blogs" class="w-1/3 group">
                <div class="text-center text-white">
                            <span class="text-white md:group-hover:text-[#ffb900] transition-all duration-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mx-auto">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>
                            </span>
                    <p class="md:text-xl md:group-hover:text-[#ffb900] transition-all duration-800">Библиотеки в социальных медиа</p>
                </div>
            </a>
        </div>
    </section>
@endsection
{{--    <div id="main" class="wrapper-links">--}}
{{--        <div class="links-container">--}}
{{--            <ul class="links">--}}
{{--                <li class="links-item"><a href="http://86.57.133.109:8080/alis/StartEK/index.php" target="_blank"><img--}}
{{--                            src="icon/Links/ЭК 2.png" alt="">--}}
{{--                        <div>Электронный каталог</div>--}}
{{--                    </a></li>--}}
{{--                <li class="links-item"><a href="{{ route('categories.single', ['slug' => 'afishi']) }}"><img src="icon/Links/Анонс..png" alt="">--}}
{{--                        <div>Анонсы мероприятий</div>--}}
{{--                    </a></li>--}}
{{--                <li class="links-item"><a href="/socialMedia"><img src="icon/Links/В соц. сети.png" alt="">--}}
{{--                        <div>Библиотеки в социальных медиа</div>--}}
{{--                    </a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="wrapper-links">--}}
{{--        <ul class="links">--}}
{{--            <li class="links-item"><a href="http://86.57.133.109:8080/alis/StartEK/index.php" target="_blank"><img--}}
{{--                        src="/icon/Links/ЭК 2.png" alt="">--}}
{{--                    <div>Электорнный каталог</div>--}}
{{--                </a></li>--}}
{{--            <li class="links-item"><a href="{{ route('categories.single', ['slug' => 'afishi']) }}"><img src="/icon/Links/Анонс..png" alt="">--}}
{{--                    <div>Анонсы мероприятий</div>--}}
{{--                </a></li>--}}
{{--            <li class="links-item"><a href=""><img src="/icon/Links/В соц. сети.png" alt="">--}}
{{--                    <div>Библиотеки в социальных медиа</div>--}}
{{--                </a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}



@section('content')


    <div class="cards md:w-3/4 p-4">

        <ul class="flex flex-wrap justify-between">
            @foreach($posts as $post)
                <li class="w-4/5  md:w-[30%] mr-2 mb-6 rounded-lg shadow-2xl hover:scale-110 transition-all duration-800">

                        <div>
                            <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" class=" text-textcol hover:text-[#ffb900]">
                                <img class="rounded-lg" src="{{ $post->getImage() }}" alt="main post image">
                                <h3 class="text-xl font-semibold uppercase m-2">{{ $post->title }}</h3>
                            </a>
                            <div class="relative text-gray-500 p-2">
{{--                                <a href="{{ route('posts.single', ['slug' => $post->slug]) }}">--}}
{{--                                    --}}
{{--                                </a>--}}
                                <p class="text-sm">{!! $post->description !!}</p>
                                <a class="font-semibold text-textcol hover:text-[#ffb900]" href="{{ route('categories.single', ['slug' => $post->category->slug]) }}" class="">{{ $post->category->title }}</a>
                            </div>
                        </div>

                </li>
            @endforeach
        </ul>

        <div class="pagination">
            {{ $posts->onEachSide(1)->links() }}
        </div>

    </div>

@endsection

@section('banners')
{{--    @include('layouts.banners')--}}
@endsection
