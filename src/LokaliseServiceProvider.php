<?php

namespace Ryanzeng\Lokalise;

use Illuminate\Support\ServiceProvider;
use Lokalise\LokaliseApiClient;

class LokaliseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(LokaliseApiClient::class, function () {
            return new LokaliseApiClient(env('LOKALISE_API_KEY'));
        });
    }
}