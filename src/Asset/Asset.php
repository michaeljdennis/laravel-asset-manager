<?php namespace Asset;

class Asset {
	private static $cssFiles = array();	
	private static $jsFiles = array();

	public static function add($source) {
		if(pathinfo($source, PATHINFO_EXTENSION) == 'css') {
			array_push(self::$cssFiles, $source);
		} else if(pathinfo($source, PATHINFO_EXTENSION) == 'js') {
			array_push(self::$jsFiles, $source);
		}
	}

	public static function css() {
		foreach(self::$cssFiles as $cssFile) {
			echo <<<HTML
<link media="all" type="text/css" rel="stylesheet" href="$cssFile">
HTML;
		}
	}

	public static function js() {
		foreach(self::$jsFiles as $jsFile) {
			echo <<<HTML
<script src="$jsFile"></script>
HTML;
		}
	}
}