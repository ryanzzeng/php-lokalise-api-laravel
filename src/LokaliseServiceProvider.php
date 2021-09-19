<?php

namespace Ryanzeng\Lokalise;

use Illuminate\Support\ServiceProvider;
use Lokalise\LokaliseApiClient;

class LokaliseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(LokaliseApiClient::class, function ($app) {
            return new LokaliseApiClient($app['config']['services.lokalise.key']);
        });
    }
}