<?php namespace Phasset;

use Illuminate\Support\ServiceProvider;

class PhassetServiceProvider extends ServiceProvider {

    public function register() {
        $this->app->bind('phasset', function(){
            return new Phasset;
        });
    }

}