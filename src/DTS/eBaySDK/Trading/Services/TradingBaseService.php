<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Trading\Services;

/**
 * Base class for the Trading service.
 */
class TradingBaseService extends \DTS\eBaySDK\Services\BaseService
{
    /**
     * Constants for the various HTTP headers required by the API. 
     */
    const HDR_API_VERSION = 'X-EBAY-API-COMPATIBILITY-LEVEL';
    const HDR_APP_ID = 'X-EBAY-API-APP-NAME';
    const HDR_CERT_ID = 'X-EBAY-API-CERT-NAME';
    const HDR_CONTENT_LENGTH = 'Content-Length';
    const HDR_CONTENT_TYPE = 'Content-Type';
    const HDR_DEV_ID = 'X-EBAY-API-DEV-NAME';
    const HDR_OPERATION_NAME = 'X-EBAY-API-CALL-NAME';
    const HDR_SITE_ID = 'X-EBAY-API-SITEID';

    /**
     * @param \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient The object that will handle sending requests to the API.
     * @param array $config Optional configuration option values. 
     */
    public function __construct(\DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient, $config = array())
    {
        if (!array_key_exists(get_called_class(), self::$configOptions)) {
            self::$configOptions[get_called_class()] = array(
                'apiVersion' => array('required' => true),
                'appId' => array('required' => false),
                'certId' => array('required' => false),
                'devId' => array('required' => false),
                'siteId' => array('required' => true)
            );
        }

        parent::__construct($httpClient, 'https://api.ebay.com/ws/api.dll', 'https://api.sandbox.ebay.com/ws/api.dll', $config);
    }

    /**
     * Build the needed eBay HTTP headers.
     *
     * @param string $operationName The name of the operation been called.
     *
     * @return array An associative array of eBay http headers.
     */
    protected function getEbayHeaders($operationName)
    {
        $headers = array();
  
        // Add required headers first.
        $headers[self::HDR_API_VERSION] = $this->config('apiVersion'); 
        $headers[self::HDR_OPERATION_NAME] = $operationName;
        $headers[self::HDR_SITE_ID] = $this->config('siteId');

        // Add optional headers.
        if ($this->config('appId')) {
            $headers[self::HDR_APP_ID] = $this->config('appId'); 
        }

        if ($this->config('certId')) {
            $headers[self::HDR_CERT_ID] = $this->config('certId'); 
        }

        if ($this->config('devId')) {
            $headers[self::HDR_DEV_ID] = $this->config('devId'); 
        }

        return $headers;
    } 
}
