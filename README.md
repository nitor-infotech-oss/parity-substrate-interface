# Project Info

## Budge Goes Here

[![Issue](https://img.shields.io/github/issues/neha0921/substrate-interface-package?style=flat-square)](https://github.com/neha0921/substrate-interface-package)


## Clone Package

```bash
git clone https://github.com/neha0921/substrate-interface-package.git
```


## After Changes

1. composer install
2. start writing code in src directory
3. test your code in tests directory
4. check hint from existing file
5. just remove from here to top all lines till Clone Package after successfully clone and editing done

## Installation

You can install the package via composer:

```bash
composer require neha0921/substrate-interface-package
```

## Usage (Just Like)

```php
$testClass = new ApiHandler("http_url");
echo $testClass->rpc->system->name();
```

## Testing

```bash
vendor/phpunit/phpunit/phpunit
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
