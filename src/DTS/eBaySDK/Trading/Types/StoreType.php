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
 * @property DTS\eBaySDK\Trading\Types\StoreCustomCategoryArrayType $customCategories
 * @property string $customHeader
 * @property DTS\eBaySDK\Trading\Enums\StoreCustomHeaderLayoutCodeType(string) $customHeaderLayout
 * @property DTS\eBaySDK\Trading\Types\StoreCustomListingHeaderType $customListingHeader
 * @property string $description
 * @property boolean $exportListings
 * @property DTS\eBaySDK\Trading\Enums\StoreHeaderStyleCodeType(string) $headerStyle
 * @property integer $homePage
 * @property DTS\eBaySDK\Trading\Enums\StoreItemListLayoutCodeType(string) $itemListLayout
 * @property DTS\eBaySDK\Trading\Enums\StoreItemListSortOrderCodeType(string) $itemListSortOrder
 * @property DateTime $lastOpenedTime
 * @property DTS\eBaySDK\Trading\Types\StoreLogoType $logo
 * @property DTS\eBaySDK\Trading\Enums\MerchDisplayCodeType(string) $merchDisplay
 * @property string $name
 * @property DTS\eBaySDK\Trading\Enums\StoreSubscriptionLevelCodeType(string) $subscriptionLevel
 * @property DTS\eBaySDK\Trading\Types\StoreThemeType $theme
 * @property boolean $titleWithCompatibility
 * @property string $url
 * @property string $urlpAth
 */
class StoreType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'customCategories' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreCustomCategoryArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CustomCategories'
        ),
        'customHeader' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CustomHeader'
        ),
        'customHeaderLayout' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CustomHeaderLayout'
        ),
        'customListingHeader' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreCustomListingHeaderType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CustomListingHeader'
        ),
        'description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'exportListings' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExportListings'
        ),
        'headerStyle' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HeaderStyle'
        ),
        'homePage' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HomePage'
        ),
        'itemListLayout' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemListLayout'
        ),
        'itemListSortOrder' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemListSortOrder'
        ),
        'lastOpenedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastOpenedTime'
        ),
        'logo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreLogoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Logo'
        ),
        'merchDisplay' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MerchDisplay'
        ),
        'name' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Name'
        ),
        'subscriptionLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SubscriptionLevel'
        ),
        'theme' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\StoreThemeType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Theme'
        ),
        'titleWithCompatibility' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TitleWithCompatibility'
        ),
        'url' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'URL'
        ),
        'urlpAth' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'URLPath'
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
