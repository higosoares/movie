<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Movie;
use App\Observers\CategoryObserver;
use App\Observers\MovieObserver;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'App\Interfaces\Category\CategoryServiceInterface',
            'App\Services\Category\CategoryService'
        );

        $this->app->singleton(
            'App\Interfaces\Category\CategoryRepositoryInterface',
            'App\Repositories\Category\CategoryRepository'
        );

        $this->app->singleton(
            'App\Interfaces\Movie\MovieServiceInterface',
            'App\Services\Movie\MovieService'
        );

        $this->app->singleton(
            'App\Interfaces\Movie\MovieRepositoryInterface',
            'App\Repositories\Movie\MovieRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.movie', 'movie');

        Category::observe(CategoryObserver::class);
        Movie::observe(MovieObserver::class);
    }
}
