<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (config('app.env') === 'production') {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }

        // Catat semua query yang lambat ke Log
        \Illuminate\Support\Facades\DB::listen(function ($query) {
            if ($query->time > 1000) { // Jika lebih dari 1 detik
                \Illuminate\Support\Facades\Log::warning("Slow Query detected: " . $query->sql, [
                    'time' => $query->time,
                    'bindings' => $query->bindings
                ]);
            }
        });
    }
}