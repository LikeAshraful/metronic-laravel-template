<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Console\KeysCommand;
use Laravel\Passport\Console\ClientCommand;
use Laravel\Passport\Console\InstallCommand;

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
//        Schema::defaultStringLength(191);

        date_default_timezone_set('America/Phoenix');

        Passport::tokensExpireIn(now()->addDays(15));
        Passport::refreshTokensExpireIn(now()->addDays(30));
        Passport::personalAccessTokensExpireIn(now()->addMonths(6));

        $this->commands([
            InstallCommand::class,
            ClientCommand::class,
            KeysCommand::class,
        ]);
        // View::composer('partials.header', function ($view) {
        //     $adminNotifications = AdminNotification::with('transportRequest')->orderBy('id', 'DESC')->take(5)->get();
        //     $view->with('adminNotifications', $adminNotifications);
        // });

        Paginator::useBootstrap();
    }
}
