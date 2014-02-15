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
 * @property integer $attributeSetId
 * @property boolean $availableItemsOnly
 * @property DTS\eBaySDK\Trading\Types\CharacteristicSetIDsType $characteristicSetIdS
 * @property DTS\eBaySDK\Trading\Types\ExternalProductIDType $externalProductId
 * @property integer $maxChildrenPerFamily
 * @property DTS\eBaySDK\Trading\Types\PaginationType $pagination
 * @property integer $productFinderId
 * @property string $productId
 * @property string $productReferenceId
 * @property string $productSearchId
 * @property string $queryKeywords
 * @property DTS\eBaySDK\Trading\Types\SearchAttributesType $searchAttributes
 * @property integer $sortAttributeId
 */
class ProductSearchType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'attributeSetId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeSetID'
        ),
        'availableItemsOnly' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AvailableItemsOnly'
        ),
        'characteristicSetIdS' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CharacteristicSetIDsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharacteristicSetIDs'
        ),
        'externalProductId' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExternalProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalProductID'
        ),
        'maxChildrenPerFamily' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxChildrenPerFamily'
        ),
        'pagination' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ),
        'productFinderId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductFinderID'
        ),
        'productId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'productReferenceId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductReferenceID'
        ),
        'productSearchId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductSearchID'
        ),
        'queryKeywords' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QueryKeywords'
        ),
        'searchAttributes' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SearchAttributesType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SearchAttributes'
        ),
        'sortAttributeId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SortAttributeID'
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
