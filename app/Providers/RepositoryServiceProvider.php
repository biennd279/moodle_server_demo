<?php


namespace App\Providers;

use App\Repositories\ContentRepository;
use App\Repositories\ContentRepositoryInterface;
use App\Repositories\CourseRepository;
use App\Repositories\CourseRepositoryInterface;
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

       $this->app->singleton(
           CourseRepositoryInterface::class,
           CourseRepository::class,
       );

       $this->app->singleton(
           ContentRepositoryInterface::class,
           ContentRepository::class
       );
    }
}