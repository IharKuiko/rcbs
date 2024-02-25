@extends('layouts.base')

@section('title', $post->title)

@section('content')
    <div class="article md:w-3/4 p-4">
        <img class="article-img w-2/3 mx-auto mb-4" src="{{ $post->getImage() }}" alt="main image">

        <h2 class="text-center text-4xl text-textcol font-semibold">{{ $post->title }}</h2>

        <div class="mx-auto my-6 flex justify-center"><a class="text-textcol text-2xl hover:text-[#ffb900] hover:font-semibold" href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">Категория :: {{ $post->category->title }}</a></div>

        <div class="article-content"> {!! $post->content !!}</div>
        <div class="flex justify-center">
            <div>
                @if($post->tags->count())
                    <div class="text-center text-2xl text-textcol mb-2">Тэги:</div>
                    @foreach($post->tags as $tag)
                        <a class="text-textcol p-1.5 rounded-xl border-2 border-teal-600 hover:border-[#ffb900] hover:text-[#ffb900] hover:font-semibold" href="{{ route('tags.single', ['slug' => $tag->slug]) }}">{{ $tag->title }}</a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
