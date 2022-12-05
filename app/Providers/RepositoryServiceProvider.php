<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminInterface',
            'App\Http\Repositories\Admin\AdminRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\ChefInterface',
            'App\Http\Repositories\Admin\ChefRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\MealInterface',
            'App\Http\Repositories\Admin\MealRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\CategoryInterface',
            'App\Http\Repositories\Admin\CategoryRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\MenuInterface',
            'App\Http\Repositories\Admin\MenuRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AuthInterface',
            'App\Http\Repositories\Admin\AuthRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\ContactInterface',
            'App\Http\Repositories\Admin\ContactRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\EndUserInterface',
            'App\Http\Repositories\EndUser\EndUserRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\EndUserAuthInterface',
            'App\Http\Repositories\EndUser\EndUserAuthRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
