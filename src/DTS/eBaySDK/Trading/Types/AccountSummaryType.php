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
 * @property DTS\eBaySDK\Trading\Types\AccountStateCodeType(string) $accountState
 * @property DTS\eBaySDK\Trading\Types\AdditionalAccountType $additionalAccount
 * @property DTS\eBaySDK\Trading\Types\AmountType $amountPastDue
 * @property string $bankAccountInfo
 * @property DateTime $bankModifyDate
 * @property integer $billingCycleDate
 * @property DateTime $creditCardExpiration
 * @property string $creditCardInfo
 * @property DateTime $creditCardModifyDate
 * @property DTS\eBaySDK\Trading\Types\AmountType $currentBalance
 * @property string $email
 * @property DTS\eBaySDK\Trading\Types\AmountType $invoiceBalance
 * @property DTS\eBaySDK\Trading\Types\AmountType $invoiceCredit
 * @property DateTime $invoiceDate
 * @property DTS\eBaySDK\Trading\Types\AmountType $invoiceNewFee
 * @property DTS\eBaySDK\Trading\Types\AmountType $invoicePayment
 * @property DTS\eBaySDK\Trading\Types\AmountType $lastAmountPaid
 * @property DateTime $lastPaymentDate
 * @property boolean $pastDue
 * @property DTS\eBaySDK\Trading\Types\SellerPaymentMethodCodeType(string) $paymentMethod
 */
class AccountSummaryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'accountState' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AccountState'
        ),
        'additionalAccount' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AdditionalAccountType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'AdditionalAccount'
        ),
        'amountPastDue' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AmountPastDue'
        ),
        'bankAccountInfo' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BankAccountInfo'
        ),
        'bankModifyDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BankModifyDate'
        ),
        'billingCycleDate' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BillingCycleDate'
        ),
        'creditCardExpiration' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreditCardExpiration'
        ),
        'creditCardInfo' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreditCardInfo'
        ),
        'creditCardModifyDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CreditCardModifyDate'
        ),
        'currentBalance' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CurrentBalance'
        ),
        'email' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Email'
        ),
        'invoiceBalance' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceBalance'
        ),
        'invoiceCredit' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceCredit'
        ),
        'invoiceDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceDate'
        ),
        'invoiceNewFee' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoiceNewFee'
        ),
        'invoicePayment' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InvoicePayment'
        ),
        'lastAmountPaid' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastAmountPaid'
        ),
        'lastPaymentDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastPaymentDate'
        ),
        'pastDue' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PastDue'
        ),
        'paymentMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
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
