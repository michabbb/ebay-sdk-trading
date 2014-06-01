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
 * @property integer $confidence
 * @property integer $maxValues
 * @property integer $minValues
 * @property DTS\eBaySDK\Trading\Types\NameValueRelationshipType $relationship
 * @property DTS\eBaySDK\Trading\Enums\SelectionModeCodeType(string) $selectionMode
 * @property DTS\eBaySDK\Trading\Enums\ValueFormatCodeType(string) $valueFormat
 * @property DTS\eBaySDK\Trading\Enums\ValueTypeCodeType(string) $valueType
 * @property DTS\eBaySDK\Trading\Enums\VariationPictureRuleCodeType(string) $variationPicture
 * @property DTS\eBaySDK\Trading\Enums\VariationSpecificsRuleCodeType(string) $variationSpecifics
 */
class RecommendationValidationRulesType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'confidence' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Confidence'
        ),
        'maxValues' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MaxValues'
        ),
        'minValues' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MinValues'
        ),
        'relationship' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueRelationshipType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'Relationship'
        ),
        'selectionMode' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SelectionMode'
        ),
        'valueFormat' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValueFormat'
        ),
        'valueType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ValueType'
        ),
        'variationPicture' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationPicture'
        ),
        'variationSpecifics' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VariationSpecifics'
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
