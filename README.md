# Update Stubs with:
`./build/update-stubs.sh`


# Add docker and gitlab config files to speed up development

## Installation

You can install the package via composer:

```bash
composer require robmellett/devops
```

## Usage

``` php
php artisan vendor:publish  --provider="Robmellett\Devops\DevopsServiceProvider"
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email dev@robmellett.com instead of using the issue tracker.

## Credits

- [Rob Mellett](https://github.com/robmellett)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
