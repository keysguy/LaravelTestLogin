<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\ErrorHandler\Debug;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->singleton("");
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->resolving(function ($object, $app) {
            // 当容器解析任何类型的对象时调用...
            //Log::debug("My Service Container resolve");
        });

        /*DB::listen(function ($query) {
            // $query->sql
            // $query->bindings
            // $query->time
            Log::debug("My Db Query:{$query}");
        });*/
    }
}
