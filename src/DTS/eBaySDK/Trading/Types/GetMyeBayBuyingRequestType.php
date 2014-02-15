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
 * @property DTS\eBaySDK\Trading\Types\ItemListCustomizationType $bestOfferList
 * @property DTS\eBaySDK\Trading\Types\BidAssistantListType $bidAssistantList
 * @property DTS\eBaySDK\Trading\Types\ItemListCustomizationType $bidList
 * @property DTS\eBaySDK\Trading\Types\ItemListCustomizationType $buyingSummary
 * @property DTS\eBaySDK\Trading\Types\ItemListCustomizationType $deletedFromLostList
 * @property DTS\eBaySDK\Trading\Types\ItemListCustomizationType $deletedFromWonList
 * @property DTS\eBaySDK\Trading\Types\MyeBaySelectionType $favoriteSearches
 * @property DTS\eBaySDK\Trading\Types\MyeBaySelectionType $favoriteSellers
 * @property boolean $hideVariations
 * @property DTS\eBaySDK\Trading\Types\ItemListCustomizationType $lostList
 * @property DTS\eBaySDK\Trading\Types\MyeBaySelectionType $secondChanceOffer
 * @property DTS\eBaySDK\Trading\Types\MyeBaySelectionType $userDefinedLists
 * @property DTS\eBaySDK\Trading\Types\ItemListCustomizationType $watchList
 * @property DTS\eBaySDK\Trading\Types\ItemListCustomizationType $wonList
 */
class GetMyeBayBuyingRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'bestOfferList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferList'
        ),
        'bidAssistantList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\BidAssistantListType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidAssistantList'
        ),
        'bidList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidList'
        ),
        'buyingSummary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyingSummary'
        ),
        'deletedFromLostList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromLostList'
        ),
        'deletedFromWonList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromWonList'
        ),
        'favoriteSearches' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBaySelectionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSearches'
        ),
        'favoriteSellers' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBaySelectionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSellers'
        ),
        'hideVariations' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HideVariations'
        ),
        'lostList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LostList'
        ),
        'secondChanceOffer' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBaySelectionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SecondChanceOffer'
        ),
        'userDefinedLists' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBaySelectionType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserDefinedLists'
        ),
        'watchList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WatchList'
        ),
        'wonList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemListCustomizationType',
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
