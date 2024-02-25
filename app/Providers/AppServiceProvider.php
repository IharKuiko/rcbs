<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Link;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layouts.sidebar_', function($view) {
            $view->with('banners', Link::where('category_id', 1)->get());
            $view->with('popular_posts', Post::orderBy('views', 'desc')->limit(3)->get());
            $view->with('cats', Category::withCount('posts')->orderBy('posts_count', 'desc')->get());
            $view->with('posters', Post::where('category_id', 8)->limit(3)->get());
            $view->with('tags', Tag::withCount('posts')->orderBy('posts_count', 'desc')->get());
        });

        view()->composer('layouts.footer', function ($view) {
            $view->with('banners', Link::where('category_id', 5)->get());
        });

        view()->composer('layouts.links', function ($view) {
            $view->with('links', Link::where('category_id', 2)->get());
        });
    }
}
