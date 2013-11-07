##Phasset

A simple asset Library for PHP.

##Usage

###Queue up styles and scripts
```
Phasset::add('styles.css');
Phasset::add('scripts.js');
```

###Output CSS and JS
```
Phasset::css();
//<link media="all" type="text/css" rel="stylesheet" href="styles.css">

Phasset::js();
//<script src="scripts.js"></script>
```