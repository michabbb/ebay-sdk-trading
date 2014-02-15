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
 * @property boolean $crossPromotionEnabled
 * @property DTS\eBaySDK\Trading\Types\GallerySortFilterCodeType(string) $crossSellGallerySortFilter
 * @property DTS\eBaySDK\Trading\Types\ItemFormatSortFilterCodeType(string) $crossSellItemFormatSortFilter
 * @property DTS\eBaySDK\Trading\Types\ItemSortFilterCodeType(string) $crossSellItemSortFilter
 * @property DTS\eBaySDK\Trading\Types\GallerySortFilterCodeType(string) $upSellGallerySortFilter
 * @property DTS\eBaySDK\Trading\Types\ItemFormatSortFilterCodeType(string) $upSellItemFormatSortFilter
 * @property DTS\eBaySDK\Trading\Types\ItemSortFilterCodeType(string) $upSellItemSortFilter
 */
class CrossPromotionPreferencesType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'crossPromotionEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossPromotionEnabled'
        ),
        'crossSellGallerySortFilter' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossSellGallerySortFilter'
        ),
        'crossSellItemFormatSortFilter' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossSellItemFormatSortFilter'
        ),
        'crossSellItemSortFilter' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CrossSellItemSortFilter'
        ),
        'upSellGallerySortFilter' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpSellGallerySortFilter'
        ),
        'upSellItemFormatSortFilter' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpSellItemFormatSortFilter'
        ),
        'upSellItemSortFilter' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UpSellItemSortFilter'
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
