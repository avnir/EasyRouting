<?php namespace Avnir\Easyrouting;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class EasyroutingServiceProvider extends ServiceProvider {

	public function register() {}
    public function boot()
    {
        $this->package('avnir/easyrouting');
        AliasLoader::getInstance()->alias('EasyRouting', 'Avnir\Easyrouting\EasyRouting');
    }

}
