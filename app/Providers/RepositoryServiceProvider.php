<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Contracts\DomicilioRepositoryInterface;
use App\Repository\DomicilioRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DomicilioRepositoryInterface::class,DomicilioRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
