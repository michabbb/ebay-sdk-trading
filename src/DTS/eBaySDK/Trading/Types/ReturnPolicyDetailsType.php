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
 * @property boolean $description
 * @property string $detailVersion
 * @property boolean $ean
 * @property DTS\eBaySDK\Trading\Types\RefundDetailsType $refund
 * @property DTS\eBaySDK\Trading\Types\RestockingFeeValueDetailsType $restockingFeeValue
 * @property DTS\eBaySDK\Trading\Types\ReturnsAcceptedDetailsType $returnsAccepted
 * @property DTS\eBaySDK\Trading\Types\ReturnsWithinDetailsType $returnsWithin
 * @property DTS\eBaySDK\Trading\Types\ShippingCostPaidByDetailsType $shippingCostPaidBy
 * @property DateTime $updateTime
 * @property DTS\eBaySDK\Trading\Types\WarrantyDurationDetailsType $warrantyDuration
 * @property DTS\eBaySDK\Trading\Types\WarrantyOfferedDetailsType $warrantyOffered
 * @property DTS\eBaySDK\Trading\Types\WarrantyTypeDetailsType $warrantyType
 */
class ReturnPolicyDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'description' => array(
            'type' => 'boolean',
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
        'ean' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EAN'
        ),
        'refund' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RefundDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Refund'
        ),
        'restockingFeeValue' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RestockingFeeValueDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RestockingFeeValue'
        ),
        'returnsAccepted' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnsAcceptedDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ReturnsAccepted'
        ),
        'returnsWithin' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReturnsWithinDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ReturnsWithin'
        ),
        'shippingCostPaidBy' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingCostPaidByDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingCostPaidBy'
        ),
        'updateTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
        ),
        'warrantyDuration' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\WarrantyDurationDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'WarrantyDuration'
        ),
        'warrantyOffered' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\WarrantyOfferedDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'WarrantyOffered'
        ),
        'warrantyType' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\WarrantyTypeDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'WarrantyType'
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
