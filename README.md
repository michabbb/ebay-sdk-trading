# EBAY-SDK-TRADING

[![Build Status](https://travis-ci.org/davidtsadler/ebay-sdk-trading.png?branch=master)](https://travis-ci.org/davidtsadler/ebay-sdk-trading)

An eBay SDK for PHP. Use the eBay Trading API in your PHP projects.

## Requirements

- PHP 5.3 or greater.
- cUrl extension enabled.
- [dts/ebay-sdk](https://github.com/davidtsadler/ebay-sdk).

## Installation

This package can be install with [Composer](http://getcomposer.org/).

1. Add "dts/ebay-sdk" as a dependency in your project's composer.json file.

   ```javascript
   {
       "require": {
           "dts/ebay-sdk": "~0.0.0"
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

### Get the offical eBay time

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
$request->requesterCredentials = new CustomSecurityHeaderType();
$request->requesterCredentials->eBayAuthToken = <a valid authorization token>;

// Send the request.
$response = $service->geteBayOfficialTime($request);

// Output the response from the API.
echo 'The offical eBay time is: '.$response->timestamp->format('H:i (\G\M\T) \o\n l jS Y')."\n";
```
