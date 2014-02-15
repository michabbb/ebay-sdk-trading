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
 * @property boolean $allowPaymentEdit
 * @property DTS\eBaySDK\Trading\Types\CurrencyCodeType(string) $billingCurrency
 * @property DTS\eBaySDK\Trading\Types\CharityAffiliationDetailsType $charityAffiliationDetails
 * @property boolean $charityRegistered
 * @property boolean $checkoutEnabled
 * @property boolean $cipbAnkAccountStored
 * @property boolean $domesticRateTable
 * @property DTS\eBaySDK\Trading\Types\FeatureEligibilityType $featureEligibility
 * @property boolean $goodStanding
 * @property DTS\eBaySDK\Trading\Types\IntegratedMerchantCreditCardInfoType $integratedMerchantCreditCardInfo
 * @property boolean $internationalRateTable
 * @property DTS\eBaySDK\Trading\Types\MerchandizingPrefCodeType(string) $merchandizingPref
 * @property integer $paisaPayEscrowEmisTatus
 * @property integer $paisaPayStatus
 * @property DTS\eBaySDK\Trading\Types\SellerPaymentMethodCodeType(string) $paymentMethod
 * @property DTS\eBaySDK\Trading\Types\ProStoresCheckoutPreferenceType $proStoresPreference
 * @property boolean $qualifiesForB2Bvat
 * @property DTS\eBaySDK\Trading\Types\RecoupmentPolicyConsentType $recoupmentPolicyConsent
 * @property boolean $registeredBusinessSeller
 * @property boolean $safePaymentExempt
 * @property DTS\eBaySDK\Trading\Types\SchedulingInfoType $schedulingInfo
 * @property DTS\eBaySDK\Trading\Types\SellerBusinessCodeType(string) $sellerBusinessType
 * @property DTS\eBaySDK\Trading\Types\SellerGuaranteeLevelCodeType(string) $sellerGuaranteeLevel
 * @property DTS\eBaySDK\Trading\Types\SellerLevelCodeType(string) $sellerLevel
 * @property DTS\eBaySDK\Trading\Types\AddressType $sellerPaymentAddress
 * @property DTS\eBaySDK\Trading\Types\SellereBayPaymentProcessConsentCodeType $sellereBayPaymentProcessConsent
 * @property DTS\eBaySDK\Trading\Types\SellereBayPaymentProcessStatusCodeType(string) $sellereBayPaymentProcessStatus
 * @property boolean $storeOwner
 * @property DTS\eBaySDK\Trading\Types\SiteCodeType(string) $storeSite
 * @property string $storeUrl
 * @property boolean $topRatedSeller
 * @property DTS\eBaySDK\Trading\Types\TopRatedSellerDetailsType $topRatedSellerDetails
 * @property double $transactionPercent
 */
class SellerType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'allowPaymentEdit' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AllowPaymentEdit'
        ),
        'billingCurrency' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BillingCurrency'
        ),
        'charityAffiliationDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\CharityAffiliationDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityAffiliationDetails'
        ),
        'charityRegistered' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CharityRegistered'
        ),
        'checkoutEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutEnabled'
        ),
        'cipbAnkAccountStored' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CIPBankAccountStored'
        ),
        'domesticRateTable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DomesticRateTable'
        ),
        'featureEligibility' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeatureEligibilityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeatureEligibility'
        ),
        'goodStanding' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'GoodStanding'
        ),
        'integratedMerchantCreditCardInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\IntegratedMerchantCreditCardInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardInfo'
        ),
        'internationalRateTable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InternationalRateTable'
        ),
        'merchandizingPref' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'MerchandizingPref'
        ),
        'paisaPayEscrowEmisTatus' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayEscrowEMIStatus'
        ),
        'paisaPayStatus' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaisaPayStatus'
        ),
        'paymentMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethod'
        ),
        'proStoresPreference' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ProStoresCheckoutPreferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProStoresPreference'
        ),
        'qualifiesForB2Bvat' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'QualifiesForB2BVAT'
        ),
        'recoupmentPolicyConsent' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\RecoupmentPolicyConsentType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RecoupmentPolicyConsent'
        ),
        'registeredBusinessSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RegisteredBusinessSeller'
        ),
        'safePaymentExempt' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SafePaymentExempt'
        ),
        'schedulingInfo' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SchedulingInfoType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SchedulingInfo'
        ),
        'sellerBusinessType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerBusinessType'
        ),
        'sellerGuaranteeLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerGuaranteeLevel'
        ),
        'sellerLevel' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerLevel'
        ),
        'sellerPaymentAddress' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellerPaymentAddress'
        ),
        'sellereBayPaymentProcessConsent' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SellereBayPaymentProcessConsentCodeType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellereBayPaymentProcessConsent'
        ),
        'sellereBayPaymentProcessStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SellereBayPaymentProcessStatus'
        ),
        'storeOwner' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreOwner'
        ),
        'storeSite' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreSite'
        ),
        'storeUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StoreURL'
        ),
        'topRatedSeller' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedSeller'
        ),
        'topRatedSellerDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\TopRatedSellerDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TopRatedSellerDetails'
        ),
        'transactionPercent' => array(
            'type' => 'double',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionPercent'
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
