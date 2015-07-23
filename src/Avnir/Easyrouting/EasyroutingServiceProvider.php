<?php

namespace Avnir\Easyrouting;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class EasyroutingServiceProvider extends ServiceProvider {

    public function register() {
        $this->app->singleton('easyrouting', function ($app) {
            return \Avnir\Easyrouting\EasyRouting::run();
        });
    }
    
    public function boot()
    {
        # For some reason cannot get the alias to work
        $loader = AliasLoader::getInstance();
        $loader->alias('Easyrouting', 'Avnir\Easyrouting\Easyrouting::class');
    }

}
