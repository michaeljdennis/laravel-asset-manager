##Phasset

A simple asset Library for PHP.

##Usage

###Queue up styles and scripts
```
Asset::add('styles.css');
Asset::add('scripts.js');
```

###Output CSS and JS
```
Asset::css();
//<link media="all" type="text/css" rel="stylesheet" href="styles.css">

Asset::js();
//<script src="scripts.js"></script>
```