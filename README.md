# Laravel Responses

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

A package to provide some standardized request classes.

## Installation

This package supports Laravel 7 and 8. 

Via Composer

``` bash
$ composer require egeatech/laravel-requests
```

## Usage

When storing data into the database it's a good practise to carry around the application only the data we need,
extracted from an incoming request: the two interfaces exposed by the package aim to provide a contract to
wrap all classes whose goal is to wrap creation or update data.

It is up to the developer how to use them: we've thought of them to be used with our
[Laravel Model](https://github.com/EgeatechSRL/laravel-model) package, in order to have a higher order entity 
abstraction when manipulating database information.

## Change log

Please see the [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Egea Tecnologie Informatiche][link-author]
- [Marco Guidolin](mailto:m.guidolin@egeatech.com)

## License

The software is licensed under MIT. Please see the [LICENSE](LICENSE.md) file for more information.

[ico-version]: https://img.shields.io/packagist/v/egeatech/laravel-requests.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/egeatech/laravel-requests.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/egeatech/laravel-requests
[link-downloads]: https://packagist.org/packages/egeatech/laravel-requests
[link-travis]: https://travis-ci.org/egeatech/laravel-requests
[link-author]: https://egeatech.com
