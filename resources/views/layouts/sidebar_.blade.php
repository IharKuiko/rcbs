<div class="sidebar p-2 md:w-1/4">
    <div class="banners">
        <ul>
            @foreach($banners as $banner)
                <li><a href="{{ $banner->link }}"><img class="w-4/5 shadow-2xl mx-auto mb-4 md:hover:scale-105 transition-all duration-800" src="{{ $banner->getImage() }}" alt="banner"></a></li>
            @endforeach
        </ul>
    </div>

    <!---------------------------------------------------------------------->
    <div class="widget">
        @if($posters->count())
        <h3 class="text-4xl font-semibold text-textcol text-center mb-2">Афиши</h3>
        <ul>
            @foreach($posters as $poster)
                <li class=" flex-col items-center p-2.5 shadow-2xl mx-auto w-4/5  mb-4 md:hover:scale-105 transition-all duration-800">
                    <a href="{{ route('posts.single', ['slug' => $poster->slug]) }}" class="widget-link text-textcol hover:text-[#ffb900]">
                        <div class="sidebar-card">
                            <img src="{{ $poster->getImage() }}" alt="" class="w-2/3 mx-auto">
                            <h5 class="text-center text-xl font-semibold">{{ $poster->title }}</h5>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="widget">
        @if($popular_posts->count())
            <h3 class="text-4xl font-semibold text-center text-textcol mb-2">Популярные статьи</h3>
            <ul>
                @foreach($popular_posts as $post)
                    <li class=" flex-col items-center p-2.5 shadow-2xl mx-auto w-4/5  mb-4 md:hover:scale-105 transition-all duration-800">
                        <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" class="widget-link text-textcol hover:text-[#ffb900]">
                            <div class="sidebar-card">
                                <img src="{{ $post->getImage() }}" alt="" class="w-2/3 mx-auto">
                                <h5 class="text-center text-xl font-semibold">{{ $post->title }}</h5>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    @if($cats->count())
    <div class="widget p-2.5 shadow-2xl mx-auto w-4/5  mb-4 md:hover:scale-105 transition-all duration-800">
        <h3 class="text-4xl font-semibold text-textcol text-center mb-2">Категории</h3>
        <div class="link-widget">
            <ul>
                @foreach($cats as $cat)
                    @if ($cat->slug === 'uslugi')

                    @else
                        <li><a class="font-semibold hover:text-[#ffb900]" href="{{ route('categories.single', ['slug' => $cat->slug]) }}">{{ $cat->title }}<span>     ({{ $cat->posts_count }})</span></a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    @if($tags->count())
    <div class="widget  p-2.5 shadow-2xl mx-auto w-4/5  mb-4 md:hover:scale-105 transition-all duration-800">
        <h3 class="text-4xl font-semibold text-textcol text-center mb-2">Теги</h3>
        <div class="link-widget">
            <ul>
                @foreach($tags as $tag)

                    <li><a class="font-semibold hover:text-[#ffb900]" href="{{ route('tags.single', ['slug' => $tag->slug]) }}">{{ $tag->title }}<span>     ({{ $tag->posts_count }})</span></a></li>

                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <!---------------------------------------------------------------------->

</div>
