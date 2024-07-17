# Auth

Lightweight authentication support for [Phico](https://github.com/phico-php/phico)

## Installation

Using composer

```sh
composer require phico/auth
```

## Usage

Use the AuthMiddleware in any actions as needed

```php
// /app/Home/Actions/DashBoardAction.php

'use' => [
    new \Phico\Auth\AuthMiddleware::class
]

```

## Issues

If you discover any bugs or issues in it's behaviour or performance please create an issue, and if you are able a pull request with a fix.

Please make sure to update tests as appropriate.

For major changes, please open an issue first to discuss what you would like to change.

## License

[BSD-3-Clause](https://choosealicense.com/licenses/bsd-3-clause/)
