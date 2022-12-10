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
            'App\Http\Interfaces\Web\Admin\AdminInterface',
            'App\Http\Repositories\Web\Admin\AdminRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Web\Admin\ChefInterface',
            'App\Http\Repositories\Web\Admin\ChefRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Web\Admin\MealInterface',
            'App\Http\Repositories\Web\Admin\MealRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Web\Admin\CategoryInterface',
            'App\Http\Repositories\Web\Admin\CategoryRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Web\Admin\MenuInterface',
            'App\Http\Repositories\Web\Admin\MenuRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Web\Admin\AuthInterface',
            'App\Http\Repositories\Web\Admin\AuthRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Web\Admin\ContactInterface',
            'App\Http\Repositories\Web\Admin\ContactRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Web\EndUser\EndUserInterface',
            'App\Http\Repositories\Web\EndUser\EndUserRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Web\EndUser\EndUserAuthInterface',
            'App\Http\Repositories\Web\EndUser\EndUserAuthRepository'
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
