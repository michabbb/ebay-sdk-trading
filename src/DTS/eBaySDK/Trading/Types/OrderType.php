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
 * @property DTS\eBaySDK\Trading\Types\AmountType $adjustmentAmount
 * @property DTS\eBaySDK\Trading\Types\AmountType $amountPaid
 * @property DTS\eBaySDK\Trading\Types\AmountType $amountSaved
 * @property boolean $bundlePurchase
 * @property string $buyerCheckoutMessage
 * @property DTS\eBaySDK\Trading\Types\UserIDType(string) $buyerUserId
 * @property string $cancelReason
 * @property DTS\eBaySDK\Trading\Types\CheckoutStatusType $checkoutStatus
 * @property DateTime $createdTime
 * @property DTS\eBaySDK\Trading\Types\TradingRoleCodeType(string) $creatingUserRole
 * @property string $eiastOken
 * @property DTS\eBaySDK\Trading\Types\ExternalTransactionType $externalTransaction
 * @property boolean $integratedMerchantCreditCardEnabled
 * @property boolean $isMultiLegShipping
 * @property DTS\eBaySDK\Trading\Types\PaymentsInformationType $monetaryDetails
 * @property DTS\eBaySDK\Trading\Types\MultiLegShippingDetailsType $multiLegShippingDetails
 * @property DTS\eBaySDK\Trading\Types\OrderIDType(string) $orderId
 * @property DTS\eBaySDK\Trading\Types\OrderStatusCodeType(string) $orderStatus
 * @property DateTime $paidTime
 * @property DTS\eBaySDK\Trading\Types\PaymentHoldDetailType $paymentHoldDetails
 * @property DTS\eBaySDK\Trading\Types\PaymentHoldStatusCodeType(string) $paymentHoldStatus
 * @property DTS\eBaySDK\Trading\Types\BuyerPaymentMethodCodeType(string) $paymentMethods
 * @property DTS\eBaySDK\Trading\Types\PickupDetailsType $pickupDetails
 * @property DTS\eBaySDK\Trading\Types\PickupMethodSelectedType $pickupMethodSelected
 * @property DTS\eBaySDK\Trading\Types\AmountType $refundAmount
 * @property DTS\eBaySDK\Trading\Types\RefundArrayType $refundArray
 * @property string $refundStatus
 * @property string $sellerEiastOken
 * @property string $sellerEmail
 * @property DTS\eBaySDK\Trading\Types\UserIDType(string) $sellerUserId
 * @property DateTime $shippedTime
 * @property DTS\eBaySDK\Trading\Types\AddressType $shippingAddress
 * @property DTS\eBaySDK\Trading\Types\ShippingDetailsType $shippingDetails
 * @property DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType $shippingServiceSelected
 * @property DTS\eBaySDK\Trading\Types\AmountType $subtotal
 * @property DTS\eBaySDK\Trading\Types\AmountType $total
 * @property DTS\eBaySDK\Trading\Types\TransactionArrayType $transactionArray
 */
class OrderType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'adjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AdjustmentAmount'
        ),
        'amountPaid' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ),
        'amountSaved' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountSaved'
        ),
        'bundlePurchase' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BundlePurchase'
        ),
        'buyerCheckoutMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ),
        'buyerUserId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerUserID'
        ),
        'cancelReason' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CancelReason'
        ),
        'checkoutStatus' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CheckoutStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ),
        'createdTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreatedTime'
        ),
        'creatingUserRole' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreatingUserRole'
        ),
        'eiastOken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EIASToken'
        ),
        'externalTransaction' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExternalTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ),
        'integratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ),
        'isMultiLegShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ),
        'monetaryDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentsInformationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MonetaryDetails'
        ),
        'multiLegShippingDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\MultiLegShippingDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MultiLegShippingDetails'
        ),
        'orderId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderID'
        ),
        'orderStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderStatus'
        ),
        'paidTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaidTime'
        ),
        'paymentHoldDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentHoldDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
        ),
        'paymentHoldStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ),
        'paymentMethods' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'PaymentMethods'
        ),
        'pickupDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PickupDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupDetails'
        ),
        'pickupMethodSelected' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PickupMethodSelectedType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PickupMethodSelected'
        ),
        'refundAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ),
        'refundArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RefundArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundArray'
        ),
        'refundStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ),
        'sellerEiastOken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerEIASToken'
        ),
        'sellerEmail' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerEmail'
        ),
        'sellerUserId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerUserID'
        ),
        'shippedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
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
        'shippingServiceSelected' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceSelected'
        ),
        'subtotal' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Subtotal'
        ),
        'total' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Total'
        ),
        'transactionArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionArray'
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
