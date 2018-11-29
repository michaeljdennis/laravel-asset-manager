# Phasset

A simple PHP asset library.

## Usage

### Installation with Composer

```
composer require michaeljdennis/phasset
```

### Queue up styles and scripts

```
use Phasset\Phasset;

$phasset = new Phasset();
$phasset->add('reset.css');
$phasset->add('styles.css');
$phasset->add('scripts.js');
```

### Output link and script tags in a view file

```
$phasset->css();
// <link media="all" type="text/css" rel="stylesheet" href="reset.css">
// <link media="all" type="text/css" rel="stylesheet" href="styles.css">

$phasset->js();
// <script src="scripts.js"></script>
```

## Laravel

### Configuration for Laravel < 5.5

Add service provider to the `providers` array in `/config/app.php`.

```
Phasset\PhassetServiceProvider::class,
```

Add facade to the `facades` array in `/config/app.php`.

```
'Phasset' => Phasset\Facades\Laravel\Phasset::class,
```

### Usage

Use facade to access methods.

```
Phasset::add('reset.css');
Phasset::add('styles.css');
Phasset::add('scripts.js');

Phasset::css();
Phasset::js();
```

## To Do

- [x] PSR-4 autoloading.
