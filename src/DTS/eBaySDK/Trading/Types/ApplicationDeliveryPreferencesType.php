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

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $alertEmail
 * @property DTS\eBaySDK\Trading\Types\EnableCodeType(string) $alertEnable
 * @property DTS\eBaySDK\Trading\Types\EnableCodeType(string) $applicationEnable
 * @property string $applicationUrl
 * @property DTS\eBaySDK\Trading\Types\DeliveryURLDetailType $deliveryUrldEtails
 * @property DTS\eBaySDK\Trading\Types\DeviceTypeCodeType(string) $deviceType
 * @property DTS\eBaySDK\Trading\Types\NotificationPayloadTypeCodeType(string) $notificationPayloadType
 * @property string $payloadVersion
 */
class ApplicationDeliveryPreferencesType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'alertEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AlertEmail'
        ),
        'alertEnable' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AlertEnable'
        ),
        'applicationEnable' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplicationEnable'
        ),
        'applicationUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApplicationURL'
        ),
        'deliveryUrldEtails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DeliveryURLDetailType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DeliveryURLDetails'
        ),
        'deviceType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeviceType'
        ),
        'notificationPayloadType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotificationPayloadType'
        ),
        'payloadVersion' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayloadVersion'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
