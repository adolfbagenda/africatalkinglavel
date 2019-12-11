<?php
namespace adolfbagenda\AfricasTalking;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class AfricasTalkingServiceProvider extends ServiceProvider
{

    protected $defer = false;

    public function boot()
    {
         //Configurations Setup
         $this->publishes([
                 __DIR__.'/config/config.php' => config_path('AfricasTalkingGateway.php'),
         ]);

        // use the vendor configuration file as fallback
         $this->mergeConfigFrom(
             __DIR__.'/config/config.php', 'AfricasTalkingGateway'
         );
    }

    public function register()
    {
        $this->registerAfricasTalkingGateway();

        // use this if your package has a config file
         config([
                 'config/AfricasTalkingGateway.php',
         ]);
    }
    private function registerAfricasTalkingGateway()
    {
        $this->app->bind('AfricasTalkingGateway',function($app){
            return new AfricasTalkingGateway($app);
        });
    }
}
