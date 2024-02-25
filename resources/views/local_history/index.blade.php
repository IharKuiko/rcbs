@extends('layouts.base')

@section('title', 'Краеведение')

@section('content')


    <div class="cards md:w-3/4 p-4">

        <img class="w-2/3 mx-auto mb-4" src="/images/local_history.png" alt="краеведение">

        <h2 class="text-center text-4xl text-textcol font-semibold">КРАЕВЕДЕНИЕ</h2>
        <br>
        <p>
            В последнее время заметно повысился интерес к краеведению, понимание его большого воспитательного значения. И для работников культуры сегодня одной из наиболее важных задач является возрождение, сохранение и развитие культурного наследия нашего народа. Воспитание краеведением подразумевает не только обучение знаниям и распространение знаний о прошлом и настоящем своего края, его особенностях и достопримечательностях, но и привитие потребности в действенной заботе о будущем своего края и о сохранении его культурного и природного наследия. Подлинное краеведение – это всегда краелюбие.
            Краеведческая работа всегда была и будет актуальной, ибо она включает в себя разные направления: патриотическое, экологическое, литературоведческое, историческое и т.д. Поэтому, краеведческая тема в деятельности библиотек становится одной из ведущих. Краеведческая работа библиотек основывается в первую очередь на краеведческой литературе, а также на непосредственном исследовании местной природы и общественной жизни, ознакомлении с конкретными условиями хозяйственной и культурной жизни родного края.
        </p>
        <br>
        <hr>
        <br>
        <h3 class="text-center text-2xl text-textcol font-semibold">Список разделов:</h3>
        <ul>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="/city">Город древний, легендарный</a></li>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="/literary_rechitsa">Речица литературная</a></li>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="/painters">Художники земли Речицкой</a></li>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="/glorify">Они прославили Речицу</a></li>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="/heroes_ussr">Герои Советского Союза – земляки</a></li>
            <li class="text-2xl ml-4 hover:text-[#ffb900] hover:font-semibold"><a href="/heroes_international">Герои – интернационалисты</a></li>
        </ul>

        <h3 class="text-center text-2xl text-textcol font-semibold mb-4">Материалы:</h3>

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
