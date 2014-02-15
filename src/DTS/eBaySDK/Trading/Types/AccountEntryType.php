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
 * @property DTS\eBaySDK\Trading\Types\AccountDetailEntryCodeType(string) $accountDetailsEntryType
 * @property DTS\eBaySDK\Trading\Types\AmountType $balance
 * @property DTS\eBaySDK\Trading\Types\AmountType $conversionRate
 * @property DateTime $date
 * @property string $description
 * @property DTS\eBaySDK\Trading\Types\AmountType $grossDetailAmount
 * @property DTS\eBaySDK\Trading\Types\ItemIDType(string) $itemId
 * @property string $memo
 * @property DTS\eBaySDK\Trading\Types\AmountType $netDetailAmount
 * @property string $orderLineItemId
 * @property boolean $receivedTopRatedDiscount
 * @property string $refNumber
 * @property string $title
 * @property string $transactionId
 * @property integer $vatpErcent
 */
class AccountEntryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'accountDetailsEntryType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AccountDetailsEntryType'
        ),
        'balance' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Balance'
        ),
        'conversionRate' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConversionRate'
        ),
        'date' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Date'
        ),
        'description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'grossDetailAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GrossDetailAmount'
        ),
        'itemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'memo' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Memo'
        ),
        'netDetailAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NetDetailAmount'
        ),
        'orderLineItemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ),
        'receivedTopRatedDiscount' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReceivedTopRatedDiscount'
        ),
        'refNumber' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefNumber'
        ),
        'title' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Title'
        ),
        'transactionId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionID'
        ),
        'vatpErcent' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATPercent'
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
