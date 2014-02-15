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
 * @property boolean $adminEnded
 * @property integer $bidCount
 * @property DTS\eBaySDK\Trading\Types\AmountType $bidIncrement
 * @property integer $bidderCount
 * @property DTS\eBaySDK\Trading\Types\AmountType $convertedCurrentPrice
 * @property DTS\eBaySDK\Trading\Types\AmountType $currentPrice
 * @property DTS\eBaySDK\Trading\Types\AmountType $finalValueFee
 * @property DTS\eBaySDK\Trading\Types\UserType $highBidder
 * @property integer $leadCount
 * @property DTS\eBaySDK\Trading\Types\ListingStatusCodeType(string) $listingStatus
 * @property DTS\eBaySDK\Trading\Types\AmountType $minimumToBid
 * @property DTS\eBaySDK\Trading\Types\PromotionalSaleDetailsType $promotionalSaleDetails
 * @property integer $quantitySold
 * @property integer $quantitySoldByPickupInStore
 * @property boolean $reserveMet
 * @property boolean $secondChanceEligible
 * @property boolean $soldAsBin
 */
class SellingStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'adminEnded' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdminEnded'
        ),
        'bidCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidCount'
        ),
        'bidIncrement' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidIncrement'
        ),
        'bidderCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidderCount'
        ),
        'convertedCurrentPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedCurrentPrice'
        ),
        'currentPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CurrentPrice'
        ),
        'finalValueFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FinalValueFee'
        ),
        'highBidder' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HighBidder'
        ),
        'leadCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LeadCount'
        ),
        'listingStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingStatus'
        ),
        'minimumToBid' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinimumToBid'
        ),
        'promotionalSaleDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PromotionalSaleDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionalSaleDetails'
        ),
        'quantitySold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySold'
        ),
        'quantitySoldByPickupInStore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantitySoldByPickupInStore'
        ),
        'reserveMet' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReserveMet'
        ),
        'secondChanceEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceEligible'
        ),
        'soldAsBin' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SoldAsBin'
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
