<?php

namespace App\Providers\Page;

use App\Repositories\Page\MessageCardsRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class MessageCardsServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MessageCardsRepository::class, MessageCardsRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return array
     */
    public function provides()
    {
        return [MessageCardsRepository::class];
    }
}
