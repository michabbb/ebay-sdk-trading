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
 * @property string $promotedKeywords
 * @property integer $promotedStoreCategoryId
 * @property string $promotedeBayCategoryId
 * @property DTS\eBaySDK\Trading\Types\PromotionMethodCodeType(string) $promotionMethod
 * @property DTS\eBaySDK\Trading\Types\PromotionSchemeCodeType(string) $promotionScheme
 * @property DTS\eBaySDK\Trading\Types\ItemIDType(string) $referringItemId
 * @property string $referringKeywords
 * @property integer $referringStoreCategoryId
 * @property string $referringeBayCategoryId
 */
class PromotionRuleType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'promotedKeywords' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotedKeywords'
        ),
        'promotedStoreCategoryId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotedStoreCategoryID'
        ),
        'promotedeBayCategoryId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotedeBayCategoryID'
        ),
        'promotionMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionMethod'
        ),
        'promotionScheme' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PromotionScheme'
        ),
        'referringItemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferringItemID'
        ),
        'referringKeywords' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferringKeywords'
        ),
        'referringStoreCategoryId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferringStoreCategoryID'
        ),
        'referringeBayCategoryId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferringeBayCategoryID'
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
