# A package to add comments into your laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/coderflex/comments.svg?style=flat-square)](https://packagist.org/packages/coderflex/comments)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/coderflex/comments/run-tests?label=tests)](https://github.com/coderflex/comments/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/coderflex/comments/Check%20&%20fix%20styling?label=code%20style)](https://github.com/coderflex/comments/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/coderflex/comments.svg?style=flat-square)](https://packagist.org/packages/coderflex/comments)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/comments.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/comments)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require coderflex/comments
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="comments-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="comments-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="comments-views"
```

## Usage

```php
$comments = new Coderflex\Comments();
echo $comments->echoPhrase('Hello, Coderflex!');
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

- [Oussama Sid](https://github.com/coderflexx)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
