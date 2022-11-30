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

        // AdminController
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminInterface',
            'App\Http\Repositories\Admin\AdminRepository'
        );

        // ChefController
        $this->app->bind(
            'App\Http\Interfaces\Admin\ChefInterface',
            'App\Http\Repositories\Admin\ChefRepository'
        );

        // MealController
        $this->app->bind(
            'App\Http\Interfaces\Admin\MealInterface',
            'App\Http\Repositories\Admin\MealRepository'
        );

        // CategoryController
        $this->app->bind(
            'App\Http\Interfaces\Admin\CategoryInterface',
            'App\Http\Repositories\Admin\CategoryRepository'
        );

        // MenuController
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
