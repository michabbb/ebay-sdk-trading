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
 * @property string $discountProfileId
 * @property string $discountProfileName
 * @property DTS\eBaySDK\Trading\Types\AmountType $eachAdditionalAmount
 * @property DTS\eBaySDK\Trading\Types\AmountType $eachAdditionalAmountOff
 * @property double $eachAdditionalPercentOff
 * @property string $mappedDiscountProfileId
 * @property DTS\eBaySDK\Trading\Types\MeasureType $weightOff
 */
class DiscountProfileType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'discountProfileId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountProfileID'
        ),
        'discountProfileName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountProfileName'
        ),
        'eachAdditionalAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EachAdditionalAmount'
        ),
        'eachAdditionalAmountOff' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EachAdditionalAmountOff'
        ),
        'eachAdditionalPercentOff' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EachAdditionalPercentOff'
        ),
        'mappedDiscountProfileId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MappedDiscountProfileID'
        ),
        'weightOff' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightOff'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        $elementNamesMap = self::buildElementNamesMap(self::$propertyTypes);

        list($parentValues, $childValues) = self::getParentValues($elementNamesMap, self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$elementNames)) {
            self::$elementNames[__CLASS__] = array_merge(self::$elementNames[get_parent_class()], $elementNamesMap);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
