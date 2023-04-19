<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/admin';

    public const NURSE = '/nurse';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware(['api', 'request.logging'])
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware(['api', 'request.logging'])
                ->prefix('api/patient')
                ->namespace($this->namespace)
                ->group(base_path('routes/api-patient.php'));

            Route::middleware(['api', 'request.logging'])
                ->prefix('api/driver')
                ->namespace($this->namespace)
                ->group(base_path('routes/api-driver.php'));

            Route::middleware(['api', 'request.logging'])
                ->prefix('api/nurse')
                ->namespace($this->namespace)
                ->group(base_path('routes/api-nurse.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
