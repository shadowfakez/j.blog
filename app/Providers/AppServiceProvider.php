<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();



        view()->composer('layouts.sidebar', function($view) {

            if (Cache::has('sidebar_categories')) {
                $sidebar_categories = Cache::get('sidebar_categories');
            } else {
                $sidebar_categories = Category::withCount('posts')->orderBy
                ('posts_count', 'desc')->get();
                Cache::put('sidebar_categories', $sidebar_categories, 30);
            }

            $view->with('popular_posts', Post::orderBy('views', 'desc')->limit(6)->get());
            $view->with('sidebar_categories', $sidebar_categories);
        });



    }
}
