# EBAY-SDK-TRADING

[![Build Status](https://travis-ci.org/davidtsadler/ebay-sdk-trading.png?branch=develop)](https://travis-ci.org/davidtsadler/ebay-sdk-trading)

An eBay SDK for PHP. Use the eBay Trading API in your PHP projects.

More information can be found in the [wiki](https://github.com/davidtsadler/ebay-sdk-trading/wiki).

## Requirements

- PHP 5.3 or greater.
- cUrl extension enabled.
- [dts/ebay-sdk](https://github.com/davidtsadler/ebay-sdk).

## Installation

This package can be installed with [Composer](http://getcomposer.org/).

1. Add "dts/ebay-sdk-trading" as a dependency in your project's composer.json file.

   ```javascript
   {
       "require": {
           "dts/ebay-sdk-trading": "~0.0.0"
       }
   }
   ```

1. Install Composer.

   ```
   curl -sS https://getcomposer.org/installer | php
   ```

1. Install the dependencies.

   ```
   php composer.phar install
   ```

1. Require Composer's autoloader by adding the following line to your code.

   ```php
   require 'vendor/autoload.php';
   ```

## Example

### Get the official eBay time

```php
<?php

require 'vendor/autoload.php';

use \DTS\eBaySDK\Trading\Services\TradingService;
use \DTS\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType;
use \DTS\eBaySDK\Trading\Types\CustomSecurityHeaderType;
use \DTS\eBaySDK\Constants\SiteIds;
use \DTS\eBaySDK\HttpClient\HttpClient;

// Instantiate an eBay service.
$service = new TradingService(new HttpClient(), array(
    'apiVersion' => 859,
    'siteId' => SiteIds::US
));

// Create the API request object.
$request = new GeteBayOfficialTimeRequestType();
$request->RequesterCredentials = new CustomSecurityHeaderType();
$request->RequesterCredentials->eBayAuthToken = <a valid authorization token>;

// Send the request.
$response = $service->geteBayOfficialTime($request);

// Output the response from the API.
echo 'The official eBay time is: '.$response->Timestamp->format('H:i (\G\M\T) \o\n l jS Y')."\n";
```

## SDK and eBay API versions.

As eBay release new versions of their API the corresponding SDK version will be shown [here](https://github.com/davidtsadler/ebay-sdk/wiki/SDK-and-eBay-API-Versions#wiki-trading).
