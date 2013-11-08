##Phasset

A simple PHP Asset Library.

##Usage

###Queue up styles and scripts
```
Phasset::add('reset.css');
Phasset::add('styles.css');
Phasset::add('scripts.js');
```

###Output link and script tags
```
Phasset::css();
//<link media="all" type="text/css" rel="stylesheet" href="reset.css">
//<link media="all" type="text/css" rel="stylesheet" href="styles.css">

Phasset::js();
//<script src="scripts.js"></script>
```

##Laravel
Add service provider...

```
'Phasset\PhassetServiceProvider',
```

and facade...

```
'Phasset' => 'Phasset\Facades\Laravel\Phasset',
```

...to app/config/app.php