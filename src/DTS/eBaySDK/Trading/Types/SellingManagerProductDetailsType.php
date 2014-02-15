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
 * @property string $customLabel
 * @property integer $folderId
 * @property string $note
 * @property integer $productId
 * @property string $productName
 * @property integer $quantityAvailable
 * @property boolean $restockAlert
 * @property integer $restockThreshold
 * @property DTS\eBaySDK\Trading\Types\AmountType $unitCost
 * @property DTS\eBaySDK\Trading\Types\SellingManagerVendorDetailsType $vendorInfo
 */
class SellingManagerProductDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'customLabel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CustomLabel'
        ),
        'folderId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FolderID'
        ),
        'note' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Note'
        ),
        'productId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductID'
        ),
        'productName' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductName'
        ),
        'quantityAvailable' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityAvailable'
        ),
        'restockAlert' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RestockAlert'
        ),
        'restockThreshold' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RestockThreshold'
        ),
        'unitCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnitCost'
        ),
        'vendorInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerVendorDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VendorInfo'
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
