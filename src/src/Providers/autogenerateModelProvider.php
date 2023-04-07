<?php

namespace Silah\AutogenerateModel\Providers;

use Illuminate\Support\ServiceProvider;
use Silah\AutogenerateModel\AutoGenerateModel;

class autogenerateModelProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            AutoGenerateModel::class,
        ]);
    }
}
