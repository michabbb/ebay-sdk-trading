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
 * @property DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $activeList
 * @property DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $bidList
 * @property DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $deletedFromSoldList
 * @property DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $deletedFromUnsoldList
 * @property DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $scheduledList
 * @property DTS\eBaySDK\Trading\Types\SellingSummaryType $sellingSummary
 * @property DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $soldList
 * @property DTS\eBaySDK\Trading\Types\MyeBaySellingSummaryType $summary
 * @property DTS\eBaySDK\Trading\Types\PaginatedItemArrayType $unsoldList
 */
class GetMyeBaySellingResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'activeList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActiveList'
        ),
        'bidList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BidList'
        ),
        'deletedFromSoldList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromSoldList'
        ),
        'deletedFromUnsoldList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromUnsoldList'
        ),
        'scheduledList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ScheduledList'
        ),
        'sellingSummary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingSummary'
        ),
        'soldList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SoldList'
        ),
        'summary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MyeBaySellingSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Summary'
        ),
        'unsoldList' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnsoldList'
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
