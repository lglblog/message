<?php


namespace Lanehub;

use Illuminate\Support\ServiceProvider;

/**
 * 服务
 * Class LanehubMessageServiceProvider
 * @package Lanehub
 */
class LanehubMessageServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/message.php' => base_path("config/message.php")
        ]);
    }

    /**
     * 注册服务
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../config/message.php", 'message');
        $this->app->singleton("LanehubMessage", function () {
            return new LanehubMessage();
        });
    }
}