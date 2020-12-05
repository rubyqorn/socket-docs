<?php 

namespace App\Providers;

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\DirController;
use App\Http\Repositories\Interfaces\DirRepositoryInterface;
use App\Repositories\Interfaces\ClassesRepositoryInterface;
use App\Repositories\Interfaces\ConfigurationRepositoryIterface;
use App\Repositories\Interfaces\MethodRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            DirRepositoryInterface::class,
            DirController::class
        );

        $this->app->bind(
            MethodRepositoryInterface::class,
            MethodsController::class
        );

        $this->app->bind(
            ClassesRepositoryInterface::class,
            ClassesController::class
        );

        $this->app->bind(
            ConfigurationRepositoryIterface::class,
            ConfigurationController::class
        );
    }
}
