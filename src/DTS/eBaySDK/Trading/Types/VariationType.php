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
 * @property boolean $delete
 * @property DTS\eBaySDK\Trading\Types\DiscountPriceInfoType $discountPriceInfo
 * @property string $privateNotes
 * @property integer $quantity
 * @property DTS\eBaySDK\Trading\Types\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
 * @property DTS\eBaySDK\Trading\Types\SellingStatusType $sellingStatus
 * @property string $sku
 * @property DTS\eBaySDK\Trading\Types\AmountType $startPrice
 * @property DTS\eBaySDK\Trading\Types\AmountType $unitCost
 * @property integer $unitsAvailable
 * @property DTS\eBaySDK\Trading\Types\NameValueListArrayType $variationSpecifics
 * @property string $variationTitle
 * @property string $variationViewItemUrl
 * @property integer $watchCount
 */
class VariationType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'delete' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Delete'
        ),
        'discountPriceInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\DiscountPriceInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DiscountPriceInfo'
        ),
        'privateNotes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ),
        'quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'sellingManagerProductInventoryStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerProductInventoryStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductInventoryStatus'
        ),
        'sellingStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingStatus'
        ),
        'sku' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKU'
        ),
        'startPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartPrice'
        ),
        'unitCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitCost'
        ),
        'unitsAvailable' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitsAvailable'
        ),
        'variationSpecifics' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
        ),
        'variationTitle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationTitle'
        ),
        'variationViewItemUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationViewItemURL'
        ),
        'watchCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchCount'
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
