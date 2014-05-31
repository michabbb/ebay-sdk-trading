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
 * @property DTS\eBaySDK\Trading\Types\AmountType $amountPaid
 * @property DTS\eBaySDK\Trading\Types\AmountType $commission
 * @property DTS\eBaySDK\Trading\Types\ExternalProductIDType $externalProductId
 * @property string $itemId
 * @property string $orderId
 * @property string $orderLineItemId
 * @property DateTime $paidTime
 * @property DTS\eBaySDK\Trading\Enums\PaymentTypeCodeType(string) $paymentType
 * @property string $privateNotes
 * @property string $sellerInventoryId
 * @property DTS\eBaySDK\Trading\Types\AmountType $shippingReimbursement
 * @property string $title
 * @property string $transactionId
 * @property DTS\eBaySDK\Trading\Types\AmountType $transactionPrice
 */
class SellerPaymentType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'amountPaid' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ),
        'commission' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Commission'
        ),
        'externalProductId' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExternalProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalProductID'
        ),
        'itemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemID'
        ),
        'orderId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ),
        'orderLineItemId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderLineItemID'
        ),
        'paidTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ),
        'paymentType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentType'
        ),
        'privateNotes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrivateNotes'
        ),
        'sellerInventoryId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerInventoryID'
        ),
        'shippingReimbursement' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingReimbursement'
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
        'transactionPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionPrice'
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
