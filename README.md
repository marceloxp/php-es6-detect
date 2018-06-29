# php-es6-detect
> Class PHP to Browser ES6 compatibility detect

## Installation

### Composer
```bash
composer require marceloxp/php-es6-detect
```

OR

### Add directly to your `composer.json`
```json
"require": {
    "marceloxp/php-es6-detect": "^1.0.0"
},
```

## Usage

### Option 1
```php
use \marceloxp\PhpEs6Detect;
PhpEs6Detect::setScriptFolder('scripts');
<script type="text/javascript" src="<?php echo JSFOLDER; ?>/main.js"></script>
```

### Option 2
```php
use \marceloxp\PhpEs6Detect;
PhpEs6Detect::setScriptFolder('scripts', 'MYJSFOLDER');
<script type="text/javascript" src="<?php echo MYJSFOLDER; ?>/main.js"></script>
``` 

### Result Script
```php
// Case ES6 suport:
<script type="text/javascript" src="es6/main.js"></script>
// Old browsers:
<script type="text/javascript" src="scripts/main.js"></script>