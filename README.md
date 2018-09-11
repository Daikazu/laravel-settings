# Laravel Settings WIP Under Development

[![Build Status](https://travis-ci.org/daikazu/laravel-settings.svg?branch=master)](https://travis-ci.org/daikazu/laravel-settings)
[![styleci](https://styleci.io/repos/147879135/shield)](https://styleci.io/repos/147879135)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/daikazu/laravel-settings/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/daikazu/laravel-settings/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/daikazu/laravel-settings/badge.svg?branch=master)](https://coveralls.io/github/daikazu/laravel-settings?branch=master)

[![Packagist](https://img.shields.io/packagist/v/daikazu/laravel-settings.svg)](https://packagist.org/packages/daikazu/laravel-settings)
[![Packagist](https://poser.pugx.org/daikazu/laravel-settings/d/total.svg)](https://packagist.org/packages/daikazu/laravel-settings)
[![Packagist](https://img.shields.io/packagist/l/daikazu/laravel-settings.svg)](https://packagist.org/packages/daikazu/laravel-settings)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require daikazu/laravel-settings
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Daikazu\LaravelSettings\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Daikazu\LaravelSettings\Facades\LaravelSettings::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Daikazu\LaravelSettings\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/daikazu/laravel-settings)
- [All contributors](https://github.com/daikazu/laravel-settings/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
