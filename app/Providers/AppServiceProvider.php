<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // FORCE CLEAR CACHE (biar CORS ke-refresh di Railway)
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
    }
}