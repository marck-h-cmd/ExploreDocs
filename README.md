<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# ExploreDocs

ExploreDocs website. A website to explore papers, thesis, exclusive books in one place
## App Configuration guide

### Basic Steps

1. **Copy file  `.env.example`**:
   ```bash
   cp .env.example .env
   ```

2. **Generate app key**:
   ```bash
   php artisan key:generate
   ```

## Installation

### Install node packages

```bash
npm i
```

### Install composer dependencies

```bash
composer install
```

## Run app

```bash
php artisan serve
```