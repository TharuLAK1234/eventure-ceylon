<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // @role('admin') ... @endrole - mirrors the 'role:' middleware for
        // conditionally showing UI to a signed-in user with a given role.
        Blade::if('role', function (string ...$roles) {
            $user = auth()->user();

            return $user && $user->hasRole($roles);
        });
    }
}
