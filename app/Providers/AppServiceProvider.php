<?php

namespace App\Providers;

use App\Domain\Contracts\BookRepositoryInterface;
use App\Domain\Services\LibraryService;
use App\Infrastructure\Repositories\BookRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(BookRepositoryInterface::class, BookRepository::class);
        $this->app->bind(LibraryService::class, function ($app) {
            return new LibraryService($app->make(BookRepositoryInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
