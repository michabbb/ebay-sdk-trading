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
 * @property boolean $adminEndedItemsOnly
 * @property integer $categoryId
 * @property DateTime $endTimeFrom
 * @property DateTime $endTimeTo
 * @property DTS\eBaySDK\Trading\Enums\GranularityLevelCodeType(string) $granularityLevel
 * @property boolean $includeVariations
 * @property boolean $includeWatchCount
 * @property DTS\eBaySDK\Trading\Types\UserIDArrayType $motorsDealerUsers
 * @property DTS\eBaySDK\Trading\Types\PaginationType $pagination
 * @property DTS\eBaySDK\Trading\Types\SKUArrayType $skuaRray
 * @property integer $sort
 * @property DateTime $startTimeFrom
 * @property DateTime $startTimeTo
 * @property string $userId
 */
class GetSellerListRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'adminEndedItemsOnly' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdminEndedItemsOnly'
        ),
        'categoryId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
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
        'granularityLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GranularityLevel'
        ),
        'includeVariations' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeVariations'
        ),
        'includeWatchCount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeWatchCount'
        ),
        'motorsDealerUsers' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserIDArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MotorsDealerUsers'
        ),
        'pagination' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ),
        'skuaRray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SKUArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKUArray'
        ),
        'sort' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Sort'
        ),
        'startTimeFrom' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartTimeFrom'
        ),
        'startTimeTo' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StartTimeTo'
        ),
        'userId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UserID'
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
