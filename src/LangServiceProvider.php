<?php

namespace LangPT;

use Illuminate\Support\ServiceProvider;

class LangServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'langpt');

        $this->publishes([
            __DIR__ . '/../lang' => resource_path('lang/vendor/langpt'),
        ]);
    }

    public function register()
    {
        //
    }
}
