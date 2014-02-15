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
 * @property DTS\eBaySDK\Trading\Types\AmountType $actualShippingCost
 * @property DTS\eBaySDK\Trading\Types\AmountType $adjustmentAmount
 * @property string $buyerEmail
 * @property string $buyerId
 * @property DTS\eBaySDK\Trading\Types\AmountType $cashOnDeliveryCost
 * @property DateTime $creationTime
 * @property integer $daysSinceSale
 * @property integer $emailsSent
 * @property DTS\eBaySDK\Trading\Types\AmountType $itemCost
 * @property DTS\eBaySDK\Trading\Types\AmountType $netInsuranceFee
 * @property DTS\eBaySDK\Trading\Types\AmountType $netShippingFee
 * @property DTS\eBaySDK\Trading\Types\AmountType $netTotalAmount
 * @property string $notesFromBuyer
 * @property string $notesToBuyer
 * @property string $notesToSeller
 * @property DTS\eBaySDK\Trading\Types\SellingManagerOrderStatusType $orderStatus
 * @property DTS\eBaySDK\Trading\Types\AmountType $refundAmount
 * @property string $refundStatus
 * @property DTS\eBaySDK\Trading\Types\AmountType $salePrice
 * @property integer $saleRecordId
 * @property DTS\eBaySDK\Trading\Types\SellingManagerSoldTransactionType $sellingManagerSoldTransaction
 * @property DTS\eBaySDK\Trading\Types\AddressType $shippingAddress
 * @property DTS\eBaySDK\Trading\Types\ShippingDetailsType $shippingDetails
 * @property DTS\eBaySDK\Trading\Types\AmountType $totalAmount
 * @property integer $totalQuantity
 * @property DTS\eBaySDK\Trading\Types\UnpaidItemStatusTypeCodeType(string) $unpaidItemStatus
 * @property DTS\eBaySDK\Trading\Types\AmountType $vatiNsuranceFee
 * @property DTS\eBaySDK\Trading\Types\VATRateType $vatrAte
 * @property DTS\eBaySDK\Trading\Types\AmountType $vatsHippingFee
 * @property DTS\eBaySDK\Trading\Types\AmountType $vattOtalAmount
 */
class SellingManagerSoldOrderType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'actualShippingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActualShippingCost'
        ),
        'adjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ),
        'buyerEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerEmail'
        ),
        'buyerId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerID'
        ),
        'cashOnDeliveryCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CashOnDeliveryCost'
        ),
        'creationTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreationTime'
        ),
        'daysSinceSale' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DaysSinceSale'
        ),
        'emailsSent' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EmailsSent'
        ),
        'itemCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCost'
        ),
        'netInsuranceFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NetInsuranceFee'
        ),
        'netShippingFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NetShippingFee'
        ),
        'netTotalAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NetTotalAmount'
        ),
        'notesFromBuyer' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotesFromBuyer'
        ),
        'notesToBuyer' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotesToBuyer'
        ),
        'notesToSeller' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotesToSeller'
        ),
        'orderStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerOrderStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ),
        'refundAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ),
        'refundStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ),
        'salePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SalePrice'
        ),
        'saleRecordId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SaleRecordID'
        ),
        'sellingManagerSoldTransaction' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerSoldTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'SellingManagerSoldTransaction'
        ),
        'shippingAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'shippingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingDetails'
        ),
        'totalAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalAmount'
        ),
        'totalQuantity' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalQuantity'
        ),
        'unpaidItemStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItemStatus'
        ),
        'vatiNsuranceFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATInsuranceFee'
        ),
        'vatrAte' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VATRateType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'VATRate'
        ),
        'vatsHippingFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATShippingFee'
        ),
        'vattOtalAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'VATTotalAmount'
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
