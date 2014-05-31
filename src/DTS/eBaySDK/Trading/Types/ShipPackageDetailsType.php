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
 * @property DTS\eBaySDK\Trading\Enums\MeasurementSystemCodeType(string) $measurementUnit
 * @property DTS\eBaySDK\Trading\Types\MeasureType $packageDepth
 * @property DTS\eBaySDK\Trading\Types\MeasureType $packageLength
 * @property DTS\eBaySDK\Trading\Types\MeasureType $packageWidth
 * @property boolean $shippingIrregular
 * @property DTS\eBaySDK\Trading\Enums\ShippingPackageCodeType(string) $shippingPackage
 * @property DTS\eBaySDK\Trading\Types\MeasureType $weightMajor
 * @property DTS\eBaySDK\Trading\Types\MeasureType $weightMinor
 */
class ShipPackageDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'measurementUnit' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MeasurementUnit'
        ),
        'packageDepth' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ),
        'packageLength' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ),
        'packageWidth' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ),
        'shippingIrregular' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingIrregular'
        ),
        'shippingPackage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ),
        'weightMajor' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ),
        'weightMinor' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
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
