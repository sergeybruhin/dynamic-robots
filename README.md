# Laravel Dynamic Robots.txt Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sergeybruhin/dynamic-robots.svg?style=flat-square)](https://packagist.org/packages/sergeybruhin/dynamic-robots)
[![Total Downloads](https://img.shields.io/packagist/dt/sergeybruhin/dynamic-robots.svg?style=flat-square)](https://packagist.org/packages/sergeybruhin/dynamic-robots)
![GitHub Actions](https://github.com/sergeybruhin/dynamic-robots/actions/workflows/main.yml/badge.svg)

Very basic and simple package to show different robots.txt files for different environments. Just create new directory,
create blade files with environment names.

## Installation

You can install the package via composer:

```bash
composer require sergeybruhin/dynamic-robots
```

### Publish Config

```php
php artisan vendor:publish --provider="SergeyBruhin\DynamicRobots\Providers\DynamicRobotsServiceProvider"
```

### Set robots blade files directory
If you want to change robots.txt for production environment just add **production.blade.php** with robots.txt content to **resources/views/robots** and that's it. 
```php
return [
    /**
     * Custom robots blade files directory prefix without trailing dot
     * eg: robots
     * If empty, default robots.txt from package will be used
     */
    'directory' => 'robots',
];
```

### Testing (Not yet 💁‍♂️)

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email sundaycreative@gmail.com instead of using the issue tracker.

## Credits

- [Sergey Bruhin](https://github.com/sergeybruhin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
