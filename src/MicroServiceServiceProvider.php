<?php
/**
 * @file
 * Contains \biliboobrian\MicroServiceCore\MicroServiceServiceProvider;
 */

namespace biliboobrian\MicroServiceCore;

use Illuminate\Support\ServiceProvider;

/**
 * Service provider for core Micro Service functionality.
 *
 * @package biliboobrian\MicroServiceCore
 */
class MicroServiceServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Add our package routes.
        require_once __DIR__ . '/Http/routes.php';

        // Let Laravel Ioc Container know about our Controller
        $this->app->make('biliboobrian\MicroServiceCore\Http\Controllers\MicroServiceController');
    }
}