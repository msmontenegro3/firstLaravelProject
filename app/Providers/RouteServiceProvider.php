<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Este es el namespace aplicado a los controladores de rutas.
     */
    protected $namespace = null;

    /**
     * Define las rutas de tu aplicación.
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Registra las rutas para la aplicación.
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Configura las rutas de la API.
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api') // Prefijo "api/"
            ->middleware('api') // Middleware predeterminado de API
            ->group(base_path('routes/api.php')); // Cargar rutas desde api.php
    }

    /**
     * Configura las rutas web.
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web') // Middleware predeterminado de web
            ->group(base_path('routes/web.php')); // Cargar rutas desde web.php
    }
}
