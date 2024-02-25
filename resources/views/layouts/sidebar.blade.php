<div class="content-sidebar">

    <div class="sidebar-banners">
        <img src="../image/banner/flag.jpg" alt="">
        <img src="../image/banner/2023 god mira i sozidaniya.jpg" alt="">
        <a href="https://rechitsa.by/vibor_2024.html" target="_blank"><img src="../image/banner/vibory.jpg" alt=""></a>
    </div>

    <div class="widget">
        <h2 class="widget-title">Популярные статьи</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach($popular_posts as $post)
                    <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" class="widget-link"
                       class="list-group-item list-group-item-action flex-column align-items-start"
                    >
                        <div class="sidebar-card">
                            <img src="{{ $post->getImage() }}" alt="" class="sidebar-card-img">
                            <h5 class="sidebar-card-title">{{ $post->title }}</h5>
                            <small>{{ $post->getPostDate() }}</small>
                            <small>|| <i class="fa fa-eye"></i>i> {{ $post->views }} </small>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="widget">
        <h2 class="widget-title">Афиши</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach($posters as $poster)
                    <a href="{{ route('posts.single', ['slug' => $poster->slug]) }}" class="widget-link"
{{--                       class="list-group-item list-group-item-action flex-column align-items-start"--}}
                    >
                        <div class="sidebar-card">
                            <img src="{{ $poster->getImage() }}" alt="" class="sidebar-card-img">
                            <h5 class="sidebar-card-title">{{ $poster->title }}</h5>
{{--                            <small>{{ $poster->getPostDate() }}</small>--}}
{{--                            <small>|| <i class="fa fa-eye"></i>i> {{ $poster->views }} </small>--}}
                        </div>
                    </a>
                @endforeach
            </div>
        </div><!-- end blog-list -->
    </div><!-- end widget -->


    <div class="widget">
        <h2 class="widget-title">Категории</h2>
        <div class="link-widget">
            <ul>
                @foreach($cats as $cat)
                    @if ($cat->slug === 'uslugi')

                    @else
                        <li><a href="{{ route('categories.single', ['slug' => $cat->slug]) }}">{{ $cat->title }}<span>({{ $cat->posts_count }})</span></a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <div class="widget">
        <h2 class="widget-title">Tags</h2>
        <div class="link-widget">
            <ul>
                @foreach($tags as $tag)
                    @if ($tag->slug === 'uslugi')

                    @else
                        <li><a href="{{ route('tags.single', ['slug' => $tag->slug]) }}">{{ $tag->title }}<span>count</span></a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>


</div>



