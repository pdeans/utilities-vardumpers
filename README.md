# The PdeanS VarDumper Utilities Package

A collection of helpful var dumper methods and functions.

## Installation

Install via [Composer](https://getcomposer.org/).

```shell
composer require pdeans/utilities-vardumpers
```

## Usage

### dp()

Print variable or value with optional label.

```php
use pdeans\Utilities\VarDumper;

VarDumper::dp($value);

// Add label to output
VarDumper::dp($value, 'Label');

// Optionally use global helper function
dp($value)
dp($value, 'value');
```

### dpx()

Print string with all applicable characters converted to HTML entities. Useful for printing XML and/or HTML values.

```php
use pdeans\Utilities\VarDumper;

VarDumper::dpx($value);

// Add label to output
VarDumper::dpx($value, 'Label');

// Optionally use global helper function
dpx($value)
dpx($value, 'value');
```

### vd()

Pretty var dumper with optional label.

```php
use pdeans\Utilities\VarDumper;

VarDumper::vd($value);

// Add label to output
VarDumper::vd($value, 'Label');

// Optionally use global helper function
vd($value)
vd($value, 'value');
```
