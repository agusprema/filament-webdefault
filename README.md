# This is my package filament-webdefault

[![Latest Version on Packagist](https://img.shields.io/packagist/v/agusprema/filament-webdefault.svg?style=flat-square)](https://packagist.org/packages/agusprema/filament-webdefault)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/agusprema/filament-webdefault/run-tests?label=tests)](https://github.com/agusprema/filament-webdefault/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/agusprema/filament-webdefault/Check%20&%20fix%20styling?label=code%20style)](https://github.com/agusprema/filament-webdefault/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/agusprema/filament-webdefault.svg?style=flat-square)](https://packagist.org/packages/agusprema/filament-webdefault)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require agusprema/filament-webdefault
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-webdefault-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-webdefault-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-webdefault-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-webdefault = new webdefault\FilamentWebdefault();
echo $filament-webdefault->echoPhrase('Hello, webdefault!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [agusprema](https://github.com/agusprema)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
