<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Observers\CategoryObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Category::observe(CategoryObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Interfaces\Category\CategoryServiceInterface',
            'App\Services\Category\CategoryService'
        );

        $this->app->bind(
            'App\Interfaces\Category\CategoryRepositoryInterface',
            'App\Repositories\Category\CategoryRepository'
        );

        $this->app->bind(
            'App\Interfaces\Movie\MovieInterface',
            'App\Services\Movie\MovieService'
        );

        $this->app->bind(
            'App\Interfaces\Movie\MovieServiceInterface',
            'App\Services\Movie\MovieService'
        );

        $this->app->bind(
            'App\Interfaces\Movie\MovieServiceInterface',
            'App\Repositories\Movie\MovieRepositoryInterface'
        );
    }
}
