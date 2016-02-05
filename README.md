# csv-bundle

[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads](https://poser.pugx.org/egyg33k/csv-bundle/downloads)](https://packagist.org/packages/egyg33k/csv-bundle)
[![Latest Stable Version](https://poser.pugx.org/egyg33k/csv-bundle/v/stable)](https://packagist.org/packages/egyg33k/csv-bundle)


This bundle is integration for League/Csv in Symfony

## System Requirements

You need **PHP >= 5.5.0** and the mbstring extension to use Csv but the latest stable version of PHP/HHVM is recommended.

## Install

Via Composer

``` bash
$ composer require egyg33k/csv-bundle

```

## Usage

``` php
// Add this line to your AppKernel.php new Egyg33k\CsvBundle\Egyg33kCsvBundle(),
// Then you can use it as following
# Reader
$reader = $this->container->get('egyg33k.csv.reader');
$csv = $reader::createFromPath('/home/egyg33k/Desktop/org.csv');
var_dump($csv->fetchOne());
#Writer
$writer = $this->container->get('egyg33k.csv.writer');
$csv = $writer::createFromFileObject(new \SplTempFileObject());
$csv->insertOne(['firstname', 'lastname', 'email']);
$csv->output('users.csv');
```

## Documentation
http://csv.thephpleague.com/

## Testing

``` bash
$ phpunit
```

## Security

If you discover any security related issues, please email me@amrsamy.com instead of using the issue tracker.

## Credits

- Amr Samy <me@amrsamy.com>

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-travis]: https://travis-ci.org/EGYG33K/CsvBundle.svg?branch=master
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[link-travis]: https://travis-ci.org/EGYG33K/CsvBundle
[link-author]: https://github.com/EGYG33K
