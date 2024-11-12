<?php

namespace App\Providers;

use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\ServiceProvider;
use League\CommonMark\CommonMarkConverter;
use Illuminate\Foundation\AliasLoader;

class MarkdownServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
         // Bind the Markdown converter to the service container.
        $this->app->singleton(MarkdownServiceProvider::class, function ($app) {
            return new Markdown();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        AliasLoader::getInstance()->alias('Markdown', \GrahamCampbell\Markdown\Facades\Markdown::class);
    }
}
