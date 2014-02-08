<?php
namespace DTS\eBaySDK\Trading\Services;

class TradingBaseService extends \DTS\eBaySDK\Services\BaseService
{
    const HDR_API_VERSION = 'X-EBAY-API-COMPATIBILITY-LEVEL';
    const HDR_APP_ID = 'X-EBAY-API-APP-NAME';
    const HDR_CERT_ID = 'X-EBAY-API-CERT-NAME';
    const HDR_CONTENT_LENGTH = 'Content-Length';
    const HDR_CONTENT_TYPE = 'Content-Type';
    const HDR_DEV_ID = 'X-EBAY-API-DEV-NAME';
    const HDR_OPERATION_NAME = 'X-EBAY-API-CALL-NAME';
    const HDR_SITE_ID = 'X-EBAY-API-SITEID';

    public function __construct(\DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient, $config = array())
    {
        if (!array_key_exists(get_called_class(), self::$configProperties)) {
            self::$configProperties[get_called_class()] = array(
                'apiVersion' => array('required' => true),
                'appId' => array('required' => false),
                'certId' => array('required' => false),
                'devId' => array('required' => false),
                'siteId' => array('required' => true)
            );
        }

        parent::__construct($httpClient, 'https://api.ebay.com/ws/api.dll', 'https://api.sandbox.ebay.com/ws/api.dll', $config);
    }

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
