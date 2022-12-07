# aponica/macheps-php

Prevent rounding errors by comparing values within range of 
[machine epsilon](https://en.wikipedia.org/wiki/Machine_epsilon).

An equivalent JS package, @aponica/macheps-js, is available,
and should be kept synchronized with this version for consistency.

<a name="installation"></a>
## Installation

```sh
composer install aponica/macheps-php
```

<a name="usage"></a>
## Usage

```php
use Aponica\MachEps\cMachEps;
echo cMachEps::fbEQ( 1.234567890, 1.234567891 ) ? 'close enough' : 'different';
echo cMachEps::fbLT( 1.234567890, 1.234567891 ) ? 'less than' : 'not LT';
echo cMachEps::fbGT( 1.234567890, 1.234567891 ) ? 'greater than' : 'not GT';
```

## Please Donate!

Help keep a roof over our heads and food on our plates! 
If you find aponica® open source software useful, please 
**[click here](https://www.paypal.com/biz/fund?id=BEHTAS8WARM68)** 
to make a one-time or recurring donation via *PayPal*, credit 
or debit card. Thank you kindly!


## Contributing

Please [contact us](https://aponica.com/contact/) if you believe this package
is missing important functionality that you'd like to provide.

Under the covers, the code is **heavily commented** and uses a form of
[Hungarian notation](https://en.wikipedia.org/wiki/Hungarian_notation) 
for data type guidance. If you submit a pull request, please try to maintain
the (admittedly unusual) coding style, which is the product of many decades
of programming experience.

## Copyright

Copyright 2019-2022 Opplaud LLC and other contributors.

## License

MIT License.

## Trademarks

OPPLAUD and aponica are registered trademarks of Opplaud LLC.

## Related Links

Official links for this project:

* [Home Page & Online Documentation](https://aponica.com/docs/macheps-php/)
* [GitHub Repository](https://github.com/aponica/macheps-php)
* [Packagist](https://packagist.org/packages/aponica/macheps-php)
  
Related projects:

* [JS Version (@aponica/macheps-js)](https://aponica.com/docs/macheps-js/)
