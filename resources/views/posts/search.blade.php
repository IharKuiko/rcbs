@extends('layouts.base')

@section('title', 'Поиск')



{{--@section('page-title')--}}
{{--    <div class="panel">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">--}}
{{--                    <h2>Search:: {{ $s }}</h2>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">--}}
{{--                    <ol class="breadcrumb">--}}
{{--                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>--}}
{{--                        <li class="breadcrumb-item"><a href="#">Blog</a></li>--}}
{{--                        <li class="breadcrumb-item active">Поиск ::{{ $s }}</li>--}}
{{--                    </ol>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

@section('content')

    <div class="cards md:w-3/4 p-4">


        @if($posts->count())

            <h2>Search:: {{ $s }}</h2>

            <hr>

            <h3 class="text-center text-2xl text-textcol font-semibold mb-4">Материалы:</h3>

            <hr>

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
            {{ $posts->appends(['s' => request()->s])->links() }}
        </div>
        @else
            <h2 class="text-center text-4xl mt-4">Извините, по вашему запросу: <span class="text-textcol font-semibold border-b-4 border-textcol">{{ $s }}</span> - ничего не было найдено.</h2>
        @endif

    </div>


{{--<div class="wrapper-content">--}}
{{--    <div class="content-card">--}}
{{--        <div class="cards">--}}
{{--            @foreach($posts as $post)--}}

{{--                <div class="cards__item">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card__image"><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" target="_blank"><img src="{{ $post->getImage() }}" alt=""></a></div>--}}
{{--                        <div class="card__content">--}}
{{--                            <div class="card__title"><a href="{{ route('posts.single', ['slug' => $post->slug]) }}" target="_blank">{{ $post->title }}</a></div>--}}
{{--                            <p class="card__text">{!! $post->description !!} </p>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <hr class="invis">--}}
{{--    <div class="pagination">--}}
{{--        {{ $posts->links() }}--}}

{{--    </div>--}}
{{--    <hr class="invis">--}}
{{--</div>--}}

{{--    <hr class="invis">--}}

{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <nav aria-label="Page navigation">--}}
{{--                {{ $posts->appends(['s' => request()->s])->links() }}--}}

{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

