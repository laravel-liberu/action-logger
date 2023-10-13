<?php

namespace LaravelLiberu\ActionLogger;

use Illuminate\Support\ServiceProvider;
use LaravelLiberu\ActionLogger\DynamicRelations\ActionLogs;
use LaravelLiberu\ActionLogger\Http\Middleware\ActionLogger;
use LaravelLiberu\DynamicMethods\Services\Methods;
use LaravelLiberu\Users\Models\User;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['router']->aliasMiddleware('action-logger', ActionLogger::class);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        Methods::bind(User::class, [ActionLogs::class]);
    }
}
