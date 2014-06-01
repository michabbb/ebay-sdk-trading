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
 * @property integer $bidCountMax
 * @property integer $bidCountMin
 * @property string $categoryId
 * @property DTS\eBaySDK\Trading\Enums\ItemConditionCodeType(string) $condition
 * @property DTS\eBaySDK\Trading\Enums\CurrencyCodeType(string) $currency
 * @property DateTime $endTimeFrom
 * @property DateTime $endTimeTo
 * @property DTS\eBaySDK\Trading\Enums\SimpleItemSortCodeType(string) $itemSort
 * @property DTS\eBaySDK\Trading\Enums\ItemTypeCodeType(string) $itemType
 * @property DTS\eBaySDK\Trading\Enums\CountryCodeType(string) $itemsAvailableTo
 * @property DTS\eBaySDK\Trading\Enums\CountryCodeType(string) $itemsLocatedIn
 * @property integer $maxDistance
 * @property DTS\eBaySDK\Trading\Enums\PaymentMethodSearchCodeType(string) $paymentMethod
 * @property string $postalCode
 * @property DTS\eBaySDK\Trading\Enums\PreferredLocationCodeType(string) $preferredLocation
 * @property DTS\eBaySDK\Trading\Types\AmountType $priceMax
 * @property DTS\eBaySDK\Trading\Types\AmountType $priceMin
 * @property integer $quantity
 * @property DTS\eBaySDK\Trading\Enums\QuantityOperatorCodeType(string) $quantityOperator
 * @property string $queryKeywords
 * @property DTS\eBaySDK\Trading\Enums\SearchFlagCodeType(string) $searchFlag
 * @property string $searchName
 * @property string $searchQuery
 * @property DTS\eBaySDK\Trading\Enums\SellerBusinessCodeType(string) $sellerBusinessType
 * @property string $sellerId
 * @property string $sellerIdeXclude
 * @property DTS\eBaySDK\Trading\Enums\SortOrderCodeType(string) $sortOrder
 */
class MyeBayFavoriteSearchType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'bidCountMax' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidCountMax'
        ),
        'bidCountMin' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidCountMin'
        ),
        'categoryId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ),
        'condition' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Condition'
        ),
        'currency' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ),
        'endTimeFrom' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTimeFrom'
        ),
        'endTimeTo' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EndTimeTo'
        ),
        'itemSort' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSort'
        ),
        'itemType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemType'
        ),
        'itemsAvailableTo' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemsAvailableTo'
        ),
        'itemsLocatedIn' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemsLocatedIn'
        ),
        'maxDistance' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxDistance'
        ),
        'paymentMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ),
        'postalCode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ),
        'preferredLocation' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PreferredLocation'
        ),
        'priceMax' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PriceMax'
        ),
        'priceMin' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PriceMin'
        ),
        'quantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ),
        'quantityOperator' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityOperator'
        ),
        'queryKeywords' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QueryKeywords'
        ),
        'searchFlag' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SearchFlag'
        ),
        'searchName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchName'
        ),
        'searchQuery' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SearchQuery'
        ),
        'sellerBusinessType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerBusinessType'
        ),
        'sellerId' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SellerID'
        ),
        'sellerIdeXclude' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SellerIDExclude'
        ),
        'sortOrder' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
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
