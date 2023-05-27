<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\companyRepositoryInterface;
use App\Repositories\Interfaces\employeeRepositoryInterface;
use App\Repositories\companyRepository;
use App\Repositories\employeeRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(companyRepositoryInterface::class,companyRepository::class);
        $this->app->bind(employeeRepositoryInterface::class,employeeRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
