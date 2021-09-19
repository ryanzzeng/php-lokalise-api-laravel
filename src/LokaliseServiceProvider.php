<?php

namespace Ryanzzeng\Lokalise;

use Illuminate\Support\ServiceProvider;

class LokaliseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(LokaliseApiClient::class, function ($app) {
            return new LokaliseApiClient($app['config']['services.lokalise.key']);
        });
    }
}