<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\SeriesRepository;
use App\Repositories\EloquentSeriesRepository;

class SeriesRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SeriesRepository::class, EloquentSeriesRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
