# Route Usage for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/julienbourdeau/route-usage.svg?style=flat-square)](https://packagist.org/packages/julienbourdeau/route-usage)
[![Build Status](https://img.shields.io/travis/julienbourdeau/route-usage/master.svg?style=flat-square)](https://travis-ci.org/julienbourdeau/route-usage)
[![Quality Score](https://img.shields.io/scrutinizer/g/julienbourdeau/route-usage.svg?style=flat-square)](https://scrutinizer-ci.com/g/julienbourdeau/route-usage)
[![Total Downloads](https://img.shields.io/packagist/dt/julienbourdeau/route-usage.svg?style=flat-square)](https://packagist.org/packages/julienbourdeau/route-usage)

This package keeps track of all requests to know what controller method, and when it was called. The goal is not to build some sort of analytics but to find out if there are unused endpoints or controller method.

After a few years, any projects have dead code and unused endpoint. Typically, you removed a link on your frontend, nothing ever links to that old `/special-page`. You want to remove it, but you're not sure.
Have look at the `route_usage` table and figure out when this page was accessed for the last time. Last week? Better keep it for now. 3 years ago? REMOVE THE CODE! 🥳

<img src="https://user-images.githubusercontent.com/1525636/66874526-afd61600-efab-11e9-9c45-3f948b31e472.png">

## Important

* The page showing route usage is **currently publicly available**. (see TODO)
* I only logs request with a 2xx HTTP response. I don't think the rest makes sense. Your opinion is welcome!

## Installation

You can install the package via composer:

```bash
composer require julienbourdeau/route-usage
```

## Usage

Head over to `yourapp.tld/route-usage`. Please note that currently this page is publicly accessible.

## TODO

- [ ] Add console display of the route usage
- [ ] Disable HTML page by default
- [ ] Add option to put page behind middleware (like `dev` in Laravel Spark)
- [ ] Add support for Redis to log `count` and `updated_at`
- [x] Find a better name? 😁

## About

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

### Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email julien@sigerr.org instead of using the issue tracker.

### Credits

- [Julien Bourdeau](https://github.com/julienbourdeau)
- [All Contributors](../../contributors)

### Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
