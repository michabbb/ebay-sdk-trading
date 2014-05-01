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
 * @property boolean $autoPayEnabled
 * @property boolean $b2BvateNabled
 * @property boolean $bestOfferEnabled
 * @property boolean $catalogEnabled
 * @property string $categoryId
 * @property integer $categoryLevel
 * @property string $categoryName
 * @property string $categoryParentId
 * @property string $categoryParentName
 * @property DTS\eBaySDK\Trading\Types\CharacteristicsSetType $characteristicsSets
 * @property boolean $expired
 * @property boolean $intlAutosFixedCat
 * @property boolean $leafCategory
 * @property boolean $lsd
 * @property boolean $orpa
 * @property boolean $orra
 * @property DTS\eBaySDK\Trading\Types\ExtendedProductFinderIDType $productFinderIdS
 * @property boolean $productSearchPageAvailable
 * @property boolean $sellerGuaranteeEligible
 * @property boolean $virtual
 */
class CategoryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'autoPayEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AutoPayEnabled'
        ),
        'b2BvateNabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'B2BVATEnabled'
        ),
        'bestOfferEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferEnabled'
        ),
        'catalogEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CatalogEnabled'
        ),
        'categoryId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ),
        'categoryLevel' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryLevel'
        ),
        'categoryName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CategoryName'
        ),
        'categoryParentId' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CategoryParentID'
        ),
        'categoryParentName' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CategoryParentName'
        ),
        'characteristicsSets' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CharacteristicsSetType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'CharacteristicsSets'
        ),
        'expired' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Expired'
        ),
        'intlAutosFixedCat' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntlAutosFixedCat'
        ),
        'leafCategory' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LeafCategory'
        ),
        'lsd' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LSD'
        ),
        'orpa' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ORPA'
        ),
        'orra' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ORRA'
        ),
        'productFinderIdS' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExtendedProductFinderIDType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ProductFinderIDs'
        ),
        'productSearchPageAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductSearchPageAvailable'
        ),
        'sellerGuaranteeEligible' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerGuaranteeEligible'
        ),
        'virtual' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Virtual'
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
