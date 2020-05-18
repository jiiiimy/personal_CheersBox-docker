<?php

namespace App\Providers\Host;

use App\Repositories\Host\PagesRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class PagesServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PagesRepository::class, PagesRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return array
     */
    public function provides()
    {
        return [PagesRepository::class];
    }
}
