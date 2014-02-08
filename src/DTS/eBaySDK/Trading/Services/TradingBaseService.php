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
}
