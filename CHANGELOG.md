CHANGELOG
=========

0.8.0 (2014-09-21)
------------------

### API

* Support API version 891. ([5c22948](https://github.com/davidtsadler/ebay-sdk-trading/commit/5c2294886550915a86f682d3341bc69082692fe)) [David T. Sadler]

0.7.0 (2014-09-10)
------------------

### Fixes

* Correct unbound elements. ([b430169](https://github.com/davidtsadler/ebay-sdk-trading/commit/b4301699ad27255aa6c40d3442d6f4551971e816)) [David T. Sadler]

### API

* Support API version 889. ([bbc0bad](https://github.com/davidtsadler/ebay-sdk-trading/commit/bbc0bad26750ddaed4d6a1cdbf0e595f9839c4d9)) [David T. Sadler]

0.6.0 (2014-09-04)
------------------

### API

* Support API version 887. ([a490821](https://github.com/davidtsadler/ebay-sdk-trading/commit/a4908214a058de17d1478330d52e3d6a1fd2e9fe)) [David T. Sadler]
* Support API version 885. ([6e2bccf](https://github.com/davidtsadler/ebay-sdk-trading/commit/6e2bccf3813e9f1e9dd30234690f471213541884)) [David T. Sadler]

0.5.0 (2014-08-25)
------------------

### API

* Support API version 883. ([704d25e](https://github.com/davidtsadler/ebay-sdk-trading/commit/704d25e4f029c67b3d1fa7018e8ebbefdd97fece)) [David T. Sadler]

### Documentation

* Update requirements to recommend 64 bit systems. ([9f29bbb](https://github.com/davidtsadler/ebay-sdk-trading/commit/9f29bbb7044ad74eacb101e41969c51b051d36ff), [#6](https://github.com/davidtsadler/ebay-sdk-trading/issues/6)) [David T. Sadler]

0.4.0 (2014-08-11)
------------------

### API

* Support API version 881. ([df99aea](https://github.com/davidtsadler/ebay-sdk-trading/commit/df99aea3b1d72524b8966afe25256362e4070701)) [David T. Sadler]

0.3.1 (2014-07-28)
------------------

### Fixes

* Add missing class name to property list. ([00b46d2](https://github.com/davidtsadler/ebay-sdk-trading/commit/00b46d24d75629345330ea808ac28e2726dd4703)) [David T. Sadler]

0.3.0 (2014-07-28)
------------------

### API

* Support API version 879. ([75a7ddf](https://github.com/davidtsadler/ebay-sdk-trading/commit/75a7ddf8d36c9cdc330c9f8fbd51049ffe904d9f)) [David T. Sadler]

0.2.0 (2014-07-28)
------------------

### API

* Support API version 877. ([a80fb2b](https://github.com/davidtsadler/ebay-sdk-trading/commit/a80fb2b693b973b0de438fcc682cbf0db2646bc9)) [David T. Sadler]

0.1.1 (2014-07-05)
------------------

### Features

* Allow auth token to be passed as configuration option. ([8b5a41c](https://github.com/davidtsadler/ebay-sdk-trading/commit/8b5a41c516b8b9ad853c304c8433efb124d71836)) [David T. Sadler]

  Auth tokens can now be passed as a configuration option of the
  TradingService class.

  ```php
  use \DTS\eBaySDK\Trading\Services;

  $service = new Services\TradingService(array(
      'authToken' => 'YOUR_PRODUCTION_USER_TOKEN_APPLICATION_KEY'
  ));
  ```

  Note that the TradingServce will *inject* the auth token into
  request objects when calling the API. It will do this by setting the
  correct properties on the request object. This will mean that the
  service will modify your request objects.

  ```php
  use \DTS\eBaySDK\Trading\Services;
  use \DTS\eBaySDK\Trading\Types;

  $service = new Services\TradingService(array(
      'authToken' => 'YOUR_PRODUCTION_USER_TOKEN_APPLICATION_KEY'
  ));

  $request = new Types\GeteBayOfficialTimeRequestType();
  $assert(null, request->RequesterCredentials);

  /**
   * This will modify the request by adding the auth token.
   */
  $response = $service->geteBayOfficialTime($request);

  /**
   * The auth token will match the one set in the configuration.
   */
  assert('YOUR_PRODUCTION_USER_TOKEN_APPLICATION_KEY' === $request->RequesterCredentials->eBayAuthToken);
  ```

  You can continue to set auth tokens in the request as the request will
  take precedence over the configuration.

  ```php
  use \DTS\eBaySDK\Trading\Services;
  use \DTS\eBaySDK\Trading\Types;

  $service = new Services\TradingService(array(
      'authToken' => 'YOUR_PRODUCTION_USER_TOKEN_APPLICATION_KEY'
  ));

  $request = new Types\GeteBayOfficialTimeRequestType();
  $request->RequesterCredentials = new Types\CustomSecurityHeaderType();
  $request->RequesterCredentials->eBayAuthToken = 'TOKEN_IN_REQUEST';

  /**
   * This will **NOT** modify the request as the auth token in the request
   * takes precendence.
   */
  $response = $service->geteBayOfficialTime($request);

  assert('TOKEN_IN_REQUEST' === $request->RequesterCredentials->eBayAuthToken);
  ```

### Refactoring

* Pass request object to callOperation method. ([b98127c](https://github.com/davidtsadler/ebay-sdk-trading/commit/b98127c6f7ae715b9f72e248ce6739580513ddfd)) [David T. Sadler]
* Change service class to call toRequestXml method. ([33eb292](https://github.com/davidtsadler/ebay-sdk-trading/commit/33eb29265044555d4a153f5443ef83051e5e852f)) [David T. Sadler]

### Documentation

* Correct stated minimum PHP version. ([51766c1](https://github.com/davidtsadler/ebay-sdk-trading/commit/51766c1f7d262c5cfbade4d19c979f27a6fe6a15), [#4](https://github.com/davidtsadler/ebay-sdk-trading/issues/4)) [David T. Sadler]

### Tests

* Update travis settings. ([57d53e0](https://github.com/davidtsadler/ebay-sdk-trading/commit/57d53e06e2f12a035783fd359099b5f550aac005)) [David T. Sadler]
* Add phpunit configuration file. ([b36fbab](https://github.com/davidtsadler/ebay-sdk-trading/commit/b36fbab4a416fc6c761db516c0ffee91dfc1a4d9)) [David T. Sadler]
