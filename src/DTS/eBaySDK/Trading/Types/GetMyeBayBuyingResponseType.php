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
 * @property DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $bestOfferList
 * @property DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $bidList
 * @property DTS\eBaySDK\Trading\Types\BuyingSummaryType $buyingSummary
 * @property DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $deletedFromLostList
 * @property DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $deletedFromWonList
 * @property DTS\eBaySDK\Trading\Types\MyeBayFavoriteSearchListType $favoriteSearches
 * @property DTS\eBaySDK\Trading\Types\MyeBayFavoriteSellerListType $favoriteSellers
 * @property DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $lostList
 * @property DTS\eBaySDK\Trading\Types\ItemType $secondChanceOffer
 * @property DTS\eBaySDK\Trading\Types\UserDefinedListType $userDefinedList
 * @property DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $watchList
 * @property DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $wonList
 */
class GetMyeBayBuyingResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'bestOfferList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferList'
        ),
        'bidList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidList'
        ),
        'buyingSummary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BuyingSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyingSummary'
        ),
        'deletedFromLostList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromLostList'
        ),
        'deletedFromWonList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromWonList'
        ),
        'favoriteSearches' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBayFavoriteSearchListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSearches'
        ),
        'favoriteSellers' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBayFavoriteSellerListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSellers'
        ),
        'lostList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LostList'
        ),
        'secondChanceOffer' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SecondChanceOffer'
        ),
        'userDefinedList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserDefinedListType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'UserDefinedList'
        ),
        'watchList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchList'
        ),
        'wonList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WonList'
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
