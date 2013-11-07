<?php namespace Phasset\Facades\Laravel;

use Illuminate\Support\Facades\Facade;

class Phasset extends Facade {

	protected static function getFacadeAccessor() {
		return 'phasset';
	}

}