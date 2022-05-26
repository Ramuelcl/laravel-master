<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider.
 */
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
        // De forma predeterminada, Blade (y el asistente de Laravel ) codificarán dos veces las entidades HTML. Si desea deshabilitar la codificación doble, llame al Blade::withoutDoubleEncoding método desde el boot método de su AppServiceProvider:
        Blade::withoutDoubleEncoding();
    }
}
