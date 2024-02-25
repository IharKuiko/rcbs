@extends('layouts.base')

@section('title', 'Мероприятия')

@section('content')


    <div class="cards md:w-3/4 p-4">

        <h2 class="text-center text-4xl text-textcol font-semibold">МЕРОПРИЯТИЯ</h2>
        <br>

        <br>
        <hr>
        <br>
        <h3 class="text-center text-2xl text-textcol font-semibold">Список мероприятий:</h3>
        <ul>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="">Город древний, легендарный</a></li>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="">Речица литературная</a></li>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="">Художники земли Речицкой</a></li>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="">Они прославили Речицу</a></li>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="">Герои Советского Союза – земляки</a></li>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="">Герои – интернационалисты</a></li>
        </ul>

        <h3 class="text-center text-2xl text-textcol font-semibold mb-4">Статьи:</h3>

        <ul class="flex flex-wrap justify-between">
            @foreach($posts as $post)
                <li class="w-4/5  md:w-[30%] mr-2 mb-6 rounded-lg shadow-2xl hover:scale-110 transition-all duration-800">

                    <div>
                        <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" class=" text-textcol hover:text-[#ffb900]">
                            <img class="rounded-lg" src="{{ $post->getImage() }}" alt="main post image">
                            <h3 class="text-xl font-semibold uppercase m-2">{{ $post->title }}</h3>
                        </a>
                        <div class="text-gray-500 p-2">
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
