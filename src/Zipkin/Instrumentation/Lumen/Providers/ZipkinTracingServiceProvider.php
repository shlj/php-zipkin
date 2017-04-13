<?php
namespace Drefined\Zipkin\Instrumentation\Lumen\Providers;

use Drefined\Zipkin\Instrumentation\Lumen\Services\ZipkinTracingService;
use Illuminate\Support\ServiceProvider;

class ZipkinTracingServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            ZipkinTracingService::class,
            function ($app) {
                return new ZipkinTracingService();
            }
        );
    }
}
