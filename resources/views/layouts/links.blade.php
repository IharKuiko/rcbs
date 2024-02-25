<section class="usefull-links ">

    <h2 class="p-2 w-full bg-gradient-to-br from-gradient1 to-gradient2 text-white text-center text-3xl">
        Полезные ссылки
    </h2>
    <div class="max-w-screen-2xl flex flex-wrap justify-between mx-auto p-4 gap-4">
        @foreach($links as $link)
            <a class="shadow-2xl md:hover:scale-105 transition-all duration-800" href="{{ $link->link }}" target="_blank"><img class="shadow-2xl" src="{{ $link->getImage() }}" alt="{{ $link->alt }}"></a>
        @endforeach
    </div>
</section>

<div class="banners-wrapper">

    <div class="banners">


        <div class="swiper-wrapper">





        </div>

    </div>


</div>
