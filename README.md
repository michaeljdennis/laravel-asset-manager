## Phasset

A simple PHP Asset Library.

## Usage

### Add dependency to composer.json file
```
"require": {
	"michaeljdennis/phasset": "1.0.*"
}
```

### Queue up styles and scripts
```
Phasset::add('reset.css');
Phasset::add('styles.css');
Phasset::add('scripts.js');
```

### Output link and script tags in a view file
```
<?php Phasset::css(); ?>
//<link media="all" type="text/css" rel="stylesheet" href="reset.css">
//<link media="all" type="text/css" rel="stylesheet" href="styles.css">

<?php Phasset::js(); ?>
//<script src="scripts.js"></script>
```

## Laravel
Add service provider to the `providers` array in `/config/app.php`.

```
Phasset\PhassetServiceProvider::class,
```

Add facade to the `facades` array in `/config/app.php`.

```
'Phasset' => Phasset\Facades\Laravel\Phasset::class,
```

## ToDo
- [ ] PSR-4 autoloading.
