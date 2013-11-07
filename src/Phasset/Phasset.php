<?php namespace Phasset;

class Phasset {
	private $cssFiles = array();	
	private $jsFiles = array();

	public function add($source) {
		if(pathinfo($source, PATHINFO_EXTENSION) == 'css') {
			array_push($this->cssFiles, $source);
		} else if(pathinfo($source, PATHINFO_EXTENSION) == 'js') {
			array_push($this->jsFiles, $source);
		}
	}

	public function css() {
		foreach($this->cssFiles as $cssFile) {
			echo <<<HTML
<link media="all" type="text/css" rel="stylesheet" href="$cssFile">
HTML;
		}
	}

	public function js() {
		foreach($this->jsFiles as $jsFile) {
			echo <<<HTML
<script src="$jsFile"></script>
HTML;
		}
	}
}