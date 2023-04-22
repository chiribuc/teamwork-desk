# Teamwork Desk PHP SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chiribuc/teamwork-desk.svg)](https://packagist.org/packages/chiribuc/teamwork-desk)
[![Tests](https://github.com/chiribuc/teamwork-desk/actions/workflows/run-tests.yml/badge.svg)](https://github.com/chiribuc/teamwork-desk/actions?query=workflow%3Arun-tests)
[![Total Downloads](https://img.shields.io/packagist/dt/chiribuc/teamwork-desk.svg)](https://packagist.org/packages/chiribuc/teamwork-desk)
[![License](https://img.shields.io/packagist/l/chiribuc/teamwork-desk.svg)](https://github.com/chiribuc/teamwork-desk/blob/main/LICENSE.md)

-----

![teamwork-desk](https://user-images.githubusercontent.com/46414598/233759405-2624fdf2-59a1-49ba-a577-e3e55ab780b6.svg)

-----

**Teamwork Desk PHP SDK** is a client that allows you to interact with the [Teamwork Desk API](https://apidocs.teamwork.com).  

> This project is a work-in-progress. Code and documentation are currently under development and are subject to change.


## Installation

You can install the package via composer:

```bash
composer require chiribuc/teamwork-desk
```

## Usage

```php
use Chiribuc\Teamwork\Desk;

$teamwork = Desk::client('api_token', 'domain');

// TODO

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please feel free to fork and open pull requests.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Robert-Cristian Chiribuc](https://github.com/chiribuc)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
