# Overrider of Artisan make:whatever stubs
[![Latest Version](https://img.shields.io/github/release/Kyslik/artisan-stubs.svg?style=flat-square)](https://github.com/Kyslik/artisan-stubs/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/Kyslik/artisan-stubs.svg?style=flat-square)](https://packagist.org/packages/Kyslik/artisan-stubs)

Override default artisan make stubs


# Setup

## Composer

Pull this package in through Composer (development/latest version `dev-master`).

```
composer require kyslik/artisan-stubs
```

or


Add to `Composer.json` following

```
{
    "require": {
        "kyslik/artisan-stubs": "~1.0.0"
    }
}
```

    $ composer update


Add the package to your application service providers in `config/app.php`

```
'providers' => [

    App\Providers\RouteServiceProvider::class,

    /*
     * Third Party Service Providers...
     */
    Kyslik\ArtisanStubs\ArtisanStubsServiceProvider::class,
],
```
## Publish stubs


    $ php artisan vendor:publish --provider="Kyslik\ArtisanStubs\ArtisanStubsServiceProvider" --tag="stubs"

Tip
> add `.gitignore` to your `/resources` folder
> 
>```
>$ echo "/stubs" >  ./resources/.gitignore
>```

# Usage

Simply edit `resources/stubs/*.stub` you like.


### Idea from
 [Q&A](http://stackoverflow.com/q/21810251/1564365)
