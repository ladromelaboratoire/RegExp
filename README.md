# RegExp
Collection d'expressions régulières utiles, disponibles sous la forme d'un module PHP composer.

Regex collection provied as a Composer module. This is provided for various countries when applicable : France, Europe, US.  
This is not (yet) a full list however.

## Regex types
- Company IDs
    - French IDs
    - EORI
    - LEI
- Date & time
- E-mail
- Hashes
- IBAN
- Personal IDs
    - French NIR
- Phone numbers
- Street number
- URL & IP
- VAT number
- Zip codes

## Sample regexp
````
//EU VAT number - updates in php file
^(DE\d{9}|ATU\d{8}|BE0\d{9}|BG\d{9,10}|CY[0-9A-Z]{9}|HR\d{11}|DK\d{8}|ES[0-9A-Z]{1}\d{7}[0-9A-Z]{1}|EE\d{9}|FI\d{8}|FR[0-9A-Z]{2}\d{9}|EL\d{9}|HU\d{8}|IE\d{7}[A-Z]{1,2}|IT\d{11}|LV\d{11}|LT\d{9,12}|LU\d{8}|MT\d{8}|NL[\dB]{11}|PL\d{10}$
````

## Usage
### With Composer
Add the module as a dependency in your projet `composer.json` and start a `composer update` through CLI.  
Just call the regexp as follow
````php
require '../vendor/autoload.php';
use ladromelaboratoire\regexp\regexp;
$result = preg_match('/'.regexp::EMAIL_INTL.'/', 'my-string-to-test');
````

### Without composer
````php
require 'path/to/regexp.php';
$result = preg_match('/'.regexp::EMAIL_INTL.'/', 'my-string-to-test');
````

## Dependency
- PHP >= 7.3
- Composer

## Contribution
Please have a looh to [contribution guide](./contributing.md)