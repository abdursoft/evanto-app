<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
        Inertia::share([
            'flash' => function () {
                return [
                    'success' => session('success'),
                    'error'   => session('error'),
                    'errors'  => function () {
                        return session()->get('errors')
                            ? session()->get('errors')->getBag('default')->getMessages()
                            : (object) [];
                    },
                ];
            },
        ]);
    }
}
