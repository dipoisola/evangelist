# Developer Evangelist

[![Build Status](https://travis-ci.org/andela-oisola/open-source-evangelist.svg)](https://travis-ci.org/andela-oisola/open-source-evangelist)

This is a package that tells your developer status based on the number of repositories you have on your Github account. 

Having at least 5 repositories and at most 10 repositories makes you a Junior Evangelist. 

With at least 11 repositories and at most 20 repositories, the status of Associate Evangelist is achieved.

More than 20 Github repositories makes you a Most Senior Evangelist 

## Install

Via Composer

To add open-source-evangelist as a dependency, run the following in your project directory.

``` bash
$ composer require league/evangelist
```

Then to install, run

``` bash
$ composer install
```

## Usage

``` php
$evangelist = new EvangelistStatus();
echo $evangelist->getStatus();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

To test, type the following into the terminal from the project directory

``` bash
$ phpunit
```
or 

``` bash
$ composer test
```


## Security

If you discover any security related issues, please email dipoisola@gmail.com instead of using the issue tracker.

## Credit

- Oladipupo Isola

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/league/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/thephpleague/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/thephpleague/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/thephpleague/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/league/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/league/:package_name
[link-travis]: https://travis-ci.org/thephpleague/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/thephpleague/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/thephpleague/:package_name
[link-downloads]: https://packagist.org/packages/league/:package_name
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
