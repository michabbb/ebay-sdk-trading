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
 * @property boolean $codsErvice
 * @property string $costGroupFlat
 * @property DTS\eBaySDK\Trading\Types\AnnouncementMessageType $deprecationDetails
 * @property string $description
 * @property string $detailVersion
 * @property boolean $dimensionsRequired
 * @property boolean $expeditedService
 * @property boolean $internationalService
 * @property integer $mappedToShippingServiceId
 * @property DTS\eBaySDK\Trading\Enums\ShippingTypeCodeType(string) $serviceType
 * @property DTS\eBaySDK\Trading\Enums\ShippingCarrierCodeType(string) $shippingCarrier
 * @property string $shippingCategory
 * @property DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType(string) $shippingPackage
 * @property string $shippingService
 * @property DTS\eBaySDK\Trading\Enums\ShippingServiceCodeType(string) $shippingServiceCode
 * @property integer $shippingServiceId
 * @property DTS\eBaySDK\Trading\Types\ShippingServicePackageDetailsType $shippingServicePackageDetails
 * @property integer $shippingTimeMax
 * @property integer $shippingTimeMin
 * @property boolean $surchargeApplicable
 * @property DateTime $updateTime
 * @property boolean $validForSellingFlow
 * @property boolean $weightRequired
 */
class ShippingServiceDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'codsErvice' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CODService'
        ),
        'costGroupFlat' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CostGroupFlat'
        ),
        'deprecationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AnnouncementMessageType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DeprecationDetails'
        ),
        'description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'detailVersion' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ),
        'dimensionsRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DimensionsRequired'
        ),
        'expeditedService' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExpeditedService'
        ),
        'internationalService' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalService'
        ),
        'mappedToShippingServiceId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MappedToShippingServiceID'
        ),
        'serviceType' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ServiceType'
        ),
        'shippingCarrier' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingCarrier'
        ),
        'shippingCategory' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCategory'
        ),
        'shippingPackage' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ),
        'shippingService' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingService'
        ),
        'shippingServiceCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceCode'
        ),
        'shippingServiceId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceID'
        ),
        'shippingServicePackageDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServicePackageDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingServicePackageDetails'
        ),
        'shippingTimeMax' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMax'
        ),
        'shippingTimeMin' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingTimeMin'
        ),
        'surchargeApplicable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SurchargeApplicable'
        ),
        'updateTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ),
        'validForSellingFlow' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValidForSellingFlow'
        ),
        'weightRequired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightRequired'
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
