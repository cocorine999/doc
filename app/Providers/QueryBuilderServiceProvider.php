<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;

class QueryBuilderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Builder::macro('isUnique', function ($column, $value) {
            return !$this->where($column, $value)
                ->when($this->model->exists, function ($query) {
                    $query->where('id', '!=', $this->model->id);
                })
                ->exists();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
