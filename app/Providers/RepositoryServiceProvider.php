<?php


namespace App\Providers;

use App\Repositories\RepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
       $this->app->singleton(
               UserRepositoryInterface::class,
               UserRepository::class
           );
    }
}