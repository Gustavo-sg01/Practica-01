<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Corregir el error de la migracion debido a la version de Mysql
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Corregir el error de la migracion debido a la version de Mysql

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
