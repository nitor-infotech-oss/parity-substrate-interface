# Project Info

## Budge Goes Here

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vendor_name/package_name.svg?style=flat-square)](https://packagist.org/packages/vendor_name/package_name)

[![GitHub Tests Status](https://img.shields.io/github/workflow/status/vendor_name/package_name/Tests?label=Tests)](https://github.com/vendor_name/package_name/actions?query=workflow%3ATests+branch%3Amaster)

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
