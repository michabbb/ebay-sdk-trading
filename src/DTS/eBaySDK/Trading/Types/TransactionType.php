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
 * @property DTS\eBaySDK\Trading\Types\AmountType $actualHandlingCost
 * @property DTS\eBaySDK\Trading\Types\AmountType $actualShippingCost
 * @property DTS\eBaySDK\Trading\Types\AmountType $adjustmentAmount
 * @property DTS\eBaySDK\Trading\Types\AmountType $amountPaid
 * @property boolean $bestOfferSale
 * @property boolean $bundlePurchase
 * @property DTS\eBaySDK\Trading\Types\UserType $buyer
 * @property string $buyerCheckoutMessage
 * @property DTS\eBaySDK\Trading\Types\AmountType $buyerGuaranteePrice
 * @property string $buyerMessage
 * @property DTS\eBaySDK\Trading\Types\PaidStatusCodeType(string) $buyerPaidStatus
 * @property string $cartId
 * @property string $codiceFiscale
 * @property DTS\eBaySDK\Trading\Types\OrderType $containingOrder
 * @property DTS\eBaySDK\Trading\Types\AmountType $convertedAdjustmentAmount
 * @property DTS\eBaySDK\Trading\Types\AmountType $convertedAmountPaid
 * @property DTS\eBaySDK\Trading\Types\AmountType $convertedTransactionPrice
 * @property DateTime $createdDate
 * @property DTS\eBaySDK\Trading\Types\DepositTypeCodeType(string) $depositType
 * @property DTS\eBaySDK\Trading\Types\AmountType $dutchAuctionBid
 * @property DTS\eBaySDK\Trading\Types\ExternalTransactionType $externalTransaction
 * @property DTS\eBaySDK\Trading\Types\FeedbackInfoType $feedbackLeft
 * @property DTS\eBaySDK\Trading\Types\FeedbackInfoType $feedbackReceived
 * @property DTS\eBaySDK\Trading\Types\AmountType $finalValueFee
 * @property boolean $intangibleItem
 * @property DateTime $invoiceSentTime
 * @property boolean $isMultiLegShipping
 * @property DTS\eBaySDK\Trading\Types\ItemType $item
 * @property DTS\eBaySDK\Trading\Types\ListingCheckoutRedirectPreferenceType $listingCheckoutRedirectPreference
 * @property DTS\eBaySDK\Trading\Types\PaymentsInformationType $monetaryDetails
 * @property DTS\eBaySDK\Trading\Types\MultiLegShippingDetailsType $multiLegShippingDetails
 * @property string $orderLineItemId
 * @property DateTime $paidTime
 * @property string $paisaPayId
 * @property string $payPalEmailAddress
 * @property DTS\eBaySDK\Trading\Types\PaymentHoldDetailType $paymentHoldDetails
 * @property DTS\eBaySDK\Trading\Types\PickupDetailsType $pickupDetails
 * @property DTS\eBaySDK\Trading\Types\PickupMethodSelectedType $pickupMethodSelected
 * @property DTS\eBaySDK\Trading\Types\TransactionPlatformCodeType(string) $platform
 * @property integer $quantityPurchased
 * @property DTS\eBaySDK\Trading\Types\AmountType $refundAmount
 * @property DTS\eBaySDK\Trading\Types\RefundArrayType $refundArray
 * @property string $refundStatus
 * @property boolean $sellerContactBuyerByEmail
 * @property DTS\eBaySDK\Trading\Types\SellerDiscountsType $sellerDiscounts
 * @property DTS\eBaySDK\Trading\Types\PaidStatusCodeType(string) $sellerPaidStatus
 * @property DTS\eBaySDK\Trading\Types\SellingManagerProductDetailsType $sellingManagerProductDetails
 * @property DateTime $shippedTime
 * @property DTS\eBaySDK\Trading\Types\ShippingDetailsType $shippingDetails
 * @property DTS\eBaySDK\Trading\Types\ShippingServiceOptionsType $shippingServiceSelected
 * @property DTS\eBaySDK\Trading\Types\TransactionStatusType $status
 * @property DTS\eBaySDK\Trading\Types\TaxesType $taxes
 * @property DTS\eBaySDK\Trading\Types\AmountType $totalPrice
 * @property string $transactionId
 * @property DTS\eBaySDK\Trading\Types\AmountType $transactionPrice
 * @property DTS\eBaySDK\Trading\Types\SiteCodeType(string) $transactionSiteId
 * @property DTS\eBaySDK\Trading\Types\UnpaidItemType $unpaidItem
 * @property DTS\eBaySDK\Trading\Types\VariationType $variation
 * @property integer $vatpErcent
 */
class TransactionType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'actualHandlingCost' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ActualHandlingCost'
        ),
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
        'amountPaid' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountPaid'
        ),
        'bestOfferSale' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BestOfferSale'
        ),
        'bundlePurchase' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BundlePurchase'
        ),
        'buyer' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Buyer'
        ),
        'buyerCheckoutMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerCheckoutMessage'
        ),
        'buyerGuaranteePrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerGuaranteePrice'
        ),
        'buyerMessage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerMessage'
        ),
        'buyerPaidStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerPaidStatus'
        ),
        'cartId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CartID'
        ),
        'codiceFiscale' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CodiceFiscale'
        ),
        'containingOrder' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\OrderType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ContainingOrder'
        ),
        'convertedAdjustmentAmount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedAdjustmentAmount'
        ),
        'convertedAmountPaid' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedAmountPaid'
        ),
        'convertedTransactionPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ConvertedTransactionPrice'
        ),
        'createdDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreatedDate'
        ),
        'depositType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DepositType'
        ),
        'dutchAuctionBid' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DutchAuctionBid'
        ),
        'externalTransaction' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExternalTransactionType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ExternalTransaction'
        ),
        'feedbackLeft' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackLeft'
        ),
        'feedbackReceived' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackReceived'
        ),
        'finalValueFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FinalValueFee'
        ),
        'intangibleItem' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntangibleItem'
        ),
        'invoiceSentTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceSentTime'
        ),
        'isMultiLegShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IsMultiLegShipping'
        ),
        'item' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ),
        'listingCheckoutRedirectPreference' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ListingCheckoutRedirectPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingCheckoutRedirectPreference'
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
        'paisaPayId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayID'
        ),
        'payPalEmailAddress' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalEmailAddress'
        ),
        'paymentHoldDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaymentHoldDetailType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldDetails'
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
        'platform' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Platform'
        ),
        'quantityPurchased' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QuantityPurchased'
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
        'sellerContactBuyerByEmail' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerContactBuyerByEmail'
        ),
        'sellerDiscounts' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellerDiscountsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerDiscounts'
        ),
        'sellerPaidStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerPaidStatus'
        ),
        'sellingManagerProductDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellingManagerProductDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellingManagerProductDetails'
        ),
        'shippedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
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
        'status' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TransactionStatusType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'taxes' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TaxesType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Taxes'
        ),
        'totalPrice' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TotalPrice'
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
        ),
        'transactionSiteId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionSiteID'
        ),
        'unpaidItem' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\UnpaidItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UnpaidItem'
        ),
        'variation' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\VariationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Variation'
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
