# Teamwork Desk PHP SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chiribuc/teamwork-desk.svg)](https://packagist.org/packages/chiribuc/teamwork-desk)
[![Tests](https://github.com/chiribuc/teamwork-desk/actions/workflows/run-tests.yml/badge.svg)](https://github.com/chiribuc/teamwork-desk/actions?query=workflow%3Arun-tests)
[![Total Downloads](https://img.shields.io/packagist/dt/chiribuc/teamwork-desk.svg)](https://packagist.org/packages/chiribuc/teamwork-desk)
[![License](https://img.shields.io/packagist/l/chiribuc/teamwork-desk.svg)](https://github.com/chiribuc/teamwork-desk/blob/main/LICENSE.md)

-----

[![Stand With Ukraine](https://user-images.githubusercontent.com/46414598/191076542-6fe6dc3a-8d98-463b-86d6-78dbb1e3dbc8.svg)](https://supportukrainenow.org/)

-----

**Teamwork Desk PHP SDK** is a PHP API client that allows you to interact with the [Teamwork Desk API](https://apidocs.teamwork.com).  

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
