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
 * @property integer $approximatePages
 * @property integer $attributeSetId
 * @property boolean $hasMore
 * @property DTS\eBaySDK\Trading\Types\ProductFamilyType $productFamilies
 * @property DTS\eBaySDK\Trading\Types\ProductFinderConstraintType $productFinderConstraints
 * @property boolean $tooManyMatchesFound
 * @property integer $totalProducts
 */
class ResponseAttributeSetType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'approximatePages' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ApproximatePages'
        ),
        'attributeSetId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeSetID'
        ),
        'hasMore' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HasMore'
        ),
        'productFamilies' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProductFamilyType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ProductFamilies'
        ),
        'productFinderConstraints' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProductFinderConstraintType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ProductFinderConstraints'
        ),
        'tooManyMatchesFound' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TooManyMatchesFound'
        ),
        'totalProducts' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalProducts'
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
