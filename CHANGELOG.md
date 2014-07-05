CHANGELOG
=========

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
